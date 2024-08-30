<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
// appel des réponses http en mode text
use Symfony\Component\HttpFoundation\Response;
# use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{

    // création de la méthode pour notre page d'accueil
    public function index(): Response
    {
        return new Response("<html><body><h1>Hello</h1></body></html>");
    }
    // attributs devenus inutiles #[Route('/json', name: 'my_json')]
    public function myJson(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FirstController.php',
        ]);
    }
}
