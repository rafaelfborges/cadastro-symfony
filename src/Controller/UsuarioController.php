<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsuarioController
{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */
    public function index(): Response{
        return new Response("Implementar formulario de cadastro");
    }

    /**
     * @Route("/salvar", methods={"POST"}, name="salvar")
     */
    public function salvar(): Response{
        return new Response("Implementar gravação no BD");
    }
}