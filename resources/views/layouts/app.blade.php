<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> {{ (isset($page_title))? $page_title:'' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    {{ Html::style('css/app.css') }}
</head>
<body>
    <!-- Header -->
    @include('layouts/header')


    <div class="container-fluid">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('layouts/footer')

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    @yield('additional_js')
</body>
</html>