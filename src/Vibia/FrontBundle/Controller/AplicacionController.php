<?php

namespace Vibia\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AplicacionController extends Controller
{
    public function indexAction($_lang, $_catalog, $_aplicacion)
    {
        /*
        $request = $this->getRequest();
        $currentRouteParams = $request->attributes->get('_route_params');
        $aplicacion = $currentRouteParams['_aplicacion'];
        */
         $params = array(
            'lang' => $_lang,
            'catalog' => $_catalog,
            'aplicacion'=>$_aplicacion
            );
        //return $this->render('FrontBundle:Aplicacion:index_aplicacion.html.twig', $params);
        return $this->render('FrontBundle:Aplicacion:index_aplicacion.html.smarty', $params);
    }

}
