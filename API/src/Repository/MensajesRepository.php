<?php

namespace App\Repository;

use App\Entity\Mensajes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Mensajes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mensajes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mensajes[]    findAll()
 * @method Mensajes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MensajesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Mensajes::class);
        $this->manager = $manager;
    }

    public function saveMensaje($asunto, $mensaje, $fecha, $idEmisor, $idReceptor)
    {
        $newMsg = new Mensajes();

        $newMsg->setIdemisor($idEmisor);
        $newMsg->setIdreceptor($idReceptor);
        $newMsg->setFecha($fecha);
        $newMsg->setAsunto($asunto);
        $newMsg->setMensaje($mensaje);

        $this->manager->persist($newMsg);
        $this->manager->flush();
    }

    public function getMsgByUser($idemisor, $idreceptor)
    {
        $query = $this->createQueryBuilder('c')
            ->where('c.idemisor == :e AND c.idreceptor == :r')
            ->setParameter('e', $$idemisor)
            ->setParameter('r', $$idreceptor)
            ->getQuery();

        $contacto = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        return $contacto;
    }

    // /**
    //  * @return Mensajes[] Returns an array of Mensajes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mensajes
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
