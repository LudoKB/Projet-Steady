<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    #[Route('/shop', name: 'app_shop')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your Shop controller!',
            'path' => 'src/Controller/ShopController.php',
        ]);
    }
}
