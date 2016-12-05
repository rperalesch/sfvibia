<?php
namespace Vibia\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DemosmartyController extends Controller
{
    //RUTA sf_vibia.deb/app_dev.php/demosmarty/paramx
    public function indexAction($param)
    {
        return $this->render('DemoBundle:Demosmarty:index.html.smarty', array('param'=>$param));
    }
}
