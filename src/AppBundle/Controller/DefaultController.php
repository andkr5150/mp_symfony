<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $name = 'Считай не ленись';
        $ars = array(7,8,9,'/',4,5,6,'*',1,2,3,'-',0,'.','~','+');
        $rez = 0;
        // replace this example code with whatever you need
        return $this->render('default/view.html.twig', array('name' =>$name, 'ars'=>$ars, 'rez'=>$rez));
    }

    /**
     * @Route("/add/{key}", name="add")
     */
    public function iRez(Request $request)
    {


        $name = 'Считай не ленись';
        $rez = 9;
        return $this->render('default/view.html.twig', array('name' =>$name, 'rez'=>$rez));
    }
}
