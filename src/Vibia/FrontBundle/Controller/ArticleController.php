<?php

namespace Vibia\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function showArticleAction($lang, $catalog, $id)
    {
        return $this->render('FrontBundle:Article:show_article.html.smarty', array(
            // ...
        ));
    }

}
