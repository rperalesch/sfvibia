{extends 'file:[FrontBundle]/layout.html.tpl'}

{block title}FrontBundle:Article:index{/block}

{block body}
    {$smarty.block.parent}

    <h1>Welcome to the Article:showArticle page</h1>

    <p>idioma: {$lang}</p>
    <p>catalgo: {$catalog}</p>
    <p>Articulo: {$article}</p>
    <p>ID: {$id}</p>

{/block}