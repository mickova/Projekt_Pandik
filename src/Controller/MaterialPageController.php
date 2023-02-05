<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\Type\LoginFormType;
use App\Repository\MaterialRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;

class MaterialPageController extends AbstractController
{

   #[Route('/all_materials', name: "materials", methods: ['GET', 'POST'])]
   public function homepage(ManagerRegistry $doctrine, Security $security, Request $request)
   {
      $form = $this->createForm(LoginFormType::class);
      $form->handleRequest($request);
      $m1 = new MaterialRepository($doctrine);

      $material_array = $m1->createQueryBuilder($doctrine)->getQuery("")->getResult();
      
      return $this->render('html/all_materials.html.twig', [
         'LoginForm' => $form->createView(),
         'materials' => $material_array
      ]);
   }
}
