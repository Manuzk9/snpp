<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.builder.product_shops_form_builder' shared service.

return $this->services['prestashop.core.form.identifiable_object.builder.product_shops_form_builder'] = ($this->services['prestashop.core.form.builder.form_builder_factory'] ?? $this->load('getPrestashop_Core_Form_Builder_FormBuilderFactoryService.php'))->create('PrestaShopBundle\\Form\\Admin\\Sell\\Product\\ProductShopsType', new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\ProductShopsFormDataProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepository4Service.php')), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))->getContextShopID()));
