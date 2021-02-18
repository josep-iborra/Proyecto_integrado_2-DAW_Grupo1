<?php

namespace App\Controller;

use App\Repository\EmpresaRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class EmpresaController
 * @package App\Controller
 * 
 * @Route(path="/api/")
 */
class EmpresaController
{
    private $empresaRepository;

    public function __construct(EmpresaRepository $empresaRepository)
    {
        $this->empresaRepository = $empresaRepository;
    }

    /**
     * @Route("addEmpresa", name="add_empresa", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $categoria = $data['categoria'];
        $nombre = $data['nombre'];
        $localidad = $data['localidad'];
        $codigoPostal = $data['codigoPostal'];
        $descripcion = $data['descripcion'];
        $idUsuario = $data['idUsuario'];

        if (empty($categoria) || empty($nombre) || empty($localidad) || empty($codigoPostal) || empty($descripcion) || empty($idUsuario)) {
            throw new NotFoundHttpException("No están todos los parametros.");
        }
        $this->empresaRepository->saveEmpresa($nombre, $categoria, $localidad, $codigoPostal, $descripcion, $idUsuario);

        return new JsonResponse(['status' => 'Empresa creada con éxito'], Response::HTTP_CREATED);
    }

    /**
     * @Route("empresa/{id}", name="get_one_empresa", methods={"GET"})
     */
    public function get($id): JsonResponse
    {
        $empresa = $this->empresaRepository->findOneBy(['id' => $id]);

        $data = [
            'id' => $empresa->getId(),
            'categoria' => $empresa->getCategoria(),
            'nombre' => $empresa->getNombre(),
            'localidad' => $empresa->getLocalidad(),
            'codigoPostal' => $empresa->getCodigoPostal(),
            'descripcion' => $empresa->getDescripcion(),
            'idUsuario' => $empresa->getIdUsuario()
        ];
        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("empresas", name="get_all_empresas", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $empresas = $this->empresaRepository->findAll();
        $data = [];

        foreach ($empresas as $empresa) {
            $data[] = [
                'id' => $empresa->getId(),
                'categoria' => $empresa->getCategoria(),
                'nombre' => $empresa->getNombre(),
                'localidad' => $empresa->getLocalidad(),
                'codigoPostal' => $empresa->getCodigoPostal(),
                'descripcion' => $empresa->getDescripcion(),
                'idUsuario' => $empresa->getIdUsuario()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("empresa/{id}", name="update_empresa", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $empresa = $this->empresaRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        empty($data['categoria']) ? true : $empresa->setCategoria($data['categoria']);
        empty($data['nombre']) ? true : $empresa->setNombre($data['nombre']);
        empty($data['localidad']) ? true : $empresa->setLocalidad($data['localdad']);
        empty($data['codigoPostal']) ? true : $empresa->setCodigoPostal($data['codigoPostal']);
        empty($data['descripcion']) ? true : $empresa->setDescripcion($data['descripcion']);
        empty($data['idUsuario']) ? true : $empresa->setIdUsuario($data['idUsuario']);

        $updateEmpresa = $this->empresaRepository->updateEmpresa($empresa);

        return new JsonResponse(['status' => 'Empresa modificada.'], Response::HTTP_OK);
    }

    /**
     * @Route("empresa/{id}", name="delete_empresa", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    {
        $empresa = $this->empresaRepository->findOneBy(['id' => $id]);

        $this->empresaRepository->removeUser($empresa);

        return new JsonResponse(['status' => 'Empresa eliminada'], Response::HTTP_OK);
    }
}
