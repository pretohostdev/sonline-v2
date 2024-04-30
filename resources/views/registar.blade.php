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
    <link rel="shortcut icon" href="assets/img/favicon.png">
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
                                <div class="d-flex align-items-center">
                                    
                                    <div class="register p-5">

                                        <div class="d-flex justify-content-center">
                                            <img src="{{asset('assets/img/logo-registar.png')}}" alt="logo da empresa">
                                        </div>   

                                        <p class="text-center">Seja bem vindo, crie uma conta.</p>

                                        <form class="mt-2 mt-sm-4" id="formRegistar">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Primeiro Nome*</label>
                                                        <input type="text" class="form-control" placeholder="" name="primeiroNome" id="primeiroNome" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Último Nome*</label>
                                                        <input type="text" class="form-control" placeholder="" name="ultimoNome" id="ultimoNome" required>
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
                                                        <input type="text" class="form-control"  name="contacto" id="contacto" required>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                <label class="control-label">Data de nascimento*</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="date" placeholder="2018-12-12" value="2018-12-12" name="dataNascimento" id="dataNascimento">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                </div>
                                                </div>


                                                <div class="col-12">
                                                    <div class="form-group mt-2">
                                                        <label class="control-label">Email*</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                                                    </div>
                                                </div>
                                                <span id="emailMensagem" class="error-message"></span>
                                                
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Senha'*</label>
                                                        <input type="password" class="form-control" placeholder="senha" name="password" id="senha" required>
                                                    </div>
                                                </div>
                                                <span id="senhaMensagem" class="error-message"></span>

                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                            Aceito os termos & políticas
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12 mt-3" id="divRegistar">
                                                    <button type="submit" class="btn btn-primary text-uppercase" id="btn_testar">Registar</button>

                                                    <div class="spinner-border text-dark" role="status" id="spinnerRegistar" style="margin-right: 10px">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>

                                                    {{-- Mensagem de envio com sucesso --}}
                                                    <div id="registoMensagem">
                                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                            Usuário cadastrado com sucesso!
                                                            <button type="button" class="close btn-sm" data-dismiss="alert" aria-label="Close">
                                                                <i class="ti ti-close"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>

                                                </form>
                                                <div class="col-12 mt-3">
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
        <script>

            var email = document.getElementById('email');
            email.addEventListener('blur', function(){

                const email = this.value;
                const pesquisaEmail = existeEmail(email);
                const emailMsg = document.getElementById('emailMensagem');

                pesquisaEmail
                .then(
                    valor =>
                    {
                        if(valor.existe == 'true') // Verifique se número da casa já está no sistema
                            emailMsg.innerHTML = "Email já existente!";
                        else{
                            emailMsg.innerHTML = "";
                        }
                    }
                );
            }); 

            async function existeEmail(email){
        
                try{
                    var mgs = 'Erro ao acessar o Banco de dados';

                    const resposta = await fetch('http://localhost:8000/api/existeEmail/'+ email,
                    {
                        method:'get',
                        headers: {
                            'Accept': 'application/json'
                        }
                    });
                    const resp = await resposta.json();
                    return resp;
                }catch(e){
                    console.log(e);
                }
            }

            async function cadastrar(cliente){
                
                try {
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
                } catch (error) {
                    return error;
                }
               
            }

        var formRegistar = document.getElementById('formRegistar');

        formRegistar.addEventListener('submit', function(event){

            event.preventDefault(); 

            // Obteção dos valores das variáveis
            var senha = document.getElementById('senha').value;
            var email = document.getElementById('email').value;
            var genero = document.getElementById('genero').value;
            var contacto = document.getElementById('contacto').value;
            var ultimoNome = document.getElementById('ultimoNome').value;
            var primeiroNome = document.getElementById('primeiroNome').value;
            var dataNascimento = document.getElementById('dataNascimento').value;

            var nomeCompleto = primeiroNome + " " + ultimoNome;

            const cliente = {
                    email:email,
                    senha: senha,
                    genero:genero,
                    contacto:contacto,
                    nome: nomeCompleto,
                    dataNascimento:dataNascimento,  
            };

            var spinnerRegistar = document.getElementById('spinnerRegistar');
            spinnerRegistar.style.display = "block";

            var registoMensagem = document.getElementById('registoMensagem');

            cadastrado = cadastrar(cliente);

            console.log(cadastrado);
            cadastrado.then(
                data => {
                        if(data.cadastrado == 'true'){
                            console.log('Cadastrado com sucesso');
                        }
                        else{
                            console.log('Erro ao cadastrar: ' + data.cadastrado);
                        }
                    spinnerRegistar.style.display = "none";
                    registoMensagem.style.display = "block";
                }
            );

        });


        // Validar o campo de senha
        var senha = document.getElementById('senha');

        senha.addEventListener('input', function(event){
            const senha = this.value;
            const senhaMsg = document.getElementById('senhaMensagem');

            if(senha.length < 6){
                senhaMsg.innerHTML = "Senha deve ter no mínimo 6 caracteres!";
            }
            else{
                senhaMsg.innerHTML = "";
            }
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