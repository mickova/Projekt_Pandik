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
use App\Entity\User;

class SettingFormController extends AbstractController
{

   #[Route('/settings', name: "settings", methods: ['GET', 'POST'])]
   public function new(UserPasswordHasherInterface $passwordHasher, ManagerRegistry $doctrine, Request $request, Security $security)
   {
      $form = $this->createForm(SettingsUsernameType::class);
      $form->handleRequest($request);
      $form2 = $this->createForm(SettingsPasswordType::class);
      $form2->handleRequest($request);
      $user_repository = $doctrine->getRepository(User::class);
      // Formulář se změnou jména
      if ($form->isSubmitted() && $form->isValid()) {
         $entityManager = $doctrine->getManager();
         $data = $form->getData();
         $user = $security->getUser();
         if(strlen($data["username"]) == 0) {
            return $this->render('html/setting.html.twig', [
               'settings' => $form->createView(),
               'settings2' => $form2->createView(),
               'error' => "Zadejte, prosím, jméno."
            ]); 
         }
         if(strlen($data["username"]) <= 2) {
            return $this->render('html/setting.html.twig', [
               'settings' => $form->createView(),
               'settings2' => $form2->createView(),
               'error' => "Toto jméno je moc krátké."
            ]); 
         }
         if (!($data["username"] != null && $data["username"] != $user->getUsername())) {
            return $this->render('html/setting.html.twig', [
               'settings' => $form->createView(),
               'settings2' => $form2->createView(),
               'error' => "Zadáno jméno je stejné, jako máte."
            ]);
         }
         if($user_repository->findOneBy(["username" => $data["username"]])) {
            return $this->render('html/setting.html.twig', [
               'settings' => $form->createView(),
               'settings2' => $form2->createView(),
               'error' => "Toto jméno je již zabráno."
            ]); 
         }
         $user->setUsername($data["username"]);
         $name = $user->getUsername();
         $entityManager->flush();
         return $this->redirect("/profile/$name");
      }

      // Druhý formulář se změnou hesla
      if ($form2->isSubmitted() && $form2->isValid()) {
         $entityManager = $doctrine->getManager();
         $data = $form2->getData();
         $user = $security->getUser();

         $plaintextPassword = $data["password_current"];
         if(!$passwordHasher->isPasswordValid($user, $data["password_current"])) {
            return $this->render('html/setting.html.twig', [
               'settings' => $form->createView(),
               'settings2' => $form2->createView(),
               'error' => "Heslo nebylo zadáno správně"
            ]);
         }
         if(strlen($data["password_current"]) <=4 || strlen($data["password_new_confirm"]<=4 || strlen($data["password_new"]) <=4)) {
            return $this->render('html/setting.html.twig', [
               'settings' => $form->createView(),
               'settings2' => $form2->createView(),
               'error' => "Heslo musí obsahovat nejméně pět znaků"
            ]);
         }
         if($data["password_new"] == $data["password_new_confirm"]) {
            if($data["password_current"] != $data["password_new"]) {
               $plaintextPassword = $data["password_new"];
               $hashedPassword = $passwordHasher->hashPassword($user, $plaintextPassword);
               $user->setPassword($hashedPassword);
            }
         } else {
            return $this->render('html/setting.html.twig', [
               'settings' => $form->createView(),
               'settings2' => $form2->createView(),
               'error' => "Hesla se neshodují"
            ]);
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
