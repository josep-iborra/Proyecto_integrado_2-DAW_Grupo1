<?php

namespace App\Controller;

use App\Repository\CategoriasRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CategoriasController
 * @package App\Controller
 * 
 * @Route(path="/api/")
 */
class CategoriasController
{
    private $categoriasRepository;

    public function __construct(CategoriasRepository $categoriasRepository)
    {
        $this->categoriasRepository = $categoriasRepository;
    }

    /**
     * @Route("addCategoria", name="add_ecategoria", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $nombre = $data['nombre'];

        var_dump($data);
        if (empty($nombre)) {
            throw new NotFoundHttpException("No están todos los parametros.");
        }
        $this->categoriasRepository->saveEmpresa($nombre);

        return new JsonResponse(['status' => 'Categoria creada con exito'], Response::HTTP_CREATED);
    }

    /**
     * @Route("categoria/{id}", name="get_one_categoria", methods={"GET"})
     */
    public function get($id): JsonResponse
    {
        $categoria = $this->categoriasRepository->findOneBy(['id' => $id]);

        $data = [
            'id' => $categoria->getId(),
            'nombre' => $categoria->getNombre()
        ];
        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("categorias", name="get_all_categorias", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $categorias = $this->categoriasRepository->findAll();
        $data = [];

        foreach ($categorias as $categoria) {
            $data[] = [
                'id' => $categoria->getId(),
                'nombre' => $categoria->getNombre()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("categoria/{id}", name="update_categoria", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $categoria = $this->categoriasRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        empty($data['nombre']) ? true : $categoria->setNombre($data['nombre']);

        $updateCategoria = $this->categoriasRepository->updateCategoria($categoria);

        return new JsonResponse(['status' => 'Categoria modificada.'], Response::HTTP_OK);
    }

    /**
     * @Route("categoria/{id}", name="delete_categoria", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    {
        $empresa = $this->categoriasRepository->findOneBy(['id' => $id]);

        $this->categoriasRepository->removeCategorias($empresa);

        return new JsonResponse(['status' => 'Empresa eliminada'], Response::HTTP_OK);
    }
}
