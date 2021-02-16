<?php

namespace ContainerVFNI5x4;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd99ed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer19e08 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties25e5a = [
        
    ];

    public function getConnection()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getConnection', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getMetadataFactory', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getExpressionBuilder', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'beginTransaction', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getCache', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getCache();
    }

    public function transactional($func)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'transactional', array('func' => $func), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->transactional($func);
    }

    public function commit()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'commit', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->commit();
    }

    public function rollback()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'rollback', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getClassMetadata', array('className' => $className), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'createQuery', array('dql' => $dql), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'createNamedQuery', array('name' => $name), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'createQueryBuilder', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'flush', array('entity' => $entity), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'clear', array('entityName' => $entityName), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->clear($entityName);
    }

    public function close()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'close', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->close();
    }

    public function persist($entity)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'persist', array('entity' => $entity), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'remove', array('entity' => $entity), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'refresh', array('entity' => $entity), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'detach', array('entity' => $entity), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'merge', array('entity' => $entity), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getRepository', array('entityName' => $entityName), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'contains', array('entity' => $entity), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getEventManager', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getConfiguration', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'isOpen', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getUnitOfWork', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getProxyFactory', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'initializeObject', array('obj' => $obj), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'getFilters', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'isFiltersStateClean', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'hasFilters', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return $this->valueHolderd99ed->hasFilters();
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

        $instance->initializer19e08 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd99ed) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd99ed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd99ed->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, '__get', ['name' => $name], $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        if (isset(self::$publicProperties25e5a[$name])) {
            return $this->valueHolderd99ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd99ed;

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

        $targetObject = $this->valueHolderd99ed;
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
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd99ed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd99ed;
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
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, '__isset', array('name' => $name), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd99ed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd99ed;
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
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, '__unset', array('name' => $name), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd99ed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd99ed;
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
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, '__clone', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        $this->valueHolderd99ed = clone $this->valueHolderd99ed;
    }

    public function __sleep()
    {
        $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, '__sleep', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;

        return array('valueHolderd99ed');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer19e08 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer19e08;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer19e08 && ($this->initializer19e08->__invoke($valueHolderd99ed, $this, 'initializeProxy', array(), $this->initializer19e08) || 1) && $this->valueHolderd99ed = $valueHolderd99ed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd99ed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd99ed;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
