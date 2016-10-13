<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> {{ (isset($page_title))? $page_title:'' }}</title>
    <meta name="viewport" content="initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{ Html::style('css/app.css') }}
</head>
<body>
    <!-- Header -->
    @include('layouts/header')


        @yield('content')

    <!-- Footer -->
    @include('layouts/footer')

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="https://fb.me/react-15.0.0.min.js"></script>
    <script src="https://fb.me/react-dom-15.0.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
    @yield('additional_js')
</body>
</html>