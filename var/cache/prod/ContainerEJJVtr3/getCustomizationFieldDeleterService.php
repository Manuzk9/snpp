<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\Customization\Update\CustomizationFieldDeleter' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Customization\\Update\\CustomizationFieldDeleter'] = new \PrestaShop\PrestaShop\Adapter\Product\Customization\Update\CustomizationFieldDeleter(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Customization\\Repository\\CustomizationFieldRepository'] ?? $this->load('getCustomizationFieldRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepository4Service.php')));
