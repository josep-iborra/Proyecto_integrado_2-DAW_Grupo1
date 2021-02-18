<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rese�a
 *
 * @ORM\Table(name="reseña", indexes={@ORM\Index(name="id_vendedor", columns={"id_vendedor"}), @ORM\Index(name="id_usuario", columns={"id_usuario"})})
 * @ORM\Entity
 */
class Rese�a
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
     * @ORM\Column(name="mensaje", type="string", length=255, nullable=false)
     */
    private $mensaje;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vendedor", referencedColumnName="ID")
     * })
     */
    private $idVendedor;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdUsuario(): ?User
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(?User $idUsuario): self
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function getIdVendedor(): ?Empresa
    {
        return $this->idVendedor;
    }

    public function setIdVendedor(?Empresa $idVendedor): self
    {
        $this->idVendedor = $idVendedor;

        return $this;
    }


}
