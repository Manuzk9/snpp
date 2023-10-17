<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderba670 = null;
    private $initializera0a5c = null;
    private static $publicPropertiesa314a = [
        
    ];
    public function getConnection()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getConnection', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getMetadataFactory', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getExpressionBuilder', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'beginTransaction', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getCache', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getCache();
    }
    public function transactional($func)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'transactional', array('func' => $func), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'wrapInTransaction', array('func' => $func), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'commit', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->commit();
    }
    public function rollback()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'rollback', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getClassMetadata', array('className' => $className), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'createQuery', array('dql' => $dql), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'createNamedQuery', array('name' => $name), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'createQueryBuilder', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'flush', array('entity' => $entity), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'clear', array('entityName' => $entityName), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->clear($entityName);
    }
    public function close()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'close', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->close();
    }
    public function persist($entity)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'persist', array('entity' => $entity), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'remove', array('entity' => $entity), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'refresh', array('entity' => $entity), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'detach', array('entity' => $entity), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'merge', array('entity' => $entity), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getRepository', array('entityName' => $entityName), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'contains', array('entity' => $entity), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getEventManager', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getConfiguration', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'isOpen', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getUnitOfWork', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getProxyFactory', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'initializeObject', array('obj' => $obj), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'getFilters', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'isFiltersStateClean', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'hasFilters', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return $this->valueHolderba670->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera0a5c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderba670) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderba670 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderba670->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, '__get', ['name' => $name], $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        if (isset(self::$publicPropertiesa314a[$name])) {
            return $this->valueHolderba670->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba670;
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
        $targetObject = $this->valueHolderba670;
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
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba670;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderba670;
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
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, '__isset', array('name' => $name), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba670;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderba670;
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
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, '__unset', array('name' => $name), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba670;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderba670;
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
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, '__clone', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        $this->valueHolderba670 = clone $this->valueHolderba670;
    }
    public function __sleep()
    {
        $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, '__sleep', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
        return array('valueHolderba670');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera0a5c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera0a5c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera0a5c && ($this->initializera0a5c->__invoke($valueHolderba670, $this, 'initializeProxy', array(), $this->initializera0a5c) || 1) && $this->valueHolderba670 = $valueHolderba670;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderba670;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderba670;
    }
}
