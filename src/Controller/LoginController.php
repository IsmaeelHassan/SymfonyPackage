<?php

namespace Sulysoft\LoginPackage\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sulysoft\LoginPackage\Repository\MyRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends AbstractController {
    protected $loginRepository;

    // public function __construct(MyRepositoryInterface $loginRepository)
    // {
    //     $this->loginRepository = $loginRepository;
    // }

    public function package()
    {
        return new Response("Hi Package");
    }
}