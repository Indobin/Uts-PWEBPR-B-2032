<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>@yield('title', 'laravel11')</title>
 <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
 @vite('resources/css/app.css')
</head>
<body>
  <body class="font-sans antialiased">
        
    <div class="min-h-screen bg-gray-100 flex flex-col">
        @include('components.navbar.index')


        <!-- Page Content -->
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex-grow">
                @yield('content')
            </div>
        </main> 
        @include('components.footer')
    </div>
</body>
</body>
</html>
