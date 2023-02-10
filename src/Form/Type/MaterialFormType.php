<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MaterialFormType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
      $builder
         ->add('content', TextareaType::class)->
         add('subject', ChoiceType::class, [
            'choices'  => [
               'Český jazyk' => 'Český jazyk',
               'Programové vybavení' => 'Programové vybavení',
               'Počítačové sítě a systémy' => 'Počítačové sítě a systémy',
               'Matematika' => 'Matematika',
               'Databázové systémy' => 'Databázové systémy',
               'Webové aplikace' => 'Webové aplikace',
            ]
            ]);
   }
}