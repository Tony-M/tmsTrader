<?php

namespace Tms\TraderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TmsTraderBundle:Default:index.html.twig', array());
    }
}
