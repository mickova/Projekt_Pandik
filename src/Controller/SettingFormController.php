<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Type\SettingsFormType;
use Symfony\Bundle\SecurityBundle\Security;

class SettingFormController extends AbstractController
{

   #[Route('/settings', name: "settings", methods: ['GET', 'POST'])]
   public function new(UserPasswordHasherInterface $passwordHasher, ManagerRegistry $doctrine, Request $request, Security $security)
   {
      $form = $this->createForm(SettingsFormType::class);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
         $entityManager = $doctrine->getManager();
         $data = $form->getData();
         $user = $security->getUser();
         if ($data["email"] != null) {
            $user->setEmail($data["email"]);
         }
         if ($data["password"] != null) {
            $plaintextPassword = $data["password"];
            $hashedPassword = $passwordHasher->hashPassword($user, $plaintextPassword);
            $user->setPassword($hashedPassword);
         }
         if ($data["username"] != null) {
            $user->setUsername($data["username"]);
         }
         $name = $user->getUsername();
         $entityManager->flush();
         return $this->redirect("/profile/$name");
      }
      return $this->render('html/setting.html.twig', [
         'settings' => $form->createView(),
      ]);
   }
}
