<?php

namespace Vibia\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SubfamilyController extends Controller
{
    public function listSubfamilyAction()
    {
        return $this->render('FrontBundle:Subfamily:listSubfamily.html.smarty', array(
            // ...
        ));
    }

}
