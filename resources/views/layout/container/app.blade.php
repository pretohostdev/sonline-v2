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

     <div class="app">
          <!-- Início do wrap do sistema -->
          <div class="app-wrap">

             <!-- Início do pré-carregamento da página -->
            @include('layout.componentes.carregamentoPagina')

            <!-- Header do sistema -->
            @include('layout.componentes.header')

            <div class="app-container">
                @include('layout.componentes.dashboard')

                <!-- Esse é o corpo do sistema -->
                <div class="app-main" id="main">
                    <div class="container-fluid">
                        @yield('corpo')
                    </div>
                </div>

            </div>

            @include('layout.componentes.footer')

          </div>

     </div>

     @stack('scripts')
    
</body>
</html>