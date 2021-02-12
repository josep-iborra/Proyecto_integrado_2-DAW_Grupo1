<?php

namespace App\Controller;

use App\Repository\ProductosRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProductController
 * @package App\Controller
 * 
 * @Route(path="/api/")
 */
class ProductosController
{
    private $ProductRepository;

    public function __construct(ProductosRepository $ProductRepository)
    {
        $this->ProductRepository = $ProductRepository;
    }

    /**
     * @Route("addProduct", name="add_Product", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $titulo = $data['titulo'];
        $precio = $data['precio'];
        $multimedia = $data['multimedia'];
        $descripcion = $data['descripcion'];
        $categoria = $data['categoria'];

        if (empty($titulo) || empty($precio) || empty($multimedia) || empty($descripcion) || empty($categoria)) {
            throw new NotFoundHttpException("No están todos los parametros.");
        }
        $this->productRepository->saveProduct($titulo, $precio, $multimedia, $descripcion, $categoria);

        return new JsonResponse(['status' => 'Producto creado con exito'], Response::HTTP_CREATED);
    }

    /**
     * @Route("product/{id}", name="get_one_product", methods={"GET"})
     */
    public function get($id): JsonResponse
    {
        $product = $this->productRepository->findOneBy(['id' => $id]);

        $data = [
            'id' => $product->getId(),
            'titulo' => $product->getTitulo(),
            'precio' => $product->getPrecio(),
            'multimedia' => $product->getMultimedia(),
            'descripcion' => $product->getDescripcion(),
            'categoria' => $product->getCategoria()
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("product", name="get_all_products", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $products = $this->productRepository->findAll();
        $data = [];

        foreach ($products as $product) {
            $data[] = [
                'id' => $product->getId(),
            'titulo' => $product->getTitulo(),
            'precio' => $product->getPrecio(),
            'multimedia' => $product->getMultimedia(),
            'descripcion' => $product->getDescripcion(),
            'categoria' => $product->getCategoria()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("product/{id}", name="update_product", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $product = $this->productRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        empty($data['titulo']) ? true : $product->setTitulo($data['titulo']);
        empty($data['precio']) ? true : $product->setPrecio($data['precio']);
        empty($data['multimedia']) ? true : $product->setMultimedia($data['multimedia']);
        empty($data['descripcion']) ? true : $product->setDescripcion($data['descripcion']);
        empty($data['categoria']) ? true : $product->setCategoria($data['categoria']);


        $updateProduct = $this->productRepository->updateProduct($product);

        return new JsonResponse(['status' => 'Producto modificado.'], Response::HTTP_OK);
    }

    /**
     * @Route("product/{id}", name="delete_product", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    {
        $product = $this->productRepository->findOneBy(['id' => $id]);

        $this->productRepository->removeUser($product);

        return new JsonResponse(['status' => 'Producto eliminado'], Response::HTTP_OK);
    }
}
