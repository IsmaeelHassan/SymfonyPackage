<?php

namespace Sulysoft\LoginPackage;

use Sulysoft\LoginPackage\DependencyInjection\LoginExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SulysoftLoginPackage extends AbstractBundle {
    
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
       return new LoginExtension(); 
    }
}