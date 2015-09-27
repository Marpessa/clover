<?php

namespace App\CloverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UIController extends Controller
{
    public function buttonsAction()
    {
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->setTitle('Buttons | Clover')
            ->addMeta('name', 'description', '');

        $breadcrumbs = $this->getBaseBreadcrumb();
        $breadcrumbs->addItem("Icons", $this->get("router")->generate("app_clover_buttons"));

        return $this->render('AppCloverBundle:UI:buttons.html.twig', array());
    }

    public function typographyAction()
    {
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->setTitle('Typography | Clover')
            ->addMeta('name', 'description', '');

        $breadcrumbs = $this->getBaseBreadcrumb();
        $breadcrumbs->addItem("Typography", $this->get("router")->generate("app_clover_typography"));

        return $this->render('AppCloverBundle:UI:typography.html.twig', array());
    }

    public function iconsAction()
    {
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->setTitle('Icons | Clover')
            ->addMeta('name', 'description', '');

        $breadcrumbs = $this->getBaseBreadcrumb();
        $breadcrumbs->addItem("Icons", $this->get("router")->generate("app_clover_icons"));

        return $this->render('AppCloverBundle:UI:icons.html.twig', array());
    }

    private function getBaseBreadcrumb()
    {
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("UI Elements", $this->get("router")->generate("app_clover_typography"));

        return $breadcrumbs;
    }
}
