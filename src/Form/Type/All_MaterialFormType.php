<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
class All_MaterialFormType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
      $builder
         ->add('school_subject', ChoiceType::class, [
            'choices'  => [
               'Všechny příspěvky' => 'reset',
               'Český jazyk' => 'Český jazyk',
               'Programové vybavení' => 'Programové vybavení',
               'Počítačové sítě a systémy' => 'Počítačové sítě a systémy',
               'Matematika' => 'Matematika',
               'Databázové systémy' => 'Databázové systémy',
               'Webové aplikace' => 'Webové aplikace',
            ], "label" => "Školní předmět"
            ])->add('date1', DateType::class, array("label" => "Datum od",'placeholder' => '', "required" => false))
         ->add('date2', DateType::class, array("label" => "Datum do",'placeholder' => '', "required" => false));
   }
}
