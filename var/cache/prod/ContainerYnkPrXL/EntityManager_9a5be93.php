<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderffb8d = null;
    private $initializer7d526 = null;
    private static $publicProperties7ec43 = [
        
    ];
    public function getConnection()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getConnection', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getMetadataFactory', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getExpressionBuilder', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'beginTransaction', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getCache', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getCache();
    }
    public function transactional($func)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'transactional', array('func' => $func), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'commit', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->commit();
    }
    public function rollback()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'rollback', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getClassMetadata', array('className' => $className), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'createQuery', array('dql' => $dql), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'createNamedQuery', array('name' => $name), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'createQueryBuilder', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'flush', array('entity' => $entity), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'clear', array('entityName' => $entityName), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->clear($entityName);
    }
    public function close()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'close', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->close();
    }
    public function persist($entity)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'persist', array('entity' => $entity), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'remove', array('entity' => $entity), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'refresh', array('entity' => $entity), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'detach', array('entity' => $entity), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'merge', array('entity' => $entity), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'contains', array('entity' => $entity), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getEventManager', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getConfiguration', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'isOpen', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getUnitOfWork', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getProxyFactory', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'initializeObject', array('obj' => $obj), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getFilters', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'isFiltersStateClean', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'hasFilters', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer7d526 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderffb8d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderffb8d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderffb8d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, '__get', ['name' => $name], $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        if (isset(self::$publicProperties7ec43[$name])) {
            return $this->valueHolderffb8d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffb8d;
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
        $targetObject = $this->valueHolderffb8d;
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
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffb8d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderffb8d;
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
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, '__isset', array('name' => $name), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffb8d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderffb8d;
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
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, '__unset', array('name' => $name), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffb8d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderffb8d;
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
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, '__clone', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        $this->valueHolderffb8d = clone $this->valueHolderffb8d;
    }
    public function __sleep()
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, '__sleep', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return array('valueHolderffb8d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7d526 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7d526;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'initializeProxy', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderffb8d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderffb8d;
    }
}
