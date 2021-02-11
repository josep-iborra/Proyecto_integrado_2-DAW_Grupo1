<?php

namespace App\Entity;

use App\Repository\ProductosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table(name="productos", indexes={@ORM\Index(name="Autor_id", columns={"Autor_id"})})
 * @ORM\Entity(repositoryClass=UsuariosRepository::class)
 */
class Productos
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
     * @ORM\Column(name="Titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio", type="string", length=255, nullable=false)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="Multimedia", type="text", length=0, nullable=false)
     */
    private $multimedia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categoria", type="text", length=0, nullable=true)
     */
    private $categoria;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Autor_id", referencedColumnName="ID")
     * })
     */
    private $autor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getPrecio(): ?string
    {
        return $this->precio;
    }

    public function setPrecio(string $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getMultimedia(): ?string
    {
        return $this->multimedia;
    }

    public function setMultimedia(string $multimedia): self
    {
        $this->multimedia = $multimedia;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(?string $categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getAutor(): ?Usuarios
    {
        return $this->autor;
    }

    public function setAutor(?Usuarios $autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}
