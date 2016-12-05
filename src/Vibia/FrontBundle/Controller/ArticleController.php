<?php

namespace Vibia\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function indexAction() {
        return $this->render("FrontBundle:Article:index.html.tpl");
    }
    
    public function showArticleAction($_lang, $_catalog, $_article_key, $_article_id)
    {
        $params = array(
            'lang' => $_lang,
            'catalog' => $_catalog,
            'article' => $_article_key,
            'id' => $_article_id
        );
        
        return $this->render('FrontBundle:Article:show_article.html.tpl', $params);
    }

}
