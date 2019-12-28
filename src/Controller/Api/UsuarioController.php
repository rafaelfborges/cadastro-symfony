<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UsuarioController
 * @package App\Controller\Api
 * @Route("/api/v1", name="api_v1_usuario_")
 */
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