<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Material;
use App\Form\Type\MaterialFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\File;

class MaterialFormController extends AbstractController
{
   #[Route('/material', name: "material2", methods: ['GET', 'POST'])]
   public function material(Request $request, ManagerRegistry $doctrine, Security $security, SluggerInterface $slugger)
   {
      $filesystem = new Filesystem();
      $form = $this->createForm(MaterialFormType::class);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
         $entityManager = $doctrine->getManager();
         $data = $form->getData();
         $user = $security->getUser();
         $material = new Material();
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

         $material->setUser($user);
         $material->getId();
         $material->setSchoolSubject($data["subject"]);
         $material->setDate();
         $material->setPath("");
         $entityManager->persist($material);
         $entityManager->flush($material);
         $material->setPath("materials/" . $material->getId());
         $entityManager->persist($material);
         $entityManager->flush($material);
         $filesystem->dumpFile("materials/" . $material->getId(), $data["content"]);
         return $this->redirect("/homepage");
      }
      return $this->render('html/material.html.twig', [
         'materialForm' => $form->createView()
      ]);
      
   }
}
