<?php

namespace App\Repository;

use App\Entity\Productos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method Productos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Productos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Productos[]    findAll()
 * @method Productos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductosRepository extends ServiceEntityRepository
{
    private $manager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, User::class);
        $this->manager = $manager;
    }

    public function saveProduct($titulo, $precio, $multimedia, $descripcion, $categoria)
    {
        $newProducto = new Productos();

        $newProducto->setTitulo($titulo);
        $newProducto->setPrecio($precio);
        $newProducto->setMultimedia($multimedia);
        $newProducto->setDescripcion($descripcion);
        $newProducto->setCategoria($categoria);

        $this->manager->persist($newProducto);
        $this->manager->flush();
    }

    public function updateProduct(Productos $product): Productos
    {
        $this->manager->persist($product);
        $this->manager->flush();

        return $product;
    }

    public function removeProduct(Productos $product)
    {
        $this->manager->remove($product);
        $this->manager->flush();
    }

    public function getProductosByCategoria($categoria)
    {

        $query = $this->manager->createQuery('SELECT p FROM App\Entity\Products p JOIN App\Entity\Categorias c WHERE p.categoria = :categoria AND c.id = :categoria');
        $query->setParameter('categoria', $categoria);
        $albums = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        
        return $albums;
    }

    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
