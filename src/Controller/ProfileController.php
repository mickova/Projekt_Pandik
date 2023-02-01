<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;
use Symfony\Bundle\SecurityBundle\Security;
class ProfileController extends AbstractController
{

   #[Route('/profile/{name}', name: "profile", methods: ['GET', 'POST'])]
   public function profile(String $name, ManagerRegistry $doctrine)
   {
      $profile_name = $name;
      $user = $doctrine->getRepository(User::class)->findBy(
         ['username' => $name],
      );
      if ($user != null) {
         return $this->render("html/profile.html.twig", [
            "profile_name" => $user[0]->getUsername(),
            "profile_email" => $user[0]->getEmail(),
            "profile_desc"=> $user[0]->getDescription()
         ]);
      } else {
         //Zde bude potom odkaz na chybovou hlášku UserNotFoundException
         return new Response("Tento profil neexistuje"); 
      }
   }

   #[Route('/profile', name: "my_profile", methods: ['GET', 'POST'])]
   public function my_profile(Security $security)
   {
      $user = new User();
      $user = $security->getUser();
         return $this->render("html/profile.html.twig", [
            "profile_name" => $user->getUsername(),
            "profile_email" => $user->getEmail(),
            "profile_desc" => $user->getDescription()
         ]);
      }
}
