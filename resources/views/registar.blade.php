<!DOCTYPE html>
<html lang="pt-br">

    
    <head>
    <title>Registar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Sistema da sonline Service." />
    <meta name="author" content="petroHost" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.jpg')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/pluto/style.css')}}" >
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
            {{-- @include('layout.componentes.carregamentoPagina') --}}
            <!-- end pre-loader -->

            <div class="app-contant">
                <div class="" style="background-color: #cbcbcb">
                    <div class="container-fluid">
                        <div class="row no-gutters d-flex justify-content-center">
                            <div class="col-sm-6 col-lg-5 col-xxl-3">
                                <div class="d-flex align-items-center justify-content-center h-100-vh secao-registar">
                                    
                                    <div class="register p-5">

                                        <div class="d-flex justify-content-center">
                                            <img src="{{asset('assets/img/logo.jpg')}}" class="logo" alt="logo da empresa">
                                        </div>   

                                        {{-- <p class="text-center">Seja bem vindo, crie uma conta</p> --}}

                                        <!-- Se houver erros de validação, exiba-os -->
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li class="text-light">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                        <form action="{{route('cadastrar')}}" method="POST" class="mt-2 mt-sm-4" id="formRegistar">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="">Primeiro nome</label>
                                                        <input type="text" class="form-control" value="{{old('primeiroNome')}}" name="primeiroNome" id="primeiroNome" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Último nome</label>
                                                        <input type="text" class="form-control" value="{{old('ultimoNome')}}" name="ultimoNome" id="ultimoNome" required>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Género</label>
                                                        <select name="genero" class="form-control" id="genero">
                                                            @foreach(['Masculino', 'Feminino'] as $genero)
                                                                <option value="{{ $genero }}">{{ $genero }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Contacto</label>
                                                        <input type="text" class="form-control" value="{{old('contacto')}}" name="contacto" id="contacto" required>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                <label class="control-label">Data de nascimento</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="date" placeholder="2018-12-12" value="{{old('dataNascimento')}}" name="dataNascimento" id="dataNascimento">
                                                </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group mt-3">
                                                        <label class="control-label">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
                                                    </div>
                                                </div>
                                                <span id="emailMensagem" class="error-message"></span>
                                                
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Senha</label>
                                                        <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}" required>
                                                    </div>
                                                </div>
                                                <span id="senhaMensagem" class="error-message mt-3"></span>

                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                            Aceito os termos & políticas
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12 mt-3" id="divRegistar">
                                                    <button type="submit" class="btn btn-primary" id="btn_testar">Registar</button>

                                                    <div class="spinner-border text-primary" role="status" id="spinnerRegistar" style="margin-right: 10px">
                                                        <span class="sr-only">Loading...</span>
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

                            {{-- <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <div class="col-7 mx-auto ">
                                        <img class="img-fluid" src="assets/img/login.png" alt="">
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end app-wrap -->
        <script>

            var email = document.getElementById('email');
            email.addEventListener('blur', function(){

                const valor = this.value;
                const pesquisaEmail = existeEmail(valor);
                const emailMsg = document.getElementById('emailMensagem');

                pesquisaEmail
                .then(
                    valor =>
                    {
                        if(valor.existe == 'true'){
                            emailMsg.innerHTML = "Email já existente!";
                            function operacao() {
                                console.log("Operação realizada!");
                                email.value = "";
                            }

                            // Criando o intervalo de 1 segundo para apagar o email entrado
                            var intervalo = setInterval(()=>{email.value = ""}, 1000);

                            // Parando o intervalo após 5 segundos
                            setTimeout(function() {
                                clearInterval(intervalo);
                            }, 1000);
                        }
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

        // Validar o campo de senha
        var senha = document.getElementById('password');

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

    <!-- plugins -->
    {{-- <script src="assets/js/vendors.js"></script> --}}

    <!-- custom app -->
    {{-- <script src="assets/js/app.js"></script> --}}
</body>

</html>