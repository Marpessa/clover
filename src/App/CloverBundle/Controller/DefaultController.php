<?php

namespace App\CloverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppCloverBundle:Default:index.html.twig', array());
    }
}
