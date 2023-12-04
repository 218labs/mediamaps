<?php

namespace ContainerXUbZkoD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0dbb2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf9f95 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties83a95 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getConnection', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getMetadataFactory', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getExpressionBuilder', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'beginTransaction', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getCache', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'transactional', array('func' => $func), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'commit', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->commit();
    }

    public function rollback()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'rollback', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getClassMetadata', array('className' => $className), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'createQuery', array('dql' => $dql), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'createNamedQuery', array('name' => $name), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'createQueryBuilder', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'flush', array('entity' => $entity), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'clear', array('entityName' => $entityName), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->clear($entityName);
    }

    public function close()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'close', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->close();
    }

    public function persist($entity)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'persist', array('entity' => $entity), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'remove', array('entity' => $entity), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'detach', array('entity' => $entity), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'merge', array('entity' => $entity), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'contains', array('entity' => $entity), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getEventManager', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getConfiguration', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'isOpen', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getUnitOfWork', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getProxyFactory', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'initializeObject', array('obj' => $obj), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'getFilters', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'isFiltersStateClean', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'hasFilters', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return $this->valueHolder0dbb2->hasFilters();
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

        $instance->initializerf9f95 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder0dbb2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0dbb2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0dbb2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, '__get', ['name' => $name], $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        if (isset(self::$publicProperties83a95[$name])) {
            return $this->valueHolder0dbb2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0dbb2;

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

        $targetObject = $this->valueHolder0dbb2;
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
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0dbb2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0dbb2;
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
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, '__isset', array('name' => $name), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0dbb2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0dbb2;
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
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, '__unset', array('name' => $name), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0dbb2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0dbb2;
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
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, '__clone', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        $this->valueHolder0dbb2 = clone $this->valueHolder0dbb2;
    }

    public function __sleep()
    {
        $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, '__sleep', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;

        return array('valueHolder0dbb2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf9f95 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf9f95;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf9f95 && ($this->initializerf9f95->__invoke($valueHolder0dbb2, $this, 'initializeProxy', array(), $this->initializerf9f95) || 1) && $this->valueHolder0dbb2 = $valueHolder0dbb2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0dbb2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0dbb2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
