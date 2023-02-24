<?php
// src/Controller/ContactPageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\Type\LoginFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;
use App\Form\Type\PasswordResetType;
use App\Entity\User;

class ForgotPasswordController extends AbstractController
{
   #[Route('/password-reset', name: "password", methods: ['GET', 'POST'])]
   public function contact(UserPasswordHasherInterface $passwordHasher, Security $security, Request $request, ManagerRegistry $doctrine)
   {
      $form = $this->createForm(PasswordResetType::class);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {

         $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
         $charactersLength = strlen($characters);
         $randomString = '';
         for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
         }

         $email = $form->getData()["email"];
         $str = "Heslo: " . $randomString;
         $str = wordwrap($str, 70);

         // send email
         mail($email, "Pandik@pandik.cz", $str, "Vaše nové heslo");
         try {
            $user = $doctrine->getRepository(User::class)->findBy(
               ['email' => $email],
            )[0];
         } catch (\Exception $e) {
            return $this->render('html/login.html.twig', [
               'LoginForm' => $form->createView(),
               'error' => "Člověk s tímto emailem neexistuje"
            ]);
         }
         $name = $user->getUsername();
         $hashedPassword = $passwordHasher->hashPassword($user, $randomString);
         $user->setPassword($hashedPassword);
         $entityManager = $doctrine->getManager();
         $entityManager->persist($user);
         $entityManager->flush($user);
         return $this->redirect("/login");
      }
      return $this->render('html/password_reset.html.twig', [
         "ResetForm" => $form->createView()
      ]);
   }
}
