<?php

namespace ContainerVaYoGqc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\RegisterFormType' shared autowired service.
     *
     * @return \App\Form\Type\RegisterFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'RegisterFormType.php';

        return $container->privates['App\\Form\\Type\\RegisterFormType'] = new \App\Form\Type\RegisterFormType();
    }
}