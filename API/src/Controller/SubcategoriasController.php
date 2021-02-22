<?php

namespace App\Controller;

use App\Repository\SubcategoriasRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class SubcategoriasController
 * @package App\Controller
 * 
 * @Route(path="/api/")
 */
class SubcategoriasController
{
    private $subcategoriasRepository;

    public function __construct(SubcategoriasRepository $subcategoriasRepository)
    {
        $this->subcategoriasRepository = $subcategoriasRepository;
    }


    /**
     * @Route("subcategoria/{id}", name="get_one_subcategoria", methods={"GET"})
     */
    public function get($id): JsonResponse
    {
        $subcategoria = $this->subcategoriasRepository->findOneBy(['id' => $id]);

        $data = [
            'id' => $subcategoria->getId(),
            'nombre' => $subcategoria->getNombre(),
            'idCategoria' => $subcategoria->getIdCategoria(),
            'nombreVisible'=> $subcategoria->getNombreVisible()
        ];
        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("subcategorias", name="get_all_subcategorias", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $subcategorias = $this->subcategoriasRepository->findAll();
        $data = [];

        foreach ($subcategorias as $subcategoria) {
            $data[] = [
                'id' => $subcategoria->getId(),
                'nombre' => $subcategoria->getNombre(),
                'idCategoria' => $subcategoria->getIdCategoria(),
                'nombreVisible' => $subcategoria->getNombreVisible()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("subcategorias/{id}", name="get_one_subcategoria_by_idCategoria", methods={"GET"})
     */
    public function getByCat($id): JsonResponse
    {
        $subcategorias = $this->subcategoriasRepository->findBy(['idCategoria' => $id]);

        foreach ($subcategorias as $subcategoria) {
            $data[] = [
                'id' => $subcategoria->getId(),
                'nombre' => $subcategoria->getNombre(),
                'idCategoria' => $subcategoria->getIdCategoria(),
                'nombreVisible' => $subcategoria->getNombreVisible()
            ];
        }
        return new JsonResponse($data, Response::HTTP_OK);
    }
}
