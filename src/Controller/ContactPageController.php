<?php
// src/Controller/ContactPageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;

class ContactPageController extends AbstractController
{
   #[Route('/contact', name: "contact", methods: ['GET'])]
   public function contact(Security $security)
   {
      $user = $security->getUser();
      if($user->getId() != null) {
      return $this->render('html/contact.html.twig', [
         "logged"=> true
      ]);
   } else {
      return $this->render('html/contact.html.twig', [
         "logged"=> false
      ]);
   }
   }
}
