<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use AppBundle\Entity\Producto;

class ProductoController extends Controller
{
     /**
	* @Route("/productos", name="productos")
	*/
    public function productosAction(Request $request) 
    {
        //Captura del repo contra la BD. $em x $repository
    	$em = $this->getDoctrine()->getRepository('AppBundle:Producto');

    	//findAll productos
    	$productos = $em->findAll();

        return $this->render('@App/producto/productos.html.twig', array(
        	'productos' => $productos
        ));
    }

    /**
	* @Route("/plato/{id}", name="plato")
	*/
    public function productoAction(Request $request, $id=null) 
    {
        //Captura del repo contra la BD. $em x $repository
    	$em = $this->getDoctrine()->getRepository('AppBundle:Producto');

    	//findAll productos
        $productos = $em->findById($id);
        
        return $this->render('@App/producto/producto.html.twig', array(
        	'productos' => $productos
        ));
    }

    /**
	* @Route("/create", name="editproducto")
	*/
    public function createAction(Request $request) 
    {
        $producto = new Producto();

        $form = $this->createFormBuilder($producto)
            ->add('nombre', TextType::class)
            ->add('categoria', TextType::class)
            ->add('descripcion', TextareaType::class)
            ->add('precio', TextType::class)
            ->add('foto', FileType::class, array(
                'label' => 'Imagen',
                'attr'  => array('class' => 'form-control')
            ))
            ->add('Guardar', SubmitType::class, array('label' => 'Nuevo'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $producto = $form->getData();
            // Recogemos el fichero
            $file = $form['foto']->getData();
            // extraemos la extensión del fichero
            $ext = $file->guessExtension();
            // Asignamos nombre al archivo
            $file_name = time() . '.' . $ext;
            // Guardamos el fichero en el directorio 
            $file->move('img/menu/', $file_name);
            // Establecemos el nombre del fichero en el atributo de la entidad
            $producto->setFoto($file_name);
            // Almacenar en db
            $em = $this->getDoctrine()->getManager();
            $em->persist($producto);
            $em->flush();
            return $this->redirect('/plato/' . $producto->getId());
            //return $this->redirectToRoute('menupage');       
        }
        
        return $this->render('@App/producto/edit.html.twig', array(
        	'form' => $form->createView()
        ));
    }
}
