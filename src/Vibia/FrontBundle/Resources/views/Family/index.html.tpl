{extends 'file:[FrontBundle]/layout.html.tpl'}

{block title}FrontBundle:Family:index{/block}

{block body}
    {$smarty.block.parent}

    <h1>Family index</h1>
    <p>idioma: {$lang}</p>
    <p>catalgo: {$catalog}</p>
    <p>coleccion: {$collection}</p>
    <p>Aplicación: {$family}</p>

{/block}