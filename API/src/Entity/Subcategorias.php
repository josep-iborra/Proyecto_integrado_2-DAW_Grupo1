<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subcategorias
 *
 * @ORM\Table(name="subcategorias")
 * @ORM\Entity
 */
class Subcategorias
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
     * @ORM\Column(name="Nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_visible", type="string", length=255, nullable=false)
     */
    private $nombre_visible;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_categoria", type="integer", nullable=false)
     */
    private $idCategoria;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNombreVisible(): ?string
    {
        return $this->nombre_visible;
    }

    public function setNombreVisible(string $nombre_visible): self
    {
        $this->nombre_visible = $nombre_visible;

        return $this;
    }

    public function getIdCategoria(): ?int
    {
        return $this->idCategoria;
    }

    public function setIdCategoria(int $idCategoria): self
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }
}
