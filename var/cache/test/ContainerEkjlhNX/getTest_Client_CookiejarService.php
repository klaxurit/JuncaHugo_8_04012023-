<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

$this->factories['service_container']['test.client.cookiejar'] = function () {
    // Returns the private 'test.client.cookiejar' service.

    return new \Symfony\Component\BrowserKit\CookieJar();
};

return $this->factories['service_container']['test.client.cookiejar']();
