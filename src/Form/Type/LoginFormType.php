<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
class LoginFormType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
      $builder
         ->add('email', EmailType::class)
         ->add('password', PasswordType::class);
   }
}
