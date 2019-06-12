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

    /**
     * @Route("/about", name="aboutpage")
     */
    public function aboutAction()
    {
        return $this->render('@App/home/about.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/contacto", name="contactopage")
     */
    public function contactoAction()
    {
        return $this->render('@App/home/contacto.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/galeria", name="galeria")
     */
    public function galeriaAction(Request $request, $categoria = null)
    {
        //Captura del repo contra la BD. $em x $repository
    	$em = $this->getDoctrine()->getRepository('AppBundle:Producto');

        if (!$categoria) {
                //findAll productos
                $productos = $em->findAll();
        }
    	//find productos by categoria
        $categoria = $request->get('categoria');
        $productos = $em->findBy(['categoria' => $categoria]);

        return $this->render('@App/home/galeria.html.twig', array(
        	'productos' => $productos
        ));
    }

    /**
     * @Route("/pedidos", name="pedidos")
     */
    public function pedidosAction()
    {
        //Captura del repo contra la BD. $em x $repository
    	$em = $this->getDoctrine()->getRepository('AppBundle:Producto');

    	//findAll productos
    	$productos = $em->findAll();

        return $this->render('@App/producto/pedidos.html.twig', array(
        	'productos' => $productos
        ));
    }

    /**
     * @Route("/partners", name="partners")
     */
    public function partnersAction()
    {
        return $this->render('@App/home/partners.html.twig');
    }
}
