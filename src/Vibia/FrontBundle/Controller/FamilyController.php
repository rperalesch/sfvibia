<?php

namespace Vibia\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FamilyController extends Controller
{

    public function indexAction($_lang, $_catalog, $_collection, $_family)
    {
        $params = array(
          'lang' => $_lang,
          'catalog' => $_catalog,
          'collection' => $_collection,
          'family' => $_family
        );
        return $this->render('FrontBundle:Family:index.html.smarty', $params);
    }


    public function listFamilyAction($_lang, $_catalog, $_family)
    {
        $params = array(
          'lang' => $_lang,
          'catalog' => $_catalog,
          'family' => $_family
        );
        return $this->render('FrontBundle:Family:listFamily.html.smarty', $params);
    }
}
