<?php

namespace App\Entity;

use App\Entity\Usuarios;
use App\Repository\MensajesRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * Mensajes
 *
 * @ORM\Table(name="mensajes", indexes={@ORM\Index(name="IDEmisor", columns={"IDEmisor"}), @ORM\Index(name="IDReceptor", columns={"IDReceptor"})})
 * @ORM\Entity(repositoryClass=MensajesRepository::class)
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
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDEmisor", referencedColumnName="ID")
     * })
     */
    private $idemisor;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDReceptor", referencedColumnName="ID")
     * })
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

    public function getIdemisor(): ?Usuarios
    {
        return $this->idemisor;
    }

    public function setIdemisor(?Usuarios $idemisor): self
    {
        $this->idemisor = $idemisor;

        return $this;
    }

    public function getIdreceptor(): ?Usuarios
    {
        return $this->idreceptor;
    }

    public function setIdreceptor(?Usuarios $idreceptor): self
    {
        $this->idreceptor = $idreceptor;

        return $this;
    }
}
