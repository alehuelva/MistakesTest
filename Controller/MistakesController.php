<?php

namespace Mistakes\MistakesTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Mistakes\MistakesTestBundle\loadxml;



class MistakesController extends Controller {

	//PROBANDO
	
	/*  /**
	 	* @Route("/mistakes", name="BloggerBundle_mistakes")
		* @Method({"GET"})
		*/
		public function indexAction()
		{
			$obj=new loadxml();
			
			 
			$xmlprojects = $obj -> loadProjects();
			$xmlerrors = $obj ->  loadErrors(10);
			$obj -> resetErrors($xmlprojects);
			$obj -> setErrors($xmlerrors);
			$obj -> setProjectname($xmlprojects);
			$temperror= ($obj -> getErrors());
			$tempproj= ($obj -> getProjectname());
			
			 
			return $this->render('MistakesTestBundle:Mistakes:index.html.twig', array( //rendder the view
					'errors' => $temperror,
					'projects' => $tempproj
			));
		
			
			//return new Response('<html><body>Hello</body></html>');
		}
	
	

}







/*class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BloggerMistakesBundle:Default:index.html.twig');
    }
}*/
