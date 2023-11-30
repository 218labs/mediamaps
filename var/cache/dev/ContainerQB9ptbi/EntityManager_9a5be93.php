<?php

namespace ContainerQB9ptbi;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder75b23 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer22a9a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6f4f2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getConnection', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getMetadataFactory', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getExpressionBuilder', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'beginTransaction', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getCache', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getCache();
    }

    public function transactional($func)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'transactional', array('func' => $func), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'wrapInTransaction', array('func' => $func), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'commit', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->commit();
    }

    public function rollback()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'rollback', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getClassMetadata', array('className' => $className), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'createQuery', array('dql' => $dql), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'createNamedQuery', array('name' => $name), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'createQueryBuilder', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'flush', array('entity' => $entity), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'clear', array('entityName' => $entityName), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->clear($entityName);
    }

    public function close()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'close', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->close();
    }

    public function persist($entity)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'persist', array('entity' => $entity), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'remove', array('entity' => $entity), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'detach', array('entity' => $entity), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'merge', array('entity' => $entity), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getRepository', array('entityName' => $entityName), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'contains', array('entity' => $entity), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getEventManager', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getConfiguration', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'isOpen', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getUnitOfWork', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getProxyFactory', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'initializeObject', array('obj' => $obj), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'getFilters', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'isFiltersStateClean', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'hasFilters', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return $this->valueHolder75b23->hasFilters();
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

        $instance->initializer22a9a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder75b23) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder75b23 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder75b23->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, '__get', ['name' => $name], $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        if (isset(self::$publicProperties6f4f2[$name])) {
            return $this->valueHolder75b23->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75b23;

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

        $targetObject = $this->valueHolder75b23;
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
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75b23;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder75b23;
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
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, '__isset', array('name' => $name), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75b23;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder75b23;
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
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, '__unset', array('name' => $name), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75b23;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder75b23;
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
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, '__clone', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        $this->valueHolder75b23 = clone $this->valueHolder75b23;
    }

    public function __sleep()
    {
        $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, '__sleep', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;

        return array('valueHolder75b23');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer22a9a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer22a9a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer22a9a && ($this->initializer22a9a->__invoke($valueHolder75b23, $this, 'initializeProxy', array(), $this->initializer22a9a) || 1) && $this->valueHolder75b23 = $valueHolder75b23;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder75b23;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder75b23;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
