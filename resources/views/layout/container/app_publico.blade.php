<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Página Principal do site" />
    <meta name="author" content="Cláudio Rufino - PETROHOST" />
    

    {{-- Inclusão de links Css --}}
    @stack('styles')

    <title>@yield('titulo', 'sonline')</title>

</head>
<body>

     <div class="app_publico">
            {{-- @include('layout.componentes.carregamentoPagina') --}}

            <!-- Header do sistema --> 
            @yield('header')
                    @include('layout.componentes.carrocel')

                    @yield("corpo_publico")

            @yield('footer')
     </div>

     @stack('scripts')
    
</body>
</html>