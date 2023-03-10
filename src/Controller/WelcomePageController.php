<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\Type\LoginFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;

class WelcomePageController extends AbstractController
{

   #[Route('/', name: "welcome_page", methods: ['GET', 'POST'])]
   public function homepage(AuthenticationUtils $auth, ManagerRegistry $doctrine, Security $security, Request $request)
   {
      $form = $this->createForm(LoginFormType::class);
      $form->handleRequest($request);

      return $this->render('html/welcome.html.twig', [
         'LoginForm' => $form->createView(),
      ]);
   }
}
