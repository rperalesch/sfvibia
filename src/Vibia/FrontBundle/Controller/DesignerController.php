<?php

namespace Vibia\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DesignerController extends Controller
{
    public function indexAction($_lang, $_catalog, $_designer)
    {
        $params = array(
          'lang' => $_lang,
          'catalog' => $_catalog,
          'designer' => $_designer
        );
        return $this->render('FrontBundle:Designer:index_designer.html.tpl', $params );
    }

}
