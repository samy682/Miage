<?php

namespace MiageBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MiageBlogBundle:Default:index.html.twig');
    }
	
	public function hellotoiAction($toi)
	{
			return $this->render('MiageBlogBundle:Default:hellotoi.html.twig',array('toi' => $toi));
			
	}
	
	public function hellomoiAction($toi,$annee,$mois,$format)
	{
			return $this->render('MiageBlogBundle:Default:hellomoi.html.twig',array('toi' => $toi,'annee' => $annee,'mois' => $mois));
			
	}
}
