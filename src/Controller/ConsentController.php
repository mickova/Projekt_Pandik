<?php
// src/Controller/HelpPageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;

class ConsentController extends AbstractController
{

   #[Route('/consent', name: "consent", methods: ['GET'])]
   public function help()
   {
      return $this->render('html/consent.html.twig', [
      ]);
   }
}
