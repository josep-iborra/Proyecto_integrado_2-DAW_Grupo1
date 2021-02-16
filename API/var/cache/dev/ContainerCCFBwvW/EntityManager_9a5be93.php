<?php

namespace ContainerCCFBwvW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder508eb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer037d9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties07712 = [
        
    ];

    public function getConnection()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getConnection', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getMetadataFactory', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getExpressionBuilder', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'beginTransaction', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getCache', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'transactional', array('func' => $func), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->transactional($func);
    }

    public function commit()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'commit', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->commit();
    }

    public function rollback()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'rollback', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getClassMetadata', array('className' => $className), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'createQuery', array('dql' => $dql), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'createNamedQuery', array('name' => $name), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'createQueryBuilder', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'flush', array('entity' => $entity), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'clear', array('entityName' => $entityName), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->clear($entityName);
    }

    public function close()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'close', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->close();
    }

    public function persist($entity)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'persist', array('entity' => $entity), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'remove', array('entity' => $entity), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'refresh', array('entity' => $entity), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'detach', array('entity' => $entity), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'merge', array('entity' => $entity), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'contains', array('entity' => $entity), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getEventManager', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getConfiguration', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'isOpen', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getUnitOfWork', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getProxyFactory', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'initializeObject', array('obj' => $obj), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'getFilters', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'isFiltersStateClean', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'hasFilters', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return $this->valueHolder508eb->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer037d9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder508eb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder508eb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder508eb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, '__get', ['name' => $name], $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        if (isset(self::$publicProperties07712[$name])) {
            return $this->valueHolder508eb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder508eb;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder508eb;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder508eb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder508eb;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, '__isset', array('name' => $name), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder508eb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder508eb;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, '__unset', array('name' => $name), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder508eb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder508eb;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, '__clone', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        $this->valueHolder508eb = clone $this->valueHolder508eb;
    }

    public function __sleep()
    {
        $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, '__sleep', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;

        return array('valueHolder508eb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer037d9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer037d9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer037d9 && ($this->initializer037d9->__invoke($valueHolder508eb, $this, 'initializeProxy', array(), $this->initializer037d9) || 1) && $this->valueHolder508eb = $valueHolder508eb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder508eb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder508eb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
