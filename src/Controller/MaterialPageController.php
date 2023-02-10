<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Material;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;
use App\Form\Type\All_MaterialFormType;
use App\Form\Type\DatePickerFormType;
use DateTime;

class MaterialPageController extends AbstractController
{

   private $materialRepository;

   #[Route('/all_materials', name: "all_materials", methods: ['GET', 'POST'])]
   public function homepage(ManagerRegistry $doctrine, Security $security, Request $request)
   {
      $subject = "reset";
      $form = $this->createForm(All_MaterialFormType::class);
      $form->handleRequest($request);

      $this->materialRepository = $doctrine->getRepository(Material::class);
      
      /**
       * Pokud hledáme pouze předmět
       */
      if ($form->isSubmitted() && $form->isValid()) {
         $data = $form->getData();
         $subject = $data["school_subject"];
         $date1 = $data["date1"];
         $date2 = $data["date2"];
         /**
          * Pokud jsou předměty všechny
          */
         if (strcmp($subject, "reset") === 0) {
            return $this->render('html/all_materials.html.twig', [
               'materials' => $this->materialRepository,
               'choice_form' => $form->createView(),
               'subject' => $subject,
               'date1' => $date1,
               'date2'=> $date2
            ]);
         }
         $view =  $form->createView();
         unset($form->getData()["school_subject"]);
         return $this->render('html/all_materials.html.twig', [
            'materials' => $this->materialRepository,
            'choice_form' => $view,
            'subject' => $subject,
            'date1' => $date1,
            'date2' => $date2
         ]);
      }

      return $this->render('html/all_materials.html.twig', [
         'materials' => $this->materialRepository,
         'choice_form' => $form->createView(),
      ]);
   }
}
