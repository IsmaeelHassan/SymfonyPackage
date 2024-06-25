<?php

namespace Sulysoft\LoginPackage\Repository;

use Doctrine\ORM\EntityRepository;

class MyRepository extends EntityRepository implements MyRepositoryInterface
{
    public function Test()
    {
        return "Hi Package";
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        // Your custom logic here
    }

    public function findAll()
    {
        // Your custom logic here
    }

    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        // Your custom logic here
    }

    public function findOneBy(array $criteria, array $orderBy = null)
    {
        // Your custom logic here
    }
}
