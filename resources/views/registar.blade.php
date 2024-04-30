<!DOCTYPE html>
<html lang="pt-br">

    
    <head>
    <title>Registar</title>
    {{-- Bootstrap 5 para lhe dar com  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Sistema da sonline Service." />
    <meta name="author" content="petroHost" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}" >
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/registar.css')}}" >


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

                                        <form action="" method="" class="mt-2 mt-sm-5" id="formRegistar">
                                            {{-- @csrf --}}
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Primeiro Nome*</label>
                                                        <input type="text" class="form-control" placeholder="primeiro nome" value="Claudio" name="primeiroNome" id="primeiroNome">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Último Nome*</label>
                                                        <input type="text" class="form-control" placeholder="último nome" value="Rufino" name="ultimoNome" id="ultimoNome">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Género*</label>
                                                        <select name="genero" class="form-control" id="genero">
                                                            @foreach(['Masculino', 'Feminino'] as $genero)
                                                                <option value="{{ $genero }}">{{ $genero }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Contacto*</label>
                                                        <input type="text" class="form-control" placeholder="contacto" value="934962288" name="contacto" id="contacto">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                <label class="control-label">Data de nascimento*</label>
                                                <div class="input-group date display-years" data-date-format="dd-mm-yyyy" data-date="14-06-2018">
                                                    <input class="form-control" type="text" placeholder="2018-12-12" value="2018-12-12" name="dataNascimento" id="dataNascimento">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                </div>
                                                </div>


                                                <div class="col-12 mt-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Email*</label>
                                                        <input type="email" class="form-control" placeholder="Email" value="claudio@gmail.com" name="email" id="email">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Senha'*</label>
                                                        <input type="password" class="form-control" placeholder="senha" value="12345" name="password" id="senha">
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
                                                
                                                <div class="col-12 mt-3" id="divRegistar">
                                                    <button type="submit" class="btn btn-primary text-uppercase">Registar</button>

                                                    <div class="spinner-border text-dark" role="status" id="spinnerRegistar" style="margin-right: 10px">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>

                                                </div>

                                                </form>
                                                <div class="col-12 mt-3">
                                                    <p>Já tem uma conta ?<a href="{{route('login')}}" class="text-primary"> Entrar</a></p>
                                                </div>

                                                {{-- Mensagem de envio com sucesso --}}
                                                    <div id="registoMensagem" class="mt-4">
                                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                            Usuário cadastrado com sucesso!
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <i class="ti ti-close"></i>
                                                            </button>
                                                        </div>
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
        <script>
            // Obteção das  variáveis
            var primeiroNome = document.getElementById('primeiroNome').value;
            var ultimoNome = document.getElementById('ultimoNome').value;
            var genero = document.getElementById('genero').value;
            var contacto = document.getElementById('contacto').value;
            var dataNascimento = document.getElementById('dataNascimento').value;
            var email = document.getElementById('email').value;
            var senha = document.getElementById('senha').value;

            var nomeCompleto = primeiroNome + " " + ultimoNome;
            

            const cliente = {
                email:email,
                senha: senha,
                genero:genero,
                contacto:contacto,
                nome: nomeCompleto,
                dataNascimento:dataNascimento,
            };

            
            async function cadastrar(cliente){
                
                // try {
                    const response = await fetch('http://localhost:8000/api/cadastrar',
                    {
                        method:'POST',
                        headers: {
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify(cliente),
                    });
                    const dados = await response.json();
                    return dados;
                // } catch (error) {
                    // console.log(error);
                    // return error;
                // }
               
            }

            var formRegistar = document.getElementById('formRegistar');

            formRegistar.addEventListener('submit', function(event){

                event.preventDefault(); // Impedir o envio padrão do formulário
                // console.log('Estou funcionando...');

                var spinnerRegistar = document.getElementById('spinnerRegistar');
                spinnerRegistar.style.display = "block";


                cadastrado = cadastrar(cliente);
                cadastrado.then(
                    data => {
                        if(data.cadastrado == 'true'){
                            console.log('Cadastrado com sucesso');
                        }
                        else{
                            console.log('Erro ao cadastrar: ' + data.cadastrado);
                        }
                        spinnerRegistar.style.display = "none";
                    }
                )

            });


        
    </script>
        
    </div>
    <!-- end app -->



    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>

</html>