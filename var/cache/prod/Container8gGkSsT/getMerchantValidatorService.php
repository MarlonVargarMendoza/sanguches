<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Validator\\MerchantValidator'] = new \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator(($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->load('getPayPalConfigurationService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] ?? $this->load('getPsAccountRepositoryService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())));