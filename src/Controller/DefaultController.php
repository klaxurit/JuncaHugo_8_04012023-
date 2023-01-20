<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[AsController]
class DefaultController extends AbstractController
{
    #[Route(path: '/', name: 'homepage')]
    public function indexAction(): Response
    {
        return $this->render('default/index.html.twig');
    }
}
