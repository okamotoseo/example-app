<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <link rel="stylesheet" href="/app.css">
        <script type="text/javascript" src="/app.js"></script>
        
    </head>
    <body>
        <article>
        <?= $post; ?>
        </article>
        <a href="/posts">Go Back</a>
        </body>
</</html>