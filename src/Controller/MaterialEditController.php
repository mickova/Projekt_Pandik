<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\materialPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Type\MaterialFormType;
use Symfony\Bundle\SecurityBundle\Security;
use App\Entity\Material;

class MaterialEditController extends AbstractController
{

   #[Route('/edit_material/{id}', name: "edit_material", methods: ['GET', 'POST'])]
   public function new(int $id, ManagerRegistry $doctrine, Request $request, Security $security)
   {
      $form = $this->createForm(MaterialFormType::class);
      $form->handleRequest($request);
      $material = $doctrine->getRepository(Material::class)->findBy(
         ['id' => $id],
      )[0];
      # Render chyby no permissions
      if($material->getUser()->getId() != $security->getUser()->getId()) {
          return $this->render('bundles/TwigBundle/Exception/error.html.twig',[
            "status_code" => 401,
            "status_text" => "Na toto nemáte pravomoce"
          ]);
      }
      if ($form->isSubmitted() && $form->isValid()) {
         $entityManager = $doctrine->getManager();
         $data = $form->getData();
         if ($data["content"] != null) {
            $material->setContent($data["content"]);
         }
         if ($data["subject"] != null) {
            $material->setSchoolSubject($data["subject"]);
         }
         $id = $material->getId();
         $entityManager->flush();
         return $this->redirect("/all_materials");
      }
      return $this->render('html/edit_material.html.twig', [
         'materialForm' => $form->createView()
      ]);
   }
}
