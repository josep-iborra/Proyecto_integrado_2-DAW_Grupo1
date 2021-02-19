<?php

namespace App\Repository;

use App\Entity\Categorias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @method Categorias|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categorias|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categorias[]    findAll()
 * @method Categorias[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriasRepository extends ServiceEntityRepository
{

    private $manager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Categorias::class);
        $this->manager = $manager;
    }

    public function saveCategorias($nombre)
    {
        $newCategorias = new Categorias();

        $newCategorias->setNombre($nombre);

        $this->manager->persist($newCategorias);
        $this->manager->flush();
    }

    public function updateCategorias(Categorias $categorias): Categorias
    {
        $this->manager->persist($categorias);
        $this->manager->flush();

        return $categorias;
    }

    public function removeCategorias(Categorias $categorias)
    {
        $this->manager->remove($categorias);
        $this->manager->flush();
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
