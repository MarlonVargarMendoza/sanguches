<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderffb8d = null;
    private $initializer7d526 = null;
    private static $publicProperties7ec43 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getList', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getInstalledModules', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getMustBeConfiguredModules', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getUpgradableModules', array(), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'setActionUrls', array('collection' => $collection), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        return $this->valueHolderffb8d->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer7d526 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderffb8d) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderffb8d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderffb8d->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer7d526 && ($this->initializer7d526->__invoke($valueHolderffb8d, $this, '__get', ['name' => $name], $this->initializer7d526) || 1) && $this->valueHolderffb8d = $valueHolderffb8d;
        if (isset(self::$publicProperties7ec43[$name])) {
            return $this->valueHolderffb8d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
