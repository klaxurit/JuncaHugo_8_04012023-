<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.form_entry_point.main' shared service.

return $this->privates['security.authentication.form_entry_point.main'] = new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), 'login', false);
