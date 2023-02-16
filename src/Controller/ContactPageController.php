<?php
// src/Controller/ContactPageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\Type\LoginFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;
use App\Form\Type\ContactFormType;
use App\Entity\User;

class ContactPageController extends AbstractController
{
   #[Route('/contact', name: "contact", methods: ['GET'])]
   public function contact(Security $security, Request $request, ManagerRegistry $doctrine)
   {
      $form = $this->createForm(ContactFormType::class);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
         $msg = $form->getData()["message"];

         // use wordwrap() if lines are longer than 70 characters
         $msg = wordwrap($msg, 70);

         // send email
         mail("matyaslorenz@seznam.cz", $form->getData()["email"], $msg);
      }
      if ($security->getUser() != null) {
         return $this->render('html/contact.html.twig', [
            "logged" => true,
            "ContactForm" => $form->createView()
         ]);
      } else {
         return $this->render('html/contact.html.twig', [
            "logged" => false,
            "ContactForm" => $form->createView()
         ]);
      }
   }
}
