<?php

namespace ContainerUqx24W3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5eeb9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9a525 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf245e = [
        
    ];

    public function getConnection()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getConnection', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getMetadataFactory', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getExpressionBuilder', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'beginTransaction', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getCache', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'transactional', array('func' => $func), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->transactional($func);
    }

    public function commit()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'commit', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->commit();
    }

    public function rollback()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'rollback', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getClassMetadata', array('className' => $className), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'createQuery', array('dql' => $dql), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'createNamedQuery', array('name' => $name), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'createQueryBuilder', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'flush', array('entity' => $entity), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'clear', array('entityName' => $entityName), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->clear($entityName);
    }

    public function close()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'close', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->close();
    }

    public function persist($entity)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'persist', array('entity' => $entity), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'remove', array('entity' => $entity), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'refresh', array('entity' => $entity), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'detach', array('entity' => $entity), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'merge', array('entity' => $entity), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'contains', array('entity' => $entity), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getEventManager', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getConfiguration', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'isOpen', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getUnitOfWork', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getProxyFactory', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'initializeObject', array('obj' => $obj), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'getFilters', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'isFiltersStateClean', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'hasFilters', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return $this->valueHolder5eeb9->hasFilters();
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

        $instance->initializer9a525 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5eeb9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5eeb9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5eeb9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, '__get', ['name' => $name], $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        if (isset(self::$publicPropertiesf245e[$name])) {
            return $this->valueHolder5eeb9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5eeb9;

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

        $targetObject = $this->valueHolder5eeb9;
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
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5eeb9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5eeb9;
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
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, '__isset', array('name' => $name), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5eeb9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5eeb9;
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
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, '__unset', array('name' => $name), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5eeb9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5eeb9;
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
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, '__clone', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        $this->valueHolder5eeb9 = clone $this->valueHolder5eeb9;
    }

    public function __sleep()
    {
        $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, '__sleep', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;

        return array('valueHolder5eeb9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9a525 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9a525;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9a525 && ($this->initializer9a525->__invoke($valueHolder5eeb9, $this, 'initializeProxy', array(), $this->initializer9a525) || 1) && $this->valueHolder5eeb9 = $valueHolder5eeb9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5eeb9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5eeb9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
