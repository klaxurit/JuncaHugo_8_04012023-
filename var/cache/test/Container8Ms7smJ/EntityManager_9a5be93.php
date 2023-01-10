<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0b059 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb3fdf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties84005 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getConnection', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getMetadataFactory', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getExpressionBuilder', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'beginTransaction', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getCache', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'transactional', array('func' => $func), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->transactional($func);
    }

    public function commit()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'commit', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->commit();
    }

    public function rollback()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'rollback', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getClassMetadata', array('className' => $className), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'createQuery', array('dql' => $dql), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'createNamedQuery', array('name' => $name), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'createQueryBuilder', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'flush', array('entity' => $entity), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'clear', array('entityName' => $entityName), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->clear($entityName);
    }

    public function close()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'close', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->close();
    }

    public function persist($entity)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'persist', array('entity' => $entity), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'remove', array('entity' => $entity), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'refresh', array('entity' => $entity), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'detach', array('entity' => $entity), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'merge', array('entity' => $entity), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'contains', array('entity' => $entity), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getEventManager', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getConfiguration', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'isOpen', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getUnitOfWork', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getProxyFactory', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'initializeObject', array('obj' => $obj), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'getFilters', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'isFiltersStateClean', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'hasFilters', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return $this->valueHolder0b059->hasFilters();
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

        $instance->initializerb3fdf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0b059) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0b059 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0b059->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, '__get', ['name' => $name], $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        if (isset(self::$publicProperties84005[$name])) {
            return $this->valueHolder0b059->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b059;

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

        $targetObject = $this->valueHolder0b059;
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
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b059;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0b059;
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
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, '__isset', array('name' => $name), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b059;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0b059;
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
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, '__unset', array('name' => $name), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b059;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0b059;
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
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, '__clone', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        $this->valueHolder0b059 = clone $this->valueHolder0b059;
    }

    public function __sleep()
    {
        $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, '__sleep', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;

        return array('valueHolder0b059');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb3fdf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb3fdf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb3fdf && ($this->initializerb3fdf->__invoke($valueHolder0b059, $this, 'initializeProxy', array(), $this->initializerb3fdf) || 1) && $this->valueHolder0b059 = $valueHolder0b059;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0b059;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0b059;
    }


}
