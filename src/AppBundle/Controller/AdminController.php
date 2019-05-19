<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function admAction()
    {
        //return $this->render('AppBundle:Admin:index.html.twig', array());
        return $this->render('@App/admin/index.html.twig');
        // return new Response(
        // 	'<html><body><h1>Agruño</h1></body></html>'
        // );
    }

}
