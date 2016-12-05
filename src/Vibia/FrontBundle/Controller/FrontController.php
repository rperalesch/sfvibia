<?php

namespace Vibia\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface; // Generador de URL

//use Symfony\Component\HttpFoundation\Request; // recibir peticion de formulario
//use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
    public function indexAction($_catalog=null)
    {
        
        //$ruta = $this->generateUrl('index_hompage', array('_catalog'=>'usa'), UrlGeneratorInterface::ABSOLUTE_URL);

//        $request = $this->getRequest();
//        $lang = $request->request->get('_lang');
//        $catalog = $request->request->get('_catalog');
        $ruta = $this->generateUrl('index_hompage', array('catalog'=>$_catalog), UrlGeneratorInterface::ABSOLUTE_URL);
        $params = array(
            'ruta' => $ruta,
//            'lang' => $lang,
            'catalog' => $_catalog,
            'name'=>'homepage'
            );
        return $this->render('FrontBundle:Front:index.html.tpl', $params );
    }
    
    public function demoAction() {
        
//        $cadena = $this->get('translator')->trans('frontend.message.vabadus');
        //$request = $this->getRequest();
//        $request = $this->container->getParameter('locale');
//print_r($request);
        //$params = array('lang'=>'es');
        $params = array();
        //return $this->render('FrontBundle:Front:demo_homepage.html.twig', $params);
        return $this->render('FrontBundle:Front:demo_homepage.html.tpl', $params);
    }
    
    public function contactAction() {
        
        $request = $this->getRequest();
        $currentRoute = $request->attributes->get('_route');
        $currentRouteParams = $request->attributes->get('_route_params');
        /*
     print_r('<PRE>');   
print_r($currentRoute);
print_r('</PRE>');
exit(); */
 
//        $lang = $request->request->get('_locale');
        $aplicacion = $currentRouteParams['_aplicaciones'];
//print_r($aplicacion);exit();
        $params = array(
//            'lang' => $lang,
            'aplicacion' => $aplicacion
            );
        return $this->render('FrontBundle:Front:contact.html.tpl', $params);
    }

}
