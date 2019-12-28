<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UsuarioController
{
    /**
     * @Route("/lista", methods={"GET"}, name="lista")
     */
    public function lista(): JsonResponse
    {
        return new JsonResponse(["implementar lista na API", 404]);
    }

    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra")
     */
    public function  cadastra(): JsonResponse
    {
        return new JsonResponse(["implementar lista na API", 404]);
    }
}