<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.template_iterator' shared service.

return $this->privates['twig.template_iterator'] = new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/app'), [(\dirname(__DIR__, 4).'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates'));
