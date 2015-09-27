<?php

namespace App\CloverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppCloverBundle:Base:index.html.twig', array());
    }

    public function tablesAction()
    {
        return $this->render('AppCloverBundle:Base:tables.html.twig', array());
    }
}
