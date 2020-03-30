<?php

namespace ensias\GRHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	return $this->render('@ensiasGRH/Default/index.html.twig');
    }
}
