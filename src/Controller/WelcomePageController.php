<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\Type\LoginFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;

class LoginFormController extends AbstractController
{

   #[Route('/login', name: "login", methods: ['GET', 'POST'])]
   public function new(Request $request)
   {
     return new Response(
      "Ahoj"
     );
   }


   #[Route('/logout', name: "logout", methods: ['GET', 'POST'])]
   public function logout() {
      return $this->render('logout.html.twig', 
      );
   }
   #[Route('/for_all', name: "for_all", methods: ['GET', 'POST'])]
   public function for_all() {
      return new Response(
         'OK'
      );
   }
}
