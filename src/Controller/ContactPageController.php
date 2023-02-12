<?php
// src/Controller/ContactPageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class ContactPageController extends AbstractController
{
   #[Route('/contact', name: "contact", methods: ['GET'])]
   public function contact()
   {
      return $this->render('html/contact.html.twig', [
      ]);
   }
}
