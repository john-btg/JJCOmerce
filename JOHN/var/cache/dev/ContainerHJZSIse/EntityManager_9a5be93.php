<?php

namespace ContainerHJZSIse;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfaa4e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4c01 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf8143 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getConnection', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getMetadataFactory', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getExpressionBuilder', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'beginTransaction', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getCache', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'transactional', array('func' => $func), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->transactional($func);
    }

    public function commit()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'commit', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->commit();
    }

    public function rollback()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'rollback', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'createQuery', array('dql' => $dql), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'createQueryBuilder', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'flush', array('entity' => $entity), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'clear', array('entityName' => $entityName), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->clear($entityName);
    }

    public function close()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'close', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->close();
    }

    public function persist($entity)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'persist', array('entity' => $entity), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'remove', array('entity' => $entity), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'refresh', array('entity' => $entity), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'detach', array('entity' => $entity), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'merge', array('entity' => $entity), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'contains', array('entity' => $entity), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getEventManager', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getConfiguration', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'isOpen', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getUnitOfWork', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getProxyFactory', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'getFilters', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'isFiltersStateClean', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'hasFilters', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return $this->valueHolderfaa4e->hasFilters();
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

        $instance->initializerc4c01 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfaa4e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfaa4e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfaa4e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, '__get', ['name' => $name], $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        if (isset(self::$publicPropertiesf8143[$name])) {
            return $this->valueHolderfaa4e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfaa4e;

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

        $targetObject = $this->valueHolderfaa4e;
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
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfaa4e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfaa4e;
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
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, '__isset', array('name' => $name), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfaa4e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfaa4e;
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
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, '__unset', array('name' => $name), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfaa4e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfaa4e;
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
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, '__clone', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        $this->valueHolderfaa4e = clone $this->valueHolderfaa4e;
    }

    public function __sleep()
    {
        $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, '__sleep', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;

        return array('valueHolderfaa4e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4c01 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4c01;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4c01 && ($this->initializerc4c01->__invoke($valueHolderfaa4e, $this, 'initializeProxy', array(), $this->initializerc4c01) || 1) && $this->valueHolderfaa4e = $valueHolderfaa4e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfaa4e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfaa4e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
