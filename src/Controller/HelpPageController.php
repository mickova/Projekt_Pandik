<?php
// src/Controller/HelpPageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;

class HelpPageController extends AbstractController
{

   #[Route('/help', name: "help", methods: ['GET'])]
   public function help()
   {
      return $this->render('html/help.html.twig', [
      ]);
   }
}
