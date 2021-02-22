<?php

namespace App\Repository;

use App\Entity\Resena;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Resena|null find($id, $lockMode = null, $lockVersion = null)
 * @method Resena|null findOneBy(array $criteria, array $orderBy = null)
 * @method Resena[]    findAll()
 * @method Resena[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResenaRepository extends ServiceEntityRepository
{

    private $manager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Resena::class);
        $this->manager = $manager;
    }

    public function saveUser($mensaje, $id_usuario, $id_vendedor)
    {
        $newResena = new Resena();

        $newResena->setMensaje($mensaje);
        $newResena->setIdUsuario($id_usuario);
        $newResena->setIdVendedor($id_vendedor);

        $this->manager->persist($newResena);
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
