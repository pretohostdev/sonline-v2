<!DOCTYPE html>
<html lang="pt-br">


<head>
    <title>Registar</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Sistema da sonline Service." />
    <meta name="author" content="SOnline Service" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    {{-- Font e Icones alternativa --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/themify-icons/themify-icons.css') }}">

</head>

<body class="bg-white">
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">

            <!-- Início do pré-carregamento da página -->
            @include('layout.componentes.carregamentoPagina')
            <!-- end pre-loader -->

            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    
                                    <div class="register p-5">

                                        <div class="d-flex justify-content-center mt-4">
                                            <img src="{{asset('assets/img/logo-registar.png')}}" alt="">
                                        </div>   

                                        <p class="text-center">Seja bem vindo, crie uma conta.</p>


                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <form action="{{route('cliente.store')}}" method="POST" class="mt-2 mt-sm-5">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Primeiro Nome*</label>
                                                        <input type="text" class="form-control" placeholder="primeiro nome" value="Josue" name="primeiroNome" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Último Nome*</label>
                                                        <input type="text" class="form-control" placeholder="último nome" value="Rufino" name="ultimoNome" />
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Género*</label>
                                                        <select name="genero" class="form-control">
                                                            @foreach(['Masculino', 'Feminino'] as $genero)
                                                                <option value="{{ $genero }}">{{ $genero }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Contacto*</label>
                                                        <input type="text" class="form-control" placeholder="contacto" value="934962288" name="contacto" />
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                <label class="control-label">Data de nascimento*</label>
                                                <div class="input-group date display-years" data-date-format="dd-mm-yyyy" data-date="14-06-2018">
                                                    <input class="form-control" type="text" placeholder="2018-12-12" value="2018-12-12" name="dataNascimento">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                </div>
                                                </div>


                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Email*</label>
                                                        <input type="email" class="form-control" placeholder="Email" value="josue@gmail.com" name="email" />
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Senha'*</label>
                                                        <input type="password" class="form-control" placeholder="senha" value="12345" name="password" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                            Aceito os termos & políticas
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <button type="submit" class="btn btn-primary text-uppercase">Registar</button>
                                                </div>
                                                </form>
                                                <div class="col-12  mt-3">
                                                    <p>Já tem uma conta ?<a href="{{route('login')}}" class="text-primary"> Entrar</a></p>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <div class="col-7 mx-auto ">
                                        <img class="img-fluid" src="assets/img/login.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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