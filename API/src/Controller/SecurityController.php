<?php

// src/Controller/SecurityController.php
namespace App\Controller;

// ...
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login", methods={"POST"})
     */
    public function login(Request $request)
    {
        $user = $this->getUser();

        return $this->json([
            'username' => $user->getUsername(),
            'roles' => $user->getRoles(),
            'nombre' => $user->getNombre(),
            'apellidos' => $user->getApellidos(),
            'telefono' => $user->getTelefono(),
            'idEmpresa' => $user->getIdEmpresa(),
            'id'=>$user->getId(),
        ]);
    }
}
