<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.builder.form_builder_factory' shared service.

return $this->services['prestashop.core.form.builder.form_builder_factory'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderFactory(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')));
