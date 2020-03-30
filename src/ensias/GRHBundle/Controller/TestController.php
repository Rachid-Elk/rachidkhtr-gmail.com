<?php

namespace ensias\GRHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    
        public function testAction(Request $request)
    {
        $data=$request->get('var');
        return $this->render('@ensiasGRH/Default/test.html.twig',array('data'=>$data));
    }
}
