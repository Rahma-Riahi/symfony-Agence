<?php
namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {
  
    /**
     * @* @param  PropertyRepository $repository
      
     *  */ 
    public function index (PropertyRepository $repository) : Response {

        $property = $repository -> findLatest();
         return $this ->render('pages/home.html.twig', [
             'properties' => $property
         ]);
    }
  
}