<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.geolocation.options' shared service.

return $this->services['form.type.geolocation.options'] = new \PrestaShopBundle\Form\Admin\Improve\International\Geolocation\GeolocationOptionsType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.country_by_iso_code'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CountryByIsoCodeService.php'))->getChoices(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));
