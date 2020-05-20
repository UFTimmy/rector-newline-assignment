<?php

namespace App;

use Doctrine\ORM\EntityRepository;

class SomeEntityRepository extends EntityRepository
{
    public function findSomeObject() : object
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb
            ->andWhere($qb->expr()->eq('SomeEntity.someField', ':someParam'))
            ->andWhere($qb->expr()->eq('SomeEntity.someField', ':someParam'))
            ->andWhere($qb->expr()->eq('SomeEntity.someField', ':someParam'));

        return $qb->getQuery()->getOneOrNullResult();
    }
}
