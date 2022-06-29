<?php

namespace ContainerIk38vrQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0ac9f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer22ee3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8e50b = [
        
    ];

    public function getConnection()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getConnection', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getMetadataFactory', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getExpressionBuilder', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'beginTransaction', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getCache', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'transactional', array('func' => $func), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'commit', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->commit();
    }

    public function rollback()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'rollback', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getClassMetadata', array('className' => $className), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'createQuery', array('dql' => $dql), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'createNamedQuery', array('name' => $name), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'createQueryBuilder', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'flush', array('entity' => $entity), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'clear', array('entityName' => $entityName), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->clear($entityName);
    }

    public function close()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'close', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->close();
    }

    public function persist($entity)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'persist', array('entity' => $entity), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'remove', array('entity' => $entity), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'refresh', array('entity' => $entity), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'detach', array('entity' => $entity), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'merge', array('entity' => $entity), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'contains', array('entity' => $entity), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getEventManager', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getConfiguration', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'isOpen', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getUnitOfWork', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getProxyFactory', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'initializeObject', array('obj' => $obj), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'getFilters', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'isFiltersStateClean', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'hasFilters', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return $this->valueHolder0ac9f->hasFilters();
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

        $instance->initializer22ee3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0ac9f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0ac9f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0ac9f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, '__get', ['name' => $name], $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        if (isset(self::$publicProperties8e50b[$name])) {
            return $this->valueHolder0ac9f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ac9f;

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

        $targetObject = $this->valueHolder0ac9f;
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
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ac9f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0ac9f;
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
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, '__isset', array('name' => $name), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ac9f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0ac9f;
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
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, '__unset', array('name' => $name), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ac9f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0ac9f;
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
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, '__clone', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        $this->valueHolder0ac9f = clone $this->valueHolder0ac9f;
    }

    public function __sleep()
    {
        $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, '__sleep', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;

        return array('valueHolder0ac9f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer22ee3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer22ee3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer22ee3 && ($this->initializer22ee3->__invoke($valueHolder0ac9f, $this, 'initializeProxy', array(), $this->initializer22ee3) || 1) && $this->valueHolder0ac9f = $valueHolder0ac9f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0ac9f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0ac9f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
