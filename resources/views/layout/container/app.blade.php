<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <meta name="description" content="Página Principal do site" />
      <meta name="author" content="Cláudio Rufino - PETROHOST" />

      <title>@yield('titulo', 'sonline Services')</title>
      @stack('styles')
      
   </head>
   <body class="dashboard dashboard_2">
      <div class="full_container">
         <div class="inner_container">


            <!-- Sidebar  -->
            @yield('dashboard')
            <!-- end sidebar -->


            <!-- right content -->
            <div id="content">
               <!-- topbar -->
                    @include('layout.componentes.topbar')
               <!-- end topbar -->


               <!-- dashboard inner -->
                    @yield("corpo")
               <!-- end dashboard inner -->


            </div>
            
         </div>
      </div>
      
      @stack('scripts') 
   </body>
</html>



{{-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Página Principal do site" />
    <meta name="author" content="Cláudio Rufino - PETROHOST" />

    @stack('styles')

    <title>@yield('titulo', 'sonline Services')</title>

</head>
<body>

     <div class="app">
          <!-- Início do wrap do sistema -->
          <div class="app-wrap">

             <!-- Início do pré-carregamento da página -->
            @include('layout.componentes.carregamentoPagina')

            <!-- Header do sistema --> 
            @yield('header')
            
            <div class="app-container">
                @yield('dashboard')
                
                <div class="app-main" id="main">
                    
                    <div class="container-fluid">
                        @yield("corpo")
                    </div>
                </div>

            </div>

            @yield('footer')

          </div>

     </div>

     @stack('scripts')
    
</body>
</html> --}}