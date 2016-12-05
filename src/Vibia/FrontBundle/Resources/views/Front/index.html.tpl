{extends 'file:[FrontBundle]/layout.html.tpl'}

{block title}FrontBundle:Front:index{/block}

{block body}
    {$smarty.block.parent}
    {* parent()  en twig *}

    <h1>Welcome to the Front:index page</h1>

    <a href="{path}index_hompage{/path}">Enlaces </a>

    <p>ruta: {$ruta} </p>
    <p>idioma: {trans}idioma{/trans} </p>
    <p>catalgo: {$catalog}</p>

    <ul></ul>
    <li><a href="#">{trans}frontend.message.inspiration{/trans}</a></li>
    <li><a href="#">{trans}frontend.message.where.to.buy{/trans}</a></li>
    <li><a href="">{trans}frontend.message.downloads{/trans}</a></li>
    <li><a href="">{trans}frontend.message.contact{/trans}</a></li>
    <li><a href="">{trans}frontend.message.profesional.area{/trans}</a></li> 

<br>

Traducción: {trans}lang{/trans}
<br>


{/block}