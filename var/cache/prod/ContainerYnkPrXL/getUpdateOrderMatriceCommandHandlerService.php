<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Order\Matrice\CommandHandler\UpdateOrderMatriceCommandHandler' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\CommandHandler\\UpdateOrderMatriceCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\Matrice\CommandHandler\UpdateOrderMatriceCommandHandler(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] ?? $this->load('getSymfonyEventDispatcherAdapterService.php')));
