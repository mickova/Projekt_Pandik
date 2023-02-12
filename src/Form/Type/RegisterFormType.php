<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegisterFormType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
      $builder
         ->add('email', EmailType::class, array("label" => "Emailová adresa"))
         ->add('password', PasswordType::class, array("label" => "Heslo"))
         ->add('username', TextType::class, array("label" => "Uživatelské jméno"));
   }
}
