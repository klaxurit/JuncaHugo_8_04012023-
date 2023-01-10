<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7f840 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6658e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa6605 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getConnection', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getMetadataFactory', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getExpressionBuilder', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'beginTransaction', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getCache', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'transactional', array('func' => $func), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->transactional($func);
    }

    public function commit()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'commit', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->commit();
    }

    public function rollback()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'rollback', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getClassMetadata', array('className' => $className), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'createQuery', array('dql' => $dql), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'createNamedQuery', array('name' => $name), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'createQueryBuilder', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'flush', array('entity' => $entity), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'clear', array('entityName' => $entityName), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->clear($entityName);
    }

    public function close()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'close', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->close();
    }

    public function persist($entity)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'persist', array('entity' => $entity), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'remove', array('entity' => $entity), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'refresh', array('entity' => $entity), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'detach', array('entity' => $entity), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'merge', array('entity' => $entity), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'contains', array('entity' => $entity), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getEventManager', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getConfiguration', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'isOpen', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getUnitOfWork', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getProxyFactory', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'initializeObject', array('obj' => $obj), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'getFilters', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'isFiltersStateClean', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'hasFilters', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return $this->valueHolder7f840->hasFilters();
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

        $instance->initializer6658e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7f840) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7f840 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7f840->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, '__get', ['name' => $name], $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        if (isset(self::$publicPropertiesa6605[$name])) {
            return $this->valueHolder7f840->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f840;

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

        $targetObject = $this->valueHolder7f840;
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
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f840;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7f840;
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
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, '__isset', array('name' => $name), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f840;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7f840;
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
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, '__unset', array('name' => $name), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f840;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7f840;
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
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, '__clone', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        $this->valueHolder7f840 = clone $this->valueHolder7f840;
    }

    public function __sleep()
    {
        $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, '__sleep', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;

        return array('valueHolder7f840');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6658e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6658e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6658e && ($this->initializer6658e->__invoke($valueHolder7f840, $this, 'initializeProxy', array(), $this->initializer6658e) || 1) && $this->valueHolder7f840 = $valueHolder7f840;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7f840;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7f840;
    }


}
