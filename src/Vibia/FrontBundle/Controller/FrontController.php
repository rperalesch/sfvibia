<?php

namespace Vibia\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface; // Generador de URL

//use Symfony\Component\HttpFoundation\Request; // recibir peticion de formulario
//use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
    public function indexAction()
    {
        
        $ruta = $this->generateUrl('index_hompage', array('_lang' => 'en', 'catalog'=>'usa'), UrlGeneratorInterface::ABSOLUTE_URL);

        $request = $this->getRequest();
        $lang = $request->request->get('_lang');
        $catalog = $request->request->get('_catalog');
        $params = array(
            'ruta' => $ruta,
            'lang' => $lang,
            'catalog' => $catalog,
            'name'=>'homepage'
            );
        return $this->render('FrontBundle:Front:index.html.smarty', $params );
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
        return $this->render('FrontBundle:Front:contact.html.smarty', $params);
    }

}
