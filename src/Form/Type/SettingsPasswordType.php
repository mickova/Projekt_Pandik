<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SettingsPasswordType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
      $builder
         ->add('password_current', PasswordType::class, array('required' => false, "label" => "Současné heslo"))
         ->add('password_new', PasswordType::class, array('required' => false, "label" => "Nové heslo"))
         ->add('password_new_confirm', PasswordType::class, array('required' => false, "label" => "Potrvzení nového hesla"));
   }
}