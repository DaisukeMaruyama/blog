<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My blog</title>
        <link rel="stylesheet" href="{{ asset('app.css') }}">
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
