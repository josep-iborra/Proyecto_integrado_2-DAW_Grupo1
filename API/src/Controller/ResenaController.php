<?php

namespace App\Controller;

use App\Repository\ResenaRepository;
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
class ResenaController
{
    private $resenaRepository;

    public function __construct(ResenaRepository $resenaRepository)
    {
        $this->resenaRepository = $resenaRepository;
    }

    /**
     * @Route("addResena", name="add_resena", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $mensaje = $data['mensaje'];
        $id_usuario = $data['id_usuario'];
        $id_vendedor = $data['id_vendedor'];

        if (empty($mensaje) || empty($id_usuario) || empty($id_vendedor)) {
            throw new NotFoundHttpException("No están todos los parametros.");
        }
        $this->resenaRepository->saveResena($mensaje, $id_usuario, $id_vendedor);

        return new JsonResponse(['status' => 'Usuario creado con exito'], Response::HTTP_CREATED);
    }

    /**
     * @Route("resena/{id}", name="get_one_resena", methods={"GET"})
     */
    public function get($id): JsonResponse
    {
        $resena = $this->resenaRepository->findOneBy(['id' => $id]);

        $data = [
            'id' => $resena->getId(),
            'mensaje' => $resena->getMensaje(),
            'id_usuario' => $resena->getIdUsuario(),
            'id_vendedor' => $resena->getIdVendedor()
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("resena", name="get_all_resenas", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $resenas = $this->resenaRepository->findAll();
        $data = [];

        foreach ($resenas as $resena) {
            $data[] = [
                'id' => $resena->getId(),
                'mensaje' => $resena->getMensaje(),
                'id_usuario' => $resena->getIdUsuario(),
                'id_vendedor' => $resena->getIdVendedor()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("resenaVendedor/{id}", name="get_all_resenas", methods={"GET"})
     */
    public function getByVendedor($id): JsonResponse
    {
        $vacio = $this->resenaRepository->findBy(['subcategoria' => 9999]);
        $resenas = $this->resenaRepository->findBy(['idVendedor' => $id]);

        if ($resenas != $vacio) {
            foreach ($resenas as $resena) {
                $data[] = [
                    'id' => $resena->getId(),
                    'mensaje' => $resena->getMensaje(),
                    'id_usuario' => $resena->getIdUsuario(),
                    'id_vendedor' => $resena->getIdVendedor()
                ];
            }
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
}
