<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 03/12/2018
     * Time: 11:38
     */


namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;


class LivreRepository extends EntityRepository
{
    public function getLivrebyGenre($genre)

    {


        $queryBuilder =$this->createQueryBuilder('l');

        $query = $queryBuilder
            ->select('l')
            ->where('l.genre = :genre')
            ->setParameter('genre', $genre)
            ->getQuery();
//                    eq fetch

        $results = $query->getResult();

        return $results;
    }

    public function getLivrebyWord($word)
    {

        $queryBuilder = $this
            ->createQueryBuilder('l');
        $query=$queryBuilder
//          eq SELECT sql
            ->leftJoin('l.auteur', 'a')
            ->select('l')
            ->addSelect('a')
//          eq WHERE  sql        eq Like        eq OR sql
            ->where(
                '
                          l.titre LIKE :word 
                          OR l.resume LIKE :word 
                          OR l.genre LIKE :word
                          OR a.bio LIKE :word 
                          OR a.name LIKE :word 
                          OR a.country LIKE :word'
            )
            ->setParameter('word','%'.$word.'%')
            ->getQuery();

        $results = $query->getArrayResult();

        return $results;

    }





}