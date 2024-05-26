<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Página Principal do site" />
    <meta name="author" content="Cláudio Rufino - PETROHOST" />
    
    <script src="https://unpkg.com/scrollreveal"></script>

    {{-- Inclusão de links Css --}}
    @stack('styles')

    <title>@yield('titulo', 'sonline')</title>

</head>
<body>

    @yield('header')
    @include('layout.componentes.carrocel')

    @yield("corpo_publico")

    @yield('footer')

@stack('scripts')

</body>
</html>