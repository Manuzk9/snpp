<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.translation_type' shared service.

return $this->services['prestashop.core.form.choice_provider.translation_type'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\TranslationTypeChoiceProvider(($this->services['translator'] ?? $this->getTranslatorService()));
