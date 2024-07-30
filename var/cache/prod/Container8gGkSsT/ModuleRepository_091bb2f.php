<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder68e92 = null;
    private $initializerb38fc = null;
    private static $publicPropertiescca1c = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getList', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getInstalledModules', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getMustBeConfiguredModules', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getUpgradableModules', array(), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'setActionUrls', array('collection' => $collection), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        return $this->valueHolder68e92->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerb38fc = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder68e92) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder68e92 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder68e92->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerb38fc && ($this->initializerb38fc->__invoke($valueHolder68e92, $this, '__get', ['name' => $name], $this->initializerb38fc) || 1) && $this->valueHolder68e92 = $valueHolder68e92;
        if (isset(self::$publicPropertiescca1c[$name])) {
            return $this->valueHolder68e92->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
