<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PruebaController extends Controller
{
    private $UNIDADES = array(
           'UN ',
           'DOS ',
           'TRES ',
           'CUATRO ',
           'CINCO ',
           'SEIS ',
           'SIETE ',
           'OCHO ',
           'NUEVE ',
           'DIEZ ',
           'ONCE ',
           'DOCE ',
           'TRECE ',
           'CATORCE ',
           'QUINCE ',
           'DIECISEIS ',
           'DIECISIETE ',
           'DIECIOCHO ',
           'DIECINUEVE ',
           'VEINTE '
     );

    /**
     * @Route("/prueba/numero")
     */
    public function numeroAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('prueba/numero.html.twig', array(
            'number' => $number,
        ));
    }
    /**
     * @Route("/numero/random")
     */        
    public function randomAction()
    {
        $params = $this->UNIDADES;
        
        
        //return $this->render('AcmeHelloBundle:Hello:index.html.smarty', array('name' => $name));
        return $this->render('prueba/random.html.smarty', array('params' => $params, 'title'=>'Ejemplo Smarty'));
    }
    
}