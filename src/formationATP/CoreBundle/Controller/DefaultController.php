<?php

namespace formationATP\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('formationATPCoreBundle::Layout.html.twig');
    }
}
