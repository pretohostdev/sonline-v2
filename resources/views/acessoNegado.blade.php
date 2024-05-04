<!DOCTYPE html>
<html lang="pt-br">


<head>
    <title>Acesso negado</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="PetroHost" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
</head>

<style>
    .app-wrap{
        background: hsla(185, 64%, 51%, 1);

        background: linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);

        background: -moz-linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);

        background: -webkit-linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);

        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#30C5D2", endColorstr="#471069", GradientType=1);
    }
</style>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">

            <!-- Início do pré-carregamento da página -->
            @include('layout.componentes.carregamentoPagina')
            <!-- end pre-loader -->
            <!--start look screen contant-->
            <div class="error-contant">
                <div class="error-innr">
                    <div class="container d-flex justify-content-center align-items-center h-100-vh">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <div class="error-text">
                                    <h3 class="m-t-30 text-light">ACESSO NEGADO!</h3>
                                    <p class="text-info" style="font-size: 12pt; font-family:sans-serif">Você não tem permissão para acessar essa página, ela é usada apenas para pessoas autorizadas.</p>
                                    <a href="{{route('login')}}" class="btn btn-round btn-outline-light mt-3">Fazer login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end look screen contant-->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>


</html>