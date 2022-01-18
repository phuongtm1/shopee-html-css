<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-free-5.15.4-web/css/all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/practive/base.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/practive/main.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/practive/grid.css')}}" type="text/css">
</head>
<body>
    <div class="app">
        @include('header')
        @include('body')
    </div>
</body>

</html>