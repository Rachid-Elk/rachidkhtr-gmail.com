<?php

namespace grh\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
      echo"ok";
        return $this->render('@grhBundle/Default/index.html.twig');
    }
}
