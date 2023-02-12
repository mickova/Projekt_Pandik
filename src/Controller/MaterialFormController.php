<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Material;
use App\Form\Type\MaterialFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;

class MaterialFormController extends AbstractController
{

   #[Route('/material', name: "material2", methods: ['GET', 'POST'])]
   public function material(Request $request, ManagerRegistry $doctrine, Security $security)
   {
      $form = $this->createForm(MaterialFormType::class);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
         $entityManager = $doctrine->getManager();
         $data = $form->getData();
         $user = $security->getUser();
         $material = new Material();
         $material->setUser($user);
         $material->setContent($data["content"]);
         $material->setSchoolSubject($data["subject"]);
         $material->setDate();
         $entityManager->persist($material);
         $entityManager->flush($user);
         return $this->redirect("/homepage");
      }
      return $this->render('html/material.html.twig', [
         'materialForm' => $form->createView()
      ]);
      
   }
}
