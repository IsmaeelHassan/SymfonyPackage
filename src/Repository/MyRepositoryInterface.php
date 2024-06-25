<?php

namespace Sulysoft\LoginPackage\Repository;

interface MyRepositoryInterface
{
    public function Test();
    public function find($id, $lockMode = null, $lockVersion = null);
    public function findAll();
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
    public function findOneBy(array $criteria, array $orderBy = null);
}