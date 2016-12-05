{extends 'file:[FrontBundle]/layout.html.tpl'}

{block title}FrontBundle:Aplicacion:index{/block}

{block body}
    {$smarty.block.parent}

    <h1>Welcome to the Aplicacion:index page</h1>

    <p>idioma: {$lang}</p>
    <p>catalgo: {$catalog}</p>
    <p>Aplicación: {$aplicacion}</p>

{/block}