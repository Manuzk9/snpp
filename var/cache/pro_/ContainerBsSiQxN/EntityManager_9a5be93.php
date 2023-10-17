<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere14aa = null;
    private $initializerf5530 = null;
    private static $publicProperties6963e = [
        
    ];
    public function getConnection()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getConnection', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getMetadataFactory', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getExpressionBuilder', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'beginTransaction', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getCache', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getCache();
    }
    public function transactional($func)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'transactional', array('func' => $func), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'commit', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->commit();
    }
    public function rollback()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'rollback', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getClassMetadata', array('className' => $className), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'createQuery', array('dql' => $dql), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'createNamedQuery', array('name' => $name), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'createQueryBuilder', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'flush', array('entity' => $entity), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'clear', array('entityName' => $entityName), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->clear($entityName);
    }
    public function close()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'close', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->close();
    }
    public function persist($entity)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'persist', array('entity' => $entity), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'remove', array('entity' => $entity), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'refresh', array('entity' => $entity), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'detach', array('entity' => $entity), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'merge', array('entity' => $entity), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'contains', array('entity' => $entity), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getEventManager', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getConfiguration', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'isOpen', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getUnitOfWork', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getProxyFactory', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'initializeObject', array('obj' => $obj), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'getFilters', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'isFiltersStateClean', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'hasFilters', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return $this->valueHoldere14aa->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerf5530 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere14aa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere14aa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere14aa->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, '__get', ['name' => $name], $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        if (isset(self::$publicProperties6963e[$name])) {
            return $this->valueHoldere14aa->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere14aa;
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
        $targetObject = $this->valueHoldere14aa;
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
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere14aa;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere14aa;
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
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, '__isset', array('name' => $name), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere14aa;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere14aa;
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
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, '__unset', array('name' => $name), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere14aa;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere14aa;
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
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, '__clone', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        $this->valueHoldere14aa = clone $this->valueHoldere14aa;
    }
    public function __sleep()
    {
        $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, '__sleep', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
        return array('valueHoldere14aa');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf5530 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf5530;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf5530 && ($this->initializerf5530->__invoke($valueHoldere14aa, $this, 'initializeProxy', array(), $this->initializerf5530) || 1) && $this->valueHoldere14aa = $valueHoldere14aa;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere14aa;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere14aa;
    }
}
