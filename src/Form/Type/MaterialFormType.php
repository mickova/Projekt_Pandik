<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class MaterialFormType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
      $builder
         ->add('content', FileType::class,['constraints' => [
            new File([
               'maxSize' => '1024k',
               'mimeTypes' => [
                   'application/pdf',
                   'application/x-pdf',
               ],
               'mimeTypesMessage' => 'Vložte prosím validní PDF soubor',
           ])
        ],])->
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