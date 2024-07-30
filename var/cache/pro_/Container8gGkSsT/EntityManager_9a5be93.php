<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder68e92 = null;
    private $initializerb38fc = null;
    private static $publicPropertiescca1c = [
        
    ];
    public function getConnection()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getConnection', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getMetadataFactory', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getExpressionBuilder', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'beginTransaction', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getCache', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'transactional', array('func' => $func), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'commit', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->commit();
    }
    public function rollback()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'rollback', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getClassMetadata', array('className' => $className), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'createQuery', array('dql' => $dql), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'createNamedQuery', array('name' => $name), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'createQueryBuilder', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'flush', array('entity' => $entity), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'clear', array('entityName' => $entityName), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->clear($entityName);
    }
    public function close()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'close', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->close();
    }
    public function persist($entity)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'persist', array('entity' => $entity), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'remove', array('entity' => $entity), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'refresh', array('entity' => $entity), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'detach', array('entity' => $entity), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'merge', array('entity' => $entity), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'contains', array('entity' => $entity), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getEventManager', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getConfiguration', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'isOpen', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getUnitOfWork', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getProxyFactory', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'initializeObject', array('obj' => $obj), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getFilters', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'isFiltersStateClean', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'hasFilters', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb38fc = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder68e92) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder68e92 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder68e92->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, '__get', ['name' => $name], $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        if (isset(self::$publicPropertiescca1c[$name])) {
            return $this->valueHolder68e92->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68e92;
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
        $targetObject = $this->valueHolder68e92;
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
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68e92;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder68e92;
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
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, '__isset', array('name' => $name), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68e92;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder68e92;
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
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, '__unset', array('name' => $name), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68e92;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder68e92;
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
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, '__clone', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        $this->valueHolder68e92 = clone $this->valueHolder68e92;
    }
    public function __sleep()
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, '__sleep', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return array('valueHolder68e92');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb38fc = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb38fc;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'initializeProxy', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder68e92;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder68e92;
    }
}
