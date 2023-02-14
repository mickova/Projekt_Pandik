<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Material;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;
use App\Form\Type\All_MaterialFormType;
use App\Form\Type\DatePickerFormType;
use App\Repository\MaterialRepository;
use DateTime;

class MaterialSingleSubjectController extends AbstractController
{

   #[Route('/all_materials/{subject}', name: "single_material_category", methods: ['GET', 'POST'])]
   public function homepage(String $subject, ManagerRegistry $doctrine, Security $security, Request $request)
   {
      $subj = array(
         "Programové vybavení" => "PV",
         "Matematika" => "M",
         "Počítačové sítě a systémy" => "PSS",
         "Webové aplikace" => "WA",
         "Český jazyk" => "CJ",
         "Databázové systémy" => "DS"    
      );
      $key = array_search($subject,$subj);
      $materials = new MaterialRepository($doctrine);
      $data = $materials->getSubject($key);
      $id = $security->getUser()->getId();
      return $this->render("html/single_material_category.html.twig", [
         'materials'=>$data,
         'id' => $id,
         'subject_name' => $key
      ]);
}
}