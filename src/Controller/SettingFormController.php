<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Type\SettingsUsernameType;
use App\Form\Type\SettingsPasswordType;
use Symfony\Bundle\SecurityBundle\Security;

class SettingFormController extends AbstractController
{

   #[Route('/settings', name: "settings", methods: ['GET', 'POST'])]
   public function new(UserPasswordHasherInterface $passwordHasher, ManagerRegistry $doctrine, Request $request, Security $security)
   {
      $form = $this->createForm(SettingsUsernameType::class);
      $form->handleRequest($request);
      $form2 = $this->createForm(SettingsPasswordType::class);
      $form2->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
         $entityManager = $doctrine->getManager();
         $data = $form->getData();
         $user = $security->getUser();

         if ($data["username"] != null && $data["username"] != $user->getUsername()) {
            $user->setUsername($data["username"]);
         }
         $name = $user->getUsername();
         $entityManager->flush();
         return $this->redirect("/profile/$name");
      }

      if ($form2->isSubmitted() && $form2->isValid()) {
         $entityManager = $doctrine->getManager();
         $data = $form2->getData();
         $user = $security->getUser();
         if($data["password_new"] == $data["password_new_confirm"]) {
            if($data["password_current"] != $data["password_new"]) {
               $plaintextPassword = $data["password_new"];
               $hashedPassword = $passwordHasher->hashPassword($user, $plaintextPassword);
               $user->setPassword($hashedPassword);
            }
         }
         $entityManager->flush();
         $name = $user->getUsername();
         return $this->redirect("/profile/$name");
      }
      return $this->render('html/setting.html.twig', [
         'settings' => $form->createView(),
         'settings2' => $form2->createView()
      ]);
   }
}
