<?php
  namespace App\Controller;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  
  
  

  class HomeController extends AbstractController {
      public function index(){
          return $this->render('pages/home.html.twig');
      }
  }