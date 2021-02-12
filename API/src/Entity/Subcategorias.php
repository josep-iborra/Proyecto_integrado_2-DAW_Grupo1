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
     * @var int
     *
     * @ORM\Column(name="Nombre", type="integer", nullable=false)
     */
    private $nombre;

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

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(int $nombre): self
    {
        $this->nombre = $nombre;

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
