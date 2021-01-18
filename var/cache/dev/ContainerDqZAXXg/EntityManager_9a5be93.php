<?php

namespace ContainerDqZAXXg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3fa3a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer06f30 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf182d = [
        
    ];

    public function getConnection()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getConnection', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getMetadataFactory', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getExpressionBuilder', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'beginTransaction', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getCache', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'transactional', array('func' => $func), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->transactional($func);
    }

    public function commit()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'commit', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->commit();
    }

    public function rollback()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'rollback', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getClassMetadata', array('className' => $className), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'createQuery', array('dql' => $dql), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'createNamedQuery', array('name' => $name), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'createQueryBuilder', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'flush', array('entity' => $entity), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'clear', array('entityName' => $entityName), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->clear($entityName);
    }

    public function close()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'close', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->close();
    }

    public function persist($entity)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'persist', array('entity' => $entity), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'remove', array('entity' => $entity), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'refresh', array('entity' => $entity), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'detach', array('entity' => $entity), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'merge', array('entity' => $entity), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'contains', array('entity' => $entity), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getEventManager', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getConfiguration', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'isOpen', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getUnitOfWork', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getProxyFactory', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'initializeObject', array('obj' => $obj), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'getFilters', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'isFiltersStateClean', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'hasFilters', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return $this->valueHolder3fa3a->hasFilters();
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

        $instance->initializer06f30 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3fa3a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3fa3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3fa3a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, '__get', ['name' => $name], $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        if (isset(self::$publicPropertiesf182d[$name])) {
            return $this->valueHolder3fa3a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fa3a;

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

        $targetObject = $this->valueHolder3fa3a;
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
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fa3a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3fa3a;
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
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, '__isset', array('name' => $name), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fa3a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3fa3a;
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
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, '__unset', array('name' => $name), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fa3a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3fa3a;
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
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, '__clone', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        $this->valueHolder3fa3a = clone $this->valueHolder3fa3a;
    }

    public function __sleep()
    {
        $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, '__sleep', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;

        return array('valueHolder3fa3a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer06f30 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer06f30;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer06f30 && ($this->initializer06f30->__invoke($valueHolder3fa3a, $this, 'initializeProxy', array(), $this->initializer06f30) || 1) && $this->valueHolder3fa3a = $valueHolder3fa3a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3fa3a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3fa3a;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
