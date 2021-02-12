<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensajes
 *
 * @ORM\Table(name="mensajes")
 * @ORM\Entity
 */
class Mensajes
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=255, nullable=false)
     */
    private $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="string", length=255, nullable=false)
     */
    private $mensaje;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="IDEmisor", type="integer", nullable=false)
     */
    private $idemisor;

    /**
     * @var int
     *
     * @ORM\Column(name="IDReceptor", type="integer", nullable=false)
     */
    private $idreceptor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAsunto(): ?string
    {
        return $this->asunto;
    }

    public function setAsunto(string $asunto): self
    {
        $this->asunto = $asunto;

        return $this;
    }

    public function getMensaje(): ?string
    {
        return $this->mensaje;
    }

    public function setMensaje(string $mensaje): self
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getIdemisor(): ?int
    {
        return $this->idemisor;
    }

    public function setIdemisor(int $idemisor): self
    {
        $this->idemisor = $idemisor;

        return $this;
    }

    public function getIdreceptor(): ?int
    {
        return $this->idreceptor;
    }

    public function setIdreceptor(int $idreceptor): self
    {
        $this->idreceptor = $idreceptor;

        return $this;
    }


}
