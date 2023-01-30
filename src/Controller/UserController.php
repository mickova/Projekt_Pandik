<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
   #[Route('/register', name: "register", methods: ['GET', 'POST'])]
   public function test(UserPasswordHasherInterface $passwordHasher, ManagerRegistry $doctrine)
   {
      $entityManager = $doctrine->getManager();

      $user = new User();
      $user->setEmail("test@spsejecna.cz");

      $plaintextPassword = "student";
      $hashedPassword = $passwordHasher->hashPassword($user, $plaintextPassword);
      $user->setPassword($hashedPassword);

      $entityManager->persist($user);
      $entityManager->flush();

      return new Response('OK');
   }
}
