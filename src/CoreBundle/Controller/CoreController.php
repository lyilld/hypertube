<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CoreController extends Controller
{
  public function VideoAction()
  {
    return $this->render('CoreBundle:HP:video.html.twig');
  }

  public function IndexAction()
  {
    return $this->render('CoreBundle:HP:index.html.twig');
  }
}
