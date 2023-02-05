<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\Type\LoginFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginFormController extends AbstractController
{

   #[Route('/login', name: "login", methods: ['GET', 'POST'])]
   public function new(Request $request)
   {
      $form = $this->createForm(LoginFormType::class);
      $form->handleRequest($request);

      return $this->render('html/login.html.twig', [
         'LoginForm' => $form->createView(),
      ]);
   }
}
