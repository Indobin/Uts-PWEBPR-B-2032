<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>
  <body class="font-sans antialiased">
        
    <div class="min-h-screen bg-gray-100">
        @include('components.nav')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow pt-12">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        
    </div>
</body>
</body>
</html>
