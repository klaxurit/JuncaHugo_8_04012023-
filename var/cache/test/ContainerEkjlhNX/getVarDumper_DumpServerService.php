<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'var_dumper.dump_server' shared service.

return $this->privates['var_dumper.dump_server'] = new \Symfony\Component\VarDumper\Server\DumpServer('', ($this->privates['monolog.logger.debug'] ?? $this->load('getMonolog_Logger_DebugService.php')));
