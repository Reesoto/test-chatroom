<?php

namespace ContainerTr3c8Q1;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5f967 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer001b5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0ee89 = [
        
    ];

    public function getConnection()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getConnection', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getMetadataFactory', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getExpressionBuilder', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'beginTransaction', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getCache', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getCache();
    }

    public function transactional($func)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'transactional', array('func' => $func), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->transactional($func);
    }

    public function commit()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'commit', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->commit();
    }

    public function rollback()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'rollback', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getClassMetadata', array('className' => $className), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'createQuery', array('dql' => $dql), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'createNamedQuery', array('name' => $name), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'createQueryBuilder', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'flush', array('entity' => $entity), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'clear', array('entityName' => $entityName), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->clear($entityName);
    }

    public function close()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'close', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->close();
    }

    public function persist($entity)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'persist', array('entity' => $entity), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'remove', array('entity' => $entity), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'refresh', array('entity' => $entity), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'detach', array('entity' => $entity), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'merge', array('entity' => $entity), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getRepository', array('entityName' => $entityName), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'contains', array('entity' => $entity), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getEventManager', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getConfiguration', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'isOpen', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getUnitOfWork', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getProxyFactory', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'initializeObject', array('obj' => $obj), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'getFilters', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'isFiltersStateClean', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'hasFilters', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return $this->valueHolder5f967->hasFilters();
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

        $instance->initializer001b5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5f967) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5f967 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5f967->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, '__get', ['name' => $name], $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        if (isset(self::$publicProperties0ee89[$name])) {
            return $this->valueHolder5f967->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f967;

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

        $targetObject = $this->valueHolder5f967;
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
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f967;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5f967;
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
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, '__isset', array('name' => $name), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f967;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5f967;
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
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, '__unset', array('name' => $name), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f967;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5f967;
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
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, '__clone', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        $this->valueHolder5f967 = clone $this->valueHolder5f967;
    }

    public function __sleep()
    {
        $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, '__sleep', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;

        return array('valueHolder5f967');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer001b5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer001b5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer001b5 && ($this->initializer001b5->__invoke($valueHolder5f967, $this, 'initializeProxy', array(), $this->initializer001b5) || 1) && $this->valueHolder5f967 = $valueHolder5f967;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5f967;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5f967;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
