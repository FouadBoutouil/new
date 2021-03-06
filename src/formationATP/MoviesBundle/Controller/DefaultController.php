<?php
namespace formationATP\MoviesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('formationATPMoviesBundle::Layout.html.twig');
    }

    public function addAction()
    {
        return $this->render('formationATPMoviesBundle:Default:add.html.twig');
    }

    public function editAction($id)
    {
        return $this->render('formationATPMoviesBundle:Default:edit.html.twig',array('id'=> $id));
    }

    public function delAction()
    {
        return $this->render('formationATPMoviesBundle:Default:del.html.twig');
    }

	public function ViewAction($id)
	{
		return $this->render('formationATPMoviesBundle:Default:view.html.twig',array('id'=> $id));
	}

	public function vueCategorieAction($categorie)
	{
		return $this->render('formationATPMoviesBundle:Default:vueCategorie.html.twig',array('categorie'=> $categorie));
	}
}
