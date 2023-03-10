<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SettingsUsernameType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
      $builder->add('username', TextType::class, array('required' => false, "label" => "Nové jméno"));
   }
}