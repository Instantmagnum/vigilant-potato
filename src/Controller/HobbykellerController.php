<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HobbykellerController extends AbstractController
{
    #[Route('/hobbykeller', name: 'app_hobbykeller')]
    public function index(): Response
    {
        return $this->render('hobbykeller/index.html.twig', [
            'controller_name' => 'HobbykellerController',
        ]);
    }
}
