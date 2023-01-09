<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4f3f0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercfa8d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescee5b = [
        
    ];

    public function getConnection()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getConnection', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getMetadataFactory', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getExpressionBuilder', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'beginTransaction', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getCache', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getCache();
    }

    public function transactional($func)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'transactional', array('func' => $func), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->transactional($func);
    }

    public function commit()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'commit', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->commit();
    }

    public function rollback()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'rollback', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getClassMetadata', array('className' => $className), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'createQuery', array('dql' => $dql), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'createNamedQuery', array('name' => $name), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'createQueryBuilder', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'flush', array('entity' => $entity), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'clear', array('entityName' => $entityName), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->clear($entityName);
    }

    public function close()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'close', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->close();
    }

    public function persist($entity)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'persist', array('entity' => $entity), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'remove', array('entity' => $entity), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'refresh', array('entity' => $entity), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'detach', array('entity' => $entity), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'merge', array('entity' => $entity), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getRepository', array('entityName' => $entityName), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'contains', array('entity' => $entity), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getEventManager', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getConfiguration', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'isOpen', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getUnitOfWork', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getProxyFactory', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'initializeObject', array('obj' => $obj), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'getFilters', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'isFiltersStateClean', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'hasFilters', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return $this->valueHolder4f3f0->hasFilters();
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

        $instance->initializercfa8d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4f3f0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4f3f0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4f3f0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, '__get', ['name' => $name], $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        if (isset(self::$publicPropertiescee5b[$name])) {
            return $this->valueHolder4f3f0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f3f0;

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

        $targetObject = $this->valueHolder4f3f0;
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
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f3f0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4f3f0;
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
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, '__isset', array('name' => $name), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f3f0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4f3f0;
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
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, '__unset', array('name' => $name), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f3f0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4f3f0;
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
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, '__clone', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        $this->valueHolder4f3f0 = clone $this->valueHolder4f3f0;
    }

    public function __sleep()
    {
        $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, '__sleep', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;

        return array('valueHolder4f3f0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercfa8d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercfa8d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercfa8d && ($this->initializercfa8d->__invoke($valueHolder4f3f0, $this, 'initializeProxy', array(), $this->initializercfa8d) || 1) && $this->valueHolder4f3f0 = $valueHolder4f3f0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4f3f0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4f3f0;
    }


}
