<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsxDesign\Controller\Admin\AdminPsxDesignAjaxController' shared service.

return $this->services['PrestaShop\\Module\\PsxDesign\\Controller\\Admin\\AdminPsxDesignAjaxController'] = new \PrestaShop\Module\PsxDesign\Controller\Admin\AdminPsxDesignAjaxController(($this->services['prestashop.module.psxdesign.account.provider.token_decoder'] ?? $this->load('getPrestashop_Module_Psxdesign_Account_Provider_TokenDecoderService.php')), ($this->services['psxdesign.accounts.data_provider'] ?? $this->load('getPsxdesign_Accounts_DataProviderService.php')));
