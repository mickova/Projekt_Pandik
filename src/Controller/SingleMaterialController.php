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

class SingleMaterialController extends AbstractController
{

   #[Route('/single_material/{id}', name: "single_material", methods: ['GET', 'POST'])]
   public function new(int $id, ManagerRegistry $doctrine, Request $request, Security $security)
   {
      $material = $doctrine->getRepository(Material::class)->findBy(
         ['id' => $id],
      )[0];
      return $this->render('html/single_material.html.twig', [
         'material' => $material->getFilename()
      ]);
   }
}
