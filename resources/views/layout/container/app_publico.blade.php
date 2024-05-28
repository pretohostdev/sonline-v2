<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Página Principal do site" />
    <meta name="author" content="Cláudio Rufino - PETROHOST" />
    
    <script src="https://unpkg.com/scrollreveal"></script>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

    {{-- Inclusão de links Css --}}
    @stack('styles')

    <title>@yield('titulo', 'sonline')</title>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @yield('header')
        </div>

        <div class="row">
            @include('layout.componentes.carrocel')
        </div>

        <div class="row">
            @yield("corpo_publico")
        </div>
           
        <div class="row">
             @yield('footer')
        </div>
           

            @stack('scripts')
        
    </div>

</body>
</html>