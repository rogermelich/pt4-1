<?php

namespace BasicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ControladorController extends Controller
{
     public function variableAction(Request $request)
    {
        return $this->render('BasicBundle:Default:var.html.twig', array(
            'var' => "Hey !!! ".$request->get("var"),
        ));
    }
    
    public function aboutAction()
    {
        return $this->render('BasicBundle:Default:about.html.twig');
    }
    
    public function productsAction()
    {
        return $this->render('BasicBundle:Default:products.html.twig');
    }
    
    public function storeAction()
    {
        return $this->render('BasicBundle:Default:store.html.twig');
    }
    
    
}
