<?php

namespace Vibia\CatalogdbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CatalogdbBundle:Default:index.html.twig');
    }
}
