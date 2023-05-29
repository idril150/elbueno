<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--- <script src="https://cdn.tailwindcss.com"></script> --->
    <title>@yield('title')</title>

    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>

@vite('resources/css/app.css')
</head>
<body class="bg">
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')
</body>
</html>