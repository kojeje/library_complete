<?php

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;


class CountryRepository extends EntityRepository
{
    public function getAuteurbyCountry($country)
    {
//          QueryBuilder => Pour éxecuter des requêtes
//          Altenatives  : DQL ou NativeQueries (permet de rentrer du SQL pur)

        $queryBuilder =$this->createQueryBuilder('a');


        $query = $queryBuilder
//
            ->select('a')
            ->leftJoin('a.country', 'c')
//              eq WHERE (sql)
            ->where('a.country = :country')
//              Permet de définir un paramètre de requete de maniere sécurisée
            ->setParameter('country', $country)
//              recupérer la methode createQueryBuilder dans la variable $query et la passer dans $results
            ->getQuery();
//                               eq fetch
        $results = $query->getArrayResult();
        return $results;
    }



}