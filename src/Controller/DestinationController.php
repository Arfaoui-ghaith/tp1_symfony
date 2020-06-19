<?php
  namespace App\Controller;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  
  
  

  class DestinationController extends AbstractController {
      public function destination(){
          return $this->render('pages/destination.html.twig');
      }
  }