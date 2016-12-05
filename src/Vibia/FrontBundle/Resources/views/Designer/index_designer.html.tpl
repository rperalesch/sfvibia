{extends 'file:[FrontBundle]/layout.html.tpl'}

{block title}FrontBundle:Designer:indexDesigner{/block}

{block body}
    {$smarty.block.parent}

    <h1>Welcome to the Designer:indexDesigner page</h1>

    <p>idioma: {$lang}</p>
    <p>catalgo: {$catalog}</p>
    <p>coleccion: {$designer}</p>

{/block}
