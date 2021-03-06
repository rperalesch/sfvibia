<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>{block name=title}Vibia Front{/block}</title>
        {block name=stylesheets}
            <link href="{asset}public/css/bootstrap.min.css{/asset}" rel="stylesheet" type="text/css" />
            <!--link href="{asset}public/css/style.css{/asset}" rel="stylesheet" type="text/css" /-->
        {/block}
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
    </head>
    <body>
        {block body }
            {include 'file:menu.html.tpl'}
        {/block}

        {block name=javascripts}
            <script src="{asset}public/js/jquery-3.1.1.min.js{/asset}"></script>
            <script src="{asset}public/js/bootstrap.min.js{/asset}"></script>
        {/block}
    </body>
</html>
