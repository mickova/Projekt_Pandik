<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\Type\LoginFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;
use App\Entity\User;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
class LoginFormController extends AbstractController
{

   #[Route('/login', name: "login", methods: ['GET', 'POST'])]
   public function new(Request $request,ManagerRegistry $doctrine, Security $security, AuthenticationUtils $authenticationUtils)
   {
      $error = $authenticationUtils->getLastAuthenticationError(true);
      $form = $this->createForm(LoginFormType::class);
      $form->handleRequest($request);
      if($error != null || $error!= "") {
         $error = "<p> Nesprávné údaje </p>";
      }

      if ($form->isSubmitted() && $form->isValid()) {
         $entityManager = $doctrine->getManager();
         $data = $form->getData();
      }
      
      return $this->render('html/login.html.twig', [
         'LoginForm' => $form->createView(),
         'error' => $error
      ]);
   }
}
