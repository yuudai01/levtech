<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>PR</title>
    </head>
    <body>
        <h2>プロフィール</h2>
        <a>{{Auth::user()->name}}</a>
    </body>
</html>