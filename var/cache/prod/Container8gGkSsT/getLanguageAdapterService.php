<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Adapter\\LanguageAdapter'] = new \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter(($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] ?? $this->load('getShopContextService.php')));
