<?php

namespace App\CloverBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface         $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
        $menu->setCurrent($request->getRequestUri());
        $menu->setChildrenAttribute('id', 'sidebar_nav');
        $menu->setChildrenAttribute('class', 'nav');

        $menu->addChild('home', array(
            'route' => 'app_clover_homepage',
            'label' => '<i class="fa fa-home"></i> Dashboard',
            'extras' => array(
                'safe_label' => true
            )
        ));

        $this->getUIMenu($menu);

        $menu->addChild('tables', array(
            'route' => 'app_clover_tables',
            'label' => '<i class="fa fa-table"></i> Tables',
            'extras' => array(
                'safe_label' => true
            )
        ));

        $menu->addChild('emailing', array(
            'route' => 'app_clover_tables',
            'label' => '<i class="fa fa-envelope-o"></i> Emailing',
            'extras' => array(
                'safe_label' => true
            )
        ));

        $menu->addChild('calendar', array(
            'route' => 'app_clover_tables',
            'label' => '<i class="fa fa-calendar-o"></i> Calendar',
            'extras' => array(
                'safe_label' => true
            )
        ));

        $menu->addChild('forms', array(
            'route' => 'app_clover_tables',
            'label' => '<i class="fa fa-edit"></i> Forms',
            'extras' => array(
                'safe_label' => true
            )
        ));

        $menu->addChild('charts', array(
            'route' => 'app_clover_tables',
            'label' => '<i class="fa fa-bar-chart-o"></i> Charts',
            'extras' => array(
                'safe_label' => true
            )
        ));

        $menu->addChild('pages', array(
            'route' => 'app_clover_tables',
            'label' => '<i class="fa fa-file-o"></i> Pages',
            'extras' => array(
                'safe_label' => true
            )
        ));

        // Menu level
        $menu->addChild('menu', array(
            'route' => 'app_clover_tables',
            'label' => '<i class="fa fa-align-left"></i> Menu level',
            'extras' => array(
                'safe_label' => true
            )
        ));
        $menu['menu']->setChildrenAttribute('class', 'nav');

        $menu['menu']->addChild('menu1_1', array(
            'route' => 'app_clover_tables',
            'label' => 'Menu 1.1'
        ));
        $menu['menu']['menu1_1']->setChildrenAttribute('class', 'nav');

        $menu['menu']->addChild('menu1_2', array(
            'route' => 'app_clover_tables',
            'label' => 'Menu 1.2'
        ));

        $menu['menu']->addChild('menu1_3', array(
            'route' => 'app_clover_tables',
            'label' => 'Menu 1.3'
        ));

        $menu['menu']['menu1_1']->addChild('menu2_1', array(
            'route' => 'app_clover_tables',
            'label' => 'Menu 2.1'
        ));
        $menu['menu']['menu1_1']['menu2_1']->setChildrenAttribute('class', 'nav');

        $menu['menu']['menu1_1']->addChild('menu2_2', array(
            'route' => 'app_clover_tables',
            'label' => 'Menu 2.2'
        ));

        $menu['menu']['menu1_1']->addChild('menu2_3', array(
            'route' => 'app_clover_tables',
            'label' => 'Menu 2.3'
        ));

        $menu['menu']['menu1_1']['menu2_1']->addChild('menu3_1', array(
            'route' => 'app_clover_tables',
            'label' => 'Menu 3.1'
        ));

        $menu['menu']['menu1_1']['menu2_1']->addChild('menu3_2', array(
            'route' => 'app_clover_tables',
            'label' => 'Menu 3.2'
        ));

        return $menu;
    }

    private function getUIMenu(&$menu)
    {
        $menu->addChild('ui', array(
            'route' => 'app_clover_tables',
            'label' => '<i class="fa fa-flask"></i> UI Elements',
            'extras' => array(
                'safe_label' => true
            )
        ));
        $menu['ui']->setChildrenAttribute('class', 'nav');

        $menu['ui']->addChild('typography', array(
            'route' => 'app_clover_typography',
            'label' => 'Typography'
        ));

        $menu['ui']->addChild('icons', array(
            'route' => 'app_clover_icons',
            'label' => 'Icons'
        ));
    }
}