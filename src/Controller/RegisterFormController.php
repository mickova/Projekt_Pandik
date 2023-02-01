<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Type\RegisterFormType;

class RegisterFormController extends AbstractController
{
   #[Route('/register', name: "register", methods: ['GET', 'POST'])]
   public function test(UserPasswordHasherInterface $passwordHasher, ManagerRegistry $doctrine, Request $request)
   {
      $form = $this->createForm(RegisterFormType::class);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
         $entityManager = $doctrine->getManager();
         $data = array();
         $data = $form->getData();
         $user = new User();
         $user->setEmail($data["email"]);
         $plaintextPassword = $data["password"];
         $hashedPassword = $passwordHasher->hashPassword($user, $plaintextPassword);
         $user->setPassword($hashedPassword);
         $user->setUsername($data["username"]);
         $user->setDescription("Vítejte na mém profilu");
         $entityManager->persist($user);
         $entityManager->flush($user);
         return $this->redirect("/homepage");
      }
      return $this->render("html/register.html.twig", [
         'RegisterForm' => $form->createView(),
      ]);
   }
}
