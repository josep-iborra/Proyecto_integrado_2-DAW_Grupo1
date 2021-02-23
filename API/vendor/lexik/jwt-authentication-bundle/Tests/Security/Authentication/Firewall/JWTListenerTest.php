<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Security\Authentication\Firewall;

use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTInvalidEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTNotFoundEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Events;
use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;
use Lexik\Bundle\JWTAuthenticationBundle\Security\Firewall\JWTListener;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * JWTListenerTest.
 *
 * @group legacy
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class JWTListenerTest extends TestCase
{
    /**
     * @group time-sensitive
     */
    public function testHandle()
    {
        $listener = new JWTListener($this->getTokenStorageMock(), $this->getAuthenticationManagerMock());
        $listener->setDispatcher($this->getEventDispatcherMock());
        $this->assertNull($listener($this->getEvent()));

        // one token extractor with no result : should return void

        $listener = new JWTListener($this->getTokenStorageMock(), $this->getAuthenticationManagerMock());
        $dispatcher = $this->getEventDispatcherMock();
        $this->expectEvent(Events::JWT_NOT_FOUND, JWTNotFoundEvent::class, $dispatcher);

        $listener->setDispatcher($dispatcher);
        $listener->addTokenExtractor($this->getAuthorizationHeaderTokenExtractorMock(false));
        $this->assertNull($listener($this->getEvent()));

        // request token found : should enter authentication process

        $authenticationManager = $this->getAuthenticationManagerMock();
        $authenticationManager->expects($this->once())->method('authenticate');

        $listener = new JWTListener($this->getTokenStorageMock(), $authenticationManager);
        $listener->setDispatcher($this->getEventDispatcherMock());
        $listener->addTokenExtractor($this->getAuthorizationHeaderTokenExtractorMock('token'));
        $listener($this->getEvent());

        // request token found : authentication fail

        $invalidTokenException = new \Symfony\Component\Security\Core\Exception\AuthenticationException('Invalid JWT Token');
        $authenticationManager = $this->getAuthenticationManagerMock();
        $authenticationManager
            ->expects($this->once())
            ->method('authenticate');
        $authenticationManager
            ->expects($this->once())
            ->method('authenticate')
            ->will($this->throwException($invalidTokenException));

        $listener = new JWTListener($this->getTokenStorageMock(), $authenticationManager);
        $dispatcher = $this->getEventDispatcherMock();
        $this->expectEvent(Events::JWT_INVALID, JWTInvalidEvent::class, $dispatcher);

        $listener->setDispatcher($dispatcher);
        $listener->addTokenExtractor($this->getAuthorizationHeaderTokenExtractorMock('token'));

        $event = $this->getEvent();
        $event
            ->expects($this->once())
            ->method('setResponse')
            ->with(new JWTAuthenticationFailureResponse($invalidTokenException->getMessage()));

        $listener($event);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function getAuthenticationManagerMock()
    {
        return $this
            ->getMockBuilder('Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function getTokenStorageMock()
    {
        return $this
            ->getMockBuilder(TokenStorageInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @param mixed $returnValue
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getAuthorizationHeaderTokenExtractorMock($returnValue)
    {
        $extractor = $this
            ->getMockBuilder('Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor')
            ->disableOriginalConstructor()
            ->getMock();

        $extractor
            ->expects($this->any())
            ->method('extract')
            ->will($this->returnValue($returnValue));

        return $extractor;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getEvent()
    {
        $request = $this
            ->getMockBuilder('Symfony\Component\HttpFoundation\Request')
            ->disableOriginalConstructor()
            ->getMock();

        $event = $this
            ->getMockBuilder(RequestEvent::class)
            ->disableOriginalConstructor()
            ->getMock();

        $event
            ->expects($this->any())
            ->method('getRequest')
            ->will($this->returnValue($request));

        return $event;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getEventDispatcherMock()
    {
        return $this->getMockBuilder('Symfony\Component\EventDispatcher\EventDispatcher')
            ->disableOriginalConstructor()
            ->getMock();
    }

    private function expectEvent($eventName, $eventType, $dispatcher)
    {
        $dispatcher->expects($this->once())->method('dispatch')->with($this->isInstanceOf($eventType), $eventName);
    }
}
