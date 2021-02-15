<?php

namespace App\Controller;

use App\Repository\UsuariosRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UserController
 * @package App\Controller
 * 
 * @Route(path="/api/")
 */
class UsuariosController
{
    private $userRepository;

    public function __construct(UsuariosRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @Route("addUser", name="add_user", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $email = $data['email'];
        $nombre = $data['nombre'];
        $apellidos = $data['apellidos'];
        $telefono = $data['telefono'];
        $password = $data['password'];

        if (empty($email) || empty($nombre) || empty($apellidos) || empty($telefono) || empty($password)) {
            throw new NotFoundHttpException("No están todos los parametros.");
        }
        $this->userRepository->saveUser($email, $nombre, $password, $apellidos, $telefono);

        return new JsonResponse(['status' => 'Usuario creado con exito'], Response::HTTP_CREATED);
    }

    /**
     * @Route("user/{id}", name="get_one_user", methods={"GET"})
     */
    public function get($id): JsonResponse
    {
        $user = $this->userRepository->findOneBy(['id' => $id]);

        $data = [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'nombre' => $user->getNombre(),
            'password' => $user->getPassword(),
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("user", name="get_all_users", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $users = $this->userRepository->findAll();
        $data = [];

        foreach ($users as $user) {
            $data[] = [
                'id' => $user->getId(),
                'email' => $user->getEmail(),
                'nombre' => $user->getNombre(),
                'password' => $user->getPassword()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("user/{id}", name="update_user", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $user = $this->userRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        empty($data['email']) ? true : $user->setEmail($data['email']);
        empty($data['nombre']) ? true : $user->setNombre($data['nombre']);
        empty($data['password']) ? true : $user->setPassword($data['password']);

        $updateUser = $this->userRepository->updateUser($user);

        return new JsonResponse(['status' => 'Usuario modificado.'], Response::HTTP_OK);
    }

    /**
     * @Route("user/{id}", name="delete_user", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    {
        $user = $this->userRepository->findOneBy(['id' => $id]);

        $this->userRepository->removeUser($user);

        return new JsonResponse(['status' => 'Usuario eliminado'], Response::HTTP_OK);
    }
}
