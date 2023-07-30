<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta, title, styles, etc. -->
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
        <!-- Aquí se define la sección content -->
        @yield('content')
    </div>
</body>
</html>