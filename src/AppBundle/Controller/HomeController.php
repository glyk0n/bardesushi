<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Producto;

class HomeController extends Controller
{
	/**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('@App/home/index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/menu", name="menupage")
     */
    public function menuAction()
    {
    	//Captura del repo contra la BD. $em x $repository
    	$em = $this->getDoctrine()->getRepository('AppBundle:Producto');

    	//findAll productos
    	$productos = $em->findAll();

        return $this->render('@App/home/menu.html.twig', array(
        	'productos' => $productos
        ));
    }
}
