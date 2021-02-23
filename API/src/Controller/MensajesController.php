<?php

namespace App\Controller;

use App\Repository\MensajesRepository;
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
class MensajesController
{
    private $mensajeRepository;

    public function __construct(MensajesRepository $mensajeRepository)
    {
        $this->mensajeRepository = $mensajeRepository;
    }

    /**
     * @Route("addMensaje", name="add_mensaje", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $asunto = $data['asunto'];
        $mensaje = $data['mensaje'];
        $fecha = new \Datetime(date("Y/m/d"));
        $idEmisor = $data['idEmisor'];
        $idReceptor = $data['idReceptor'];

        if (empty($asunto) || empty($mensaje) || empty($fecha) || empty($idEmisor) || empty($idReceptor)) {
            throw new NotFoundHttpException("No están todos los parametros.");
        }
        $this->mensajeRepository->saveMensaje($asunto, $mensaje, $fecha, $idEmisor, $idReceptor);

        return new JsonResponse(['status' => 'Mensaje creado con exito'], Response::HTTP_CREATED);
    }

    /**
     * @Route("mensaje/{id}", name="get_one_mensaje", methods={"GET"})
     */
    public function get($id): JsonResponse
    {
        $mensaje = $this->mensajeRepository->findOneBy(['id' => $id]);

        $data = [
            'id' => $mensaje->getId(),
            'asunto' => $mensaje->getAsunto(),
            'mensaje' => $mensaje->getMensaje(),
            'fecha' => $mensaje->getFecha(),
            'idemisor' => $mensaje->getIdemisor(),
            'idreceptor' => $mensaje->getIdreceptor()
        ];

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("mensaje", name="get_all_mensajes", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $mensajes = $this->mensajeRepository->findAll();
        $data = [];

        foreach ($mensajes as $mensaje) {
            $data[] = [
                'id' => $mensaje->getId(),
                'asunto' => $mensaje->getAsunto(),
                'mensaje' => $mensaje->getMensaje(),
                'fecha' => $mensaje->getFecha(),
                'idemisor' => $mensaje->getIdemisor(),
                'idreceptor' => $mensaje->getIdreceptor()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("mensaje/{id}", name="update_mensaje", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $mensaje = $this->mensajeRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        empty($data['asunto']) ? true : $mensaje->setAsunto($data['asunto']);
        empty($data['mensaje']) ? true : $mensaje->setMensaje($data['mensaje']);
        empty($data['fecha']) ? true : $mensaje->setFecha($data['fecha']);
        empty($data['idemisor']) ? true : $mensaje->setIdemisor($data['idemisor']);
        empty($data['idreceptor']) ? true : $mensaje->setIdreceptor($data['idreceptor']);


        $updateMensaje = $this->mensajeRepository->updateMensaje($mensaje);

        return new JsonResponse(['status' => 'Mensaje modificado.'], Response::HTTP_OK);
    }

    /**
     * @Route("mensaje/{id}", name="delete_mensaje", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    {
        $mensaje = $this->mensajeRepository->findOneBy(['id' => $id]);

        $this->mensajeRepository->removeMensaje($mensaje);

        return new JsonResponse(['status' => 'Mensaje eliminado'], Response::HTTP_OK);
    }

    /**
     * @Route("mensaje/contactos/{idemisor}/{idreceptor}", name="get_msg_between_contacts", methods={"GET"})
     */
    public function getBySender($idemisor, $idreceptor): JsonResponse
    {
        $msgs = $this->mensajeRepository->getMsgByDate($idemisor, $idreceptor);

        echo json_encode(($msgs));

        return new JsonResponse(['status' => 'Contacto filtrado'], Response::HTTP_OK);
    }

    /**
     * @Route("mensajeByReceptor/{id}", name="get_mensajes", methods={"GET"})
     */
    public function getByIdReceptor($id): JsonResponse
    {
        $mensajes = $this->mensajeRepository->findBy(['idreceptor' => $id]);
        $data=[];
        foreach ($mensajes as $mensaje) {
            $data[] = [
                'id' => $mensaje->getId(),
                'asunto' => $mensaje->getAsunto(),
                'mensaje' => $mensaje->getMensaje(),
                'fecha' => $mensaje->getFecha(),
                'idemisor' => $mensaje->getIdemisor(),
                'idreceptor' => $mensaje->getIdreceptor()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
}
