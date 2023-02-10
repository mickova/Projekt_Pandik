<?php

namespace App\Repository;

use App\Entity\Material;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;
/**
 * @extends ServiceEntityRepository<Material>
 *
 * @method Material|null find($id, $lockMode = null, $lockVersion = null)
 * @method Material|null findOneBy(array $criteria, array $orderBy = null)
 * @method Material[]    findAll()
 * @method Material[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaterialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Material::class);
    }

    public function save(Material $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Material $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Material[] Returns an array of Material objects
     */
    public function getAll()
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT m
            FROM App\Entity\Material m'
        );
        // returns an array of Product objects
        return $query->getSQL();
    }

    /**
     * @return Material[] Returns an array of Material objects
     */
    public function getThreeNewest()
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT m
            FROM App\Entity\Material m'
        )->setMaxResults(3);
        // returns an array of Product objects
        return $query->getResult();
    }

    public function getSubject($school_subject) {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT m
            FROM App\Entity\Material m 
            where m.school_subject = ?1'
        )->setParameter("1", $school_subject)->
        setMaxResults(3);
        // returns an array of Product objects
        return $query->getResult();
    }

    public function getSubjectBetweenDates($subject, $date1, $date2) {
        $realdate1 = date("Y-m-d h:m:s",$date1);
        $realdate2 = date("Y-m-d h:m:s",$date2);
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            "SELECT m
            FROM App\Entity\Material m 
            where (m.school_subject = ?1) and (m.date_of_upload BETWEEN '" . $realdate1 . "'  AND '" . $realdate2 ."')")->
        setParameter("1", $subject);
        return $query->getResult();
    }

    public function getEverythingBetweenDates($date1, $date2) {
        $realdate1 = date("Y-m-d h:m:s",$date1);
        $realdate2 = date("Y-m-d h:m:s",$date2);
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            "SELECT m
            FROM App\Entity\Material m 
            WHERE m.date_of_upload BETWEEN '" . $realdate1 . "'  AND '" . $realdate2 ."'");
        return  $query->getResult();
    }
}