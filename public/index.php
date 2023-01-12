<?php

use App\Kernel;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;

// Si vous voulez utiliser la mise au point de Symfony, il vous suffit de décommenter la ligne ci-dessous
Debug::enable();

require __DIR__.'/../vendor/autoload.php';

// $kernel = new Kernel('prod', false);

// Si vous voulez utiliser la mise au point de Symfony, il vous suffit de décommenter la ligne ci-dessous
$kernel = new Kernel('dev', true);

// Si vous voulez utiliser l'environnement de test, il vous suffit de décommenter la ligne ci-dessous
// $kernel = new Kernel('test', true);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);