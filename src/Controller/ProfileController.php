<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;
use App\Entity\Material;
use Symfony\Bundle\SecurityBundle\Security;
class ProfileController extends AbstractController
{
private $materialRepository;
   #[Route('/profile/{name}', name: "profile", methods: ['GET', 'POST'])]
   public function profile(String $name, ManagerRegistry $doctrine, Security $security)
   {
      $this->materialRepository = $doctrine->getRepository(Material::class);
      $profile_name = $name;
      $user = $doctrine->getRepository(User::class)->findBy(
         ['username' => $name],
      );
      $logged_user = $security->getUser();
      $id = $logged_user->getId();
      if($user[0] == null) {
         #Tady return 404 not found
         return $this->render("bundles/TwigBundles/Exception/error404.html.twig");
      } else {
         $user = $user[0];
      }
      if ($user != null) {
         return $this->render("html/profile.html.twig", [
            "profile_name" => $user->getUsername(),
            "profile_email" => $user->getEmail(),
            "profile_desc" => $user->getDescription(),
            'materials' => $this->materialRepository->getByAuthor($user),
            'id' => $id
         ]);
      } else {
         //Zde bude potom odkaz na chybovou hlášku UserNotFoundException
         return new Response("Tento profil neexistuje"); 
      }
   }

   #[Route('/profile', name: "my_profile", methods: ['GET', 'POST'])]
   public function my_profile( ManagerRegistry $doctrine, Security $security)
   {
      $this->materialRepository = $doctrine->getRepository(Material::class);
      $logged_user = $security->getUser();
      $id = $logged_user->getId();
      $user = new User();
      $user = $security->getUser();
         return $this->render("html/profile.html.twig", [
            "profile_name" => $user->getUsername(),
            "profile_email" => $user->getEmail(),
            "profile_desc" => $user->getDescription(),
            'materials' => $this->materialRepository->getByAuthor($user),
            'id' => $id
         ]);
      }
}
