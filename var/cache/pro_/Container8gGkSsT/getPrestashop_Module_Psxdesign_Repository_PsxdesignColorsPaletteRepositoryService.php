<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.psxdesign.repository.psxdesign_colors_palette_repository' shared service.

return $this->services['prestashop.module.psxdesign.repository.psxdesign_colors_palette_repository'] = new \PrestaShop\Module\PsxDesign\Repository\PsxdesignColorsPaletteRepository(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['prestashop.core.addon.theme.theme_provider'] ?? $this->load('getPrestashop_Core_Addon_Theme_ThemeProviderService.php'))->getCurrentlyUsedTheme()->getName());
