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
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class MaterialEditController extends AbstractController
{

   #[Route('/edit_material/{id}', name: "edit_material", methods: ['GET', 'POST'])]
   public function new(int $id, ManagerRegistry $doctrine, Request $request, Security $security,  SluggerInterface $slugger)
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
            $file = $form->get('content')->getData();
            if ($file) {
               $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
               // this is needed to safely include the file name as part of the URL
               $safeFilename = $slugger->slug($originalFilename);
               $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
               try {
                   $file->move(
                       $this->getParameter('material_directory'),
                       $newFilename
                   );
               } catch (FileException $e) {
               
               }
               $material->setFilename($newFilename);
           }
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
