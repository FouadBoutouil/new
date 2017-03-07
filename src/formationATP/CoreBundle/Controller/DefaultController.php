<?php

namespace formationATP\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('formationATPCoreBundle:Default:index.html.twig');
    }

	public function contactAction(Request $request )
	{
		if( $request->isMethod('POST') )
		{
			return new Response('<body>formulaire soumis</body>');
		}
		return $this->render('formationATPCoreBundle:Default:contact.html.twig');
	}
}
