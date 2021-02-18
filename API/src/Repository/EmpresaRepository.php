<?php

namespace App\Repository;

use App\Entity\Empresa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @method Empresa|null find($id, $lockMode = null, $lockVersion = null)
 * @method Empresa|null findOneBy(array $criteria, array $orderBy = null)
 * @method Empresa[]    findAll()
 * @method Empresa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmpresaRepository extends ServiceEntityRepository
{

    private $manager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Empresa::class);
        $this->manager = $manager;
    }

    public function saveEmpresa($nombre, $categoria, $localidad, $codigoPostal, $descripcion, $idUsuario)
    {
        $newEmpresa = new Empresa();

        $newEmpresa->setCategoria($categoria);
        $newEmpresa->setNombre($nombre);
        $newEmpresa->setLocalidad($localidad);
        $newEmpresa->setCodigoPostal($codigoPostal);
        $newEmpresa->setDescripcion($descripcion);
        $newEmpresa->setIdUsuario($idUsuario);

        $this->manager->persist($newEmpresa);
        $this->manager->flush();
    }

    public function updateEmpresa(Empresa $empresa): Empresa
    {
        $this->manager->persist($empresa);
        $this->manager->flush();

        return $empresa;
    }

    public function removeEmpresa(Empresa $empresa)
    {
        $this->manager->remove($empresa);
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
