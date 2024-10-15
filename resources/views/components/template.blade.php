<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>@yield('title')</title>
 @vite('resources/css/app.css')
</head>
<body>
 @include('components.nav')
 <h1 class="text-gray-600 semi-bold">COba uy</h1>
 @yield('content')
</body>
</html>