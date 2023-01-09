<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb27cd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer92a00 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd8a32 = [
        
    ];

    public function getConnection()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getConnection', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getMetadataFactory', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getExpressionBuilder', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'beginTransaction', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getCache', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'transactional', array('func' => $func), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->transactional($func);
    }

    public function commit()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'commit', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->commit();
    }

    public function rollback()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'rollback', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getClassMetadata', array('className' => $className), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'createQuery', array('dql' => $dql), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'createNamedQuery', array('name' => $name), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'createQueryBuilder', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'flush', array('entity' => $entity), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'clear', array('entityName' => $entityName), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->clear($entityName);
    }

    public function close()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'close', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->close();
    }

    public function persist($entity)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'persist', array('entity' => $entity), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'remove', array('entity' => $entity), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'refresh', array('entity' => $entity), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'detach', array('entity' => $entity), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'merge', array('entity' => $entity), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'contains', array('entity' => $entity), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getEventManager', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getConfiguration', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'isOpen', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getUnitOfWork', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getProxyFactory', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'initializeObject', array('obj' => $obj), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'getFilters', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'isFiltersStateClean', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'hasFilters', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return $this->valueHolderb27cd->hasFilters();
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

        $instance->initializer92a00 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb27cd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb27cd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb27cd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, '__get', ['name' => $name], $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        if (isset(self::$publicPropertiesd8a32[$name])) {
            return $this->valueHolderb27cd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb27cd;

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

        $targetObject = $this->valueHolderb27cd;
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
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb27cd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb27cd;
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
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, '__isset', array('name' => $name), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb27cd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb27cd;
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
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, '__unset', array('name' => $name), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb27cd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb27cd;
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
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, '__clone', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        $this->valueHolderb27cd = clone $this->valueHolderb27cd;
    }

    public function __sleep()
    {
        $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, '__sleep', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;

        return array('valueHolderb27cd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer92a00 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer92a00;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer92a00 && ($this->initializer92a00->__invoke($valueHolderb27cd, $this, 'initializeProxy', array(), $this->initializer92a00) || 1) && $this->valueHolderb27cd = $valueHolderb27cd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb27cd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb27cd;
    }


}
