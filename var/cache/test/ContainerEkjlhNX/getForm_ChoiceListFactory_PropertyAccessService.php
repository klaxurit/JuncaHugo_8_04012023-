<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.choice_list_factory.property_access' shared service.

return $this->privates['form.choice_list_factory.property_access'] = new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(($this->privates['form.choice_list_factory.default'] ?? ($this->privates['form.choice_list_factory.default'] = new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory())), ($this->privates['property_accessor'] ?? $this->load('getPropertyAccessorService.php')));
