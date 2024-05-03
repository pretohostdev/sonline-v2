@extends('layout.container.app')

@section('titulo', 'Inicio')

@push('styles')

    {{-- Inclusão do Bootstrap 5 no projecto --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.jpg')}}">

    {{-- Font e Icones alternativa --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/themify-icons/themify-icons.css') }}">
@endpush


@section('header')
    @include('layout.componentes.headerCliente')
@endsection

@section('dashboard')
    @include('layout.componentes.dashboardCliente')
@endsection

@section("corpo")

<div class="row" style="margin-top:100px">
    <div class="col-md-12">

        <div class="d-block d-lg-flex flex-nowrap align-items-center">
            <div class="page-title mr-4 pr-4 border-right">
                <h1>Sonline</h1>
            </div>
            <div class="breadcrumb-bar align-items-center">
                <nav>
                    <ol class="breadcrumb p-0 m-b-0">
                        <li class="breadcrumb-item">
                            <a href="x"></a>
                        </li>
                        <li>
                            Página Principal
                        </li>
                    </ol>
                </nav>
            </div>

            @include('layout.componentes.cabecalho_2')


        </div>


        <!--mail-Compose-contant-start-->
        <div class="row account-contant">
            <div class="col-12">
                <div class="card card-statistics">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                                <div class="page-account-profil pt-5">
                                    <div class="profile-img text-center rounded-circle">
                                        <div class="pt-5">
                                            <div class="bg-img m-auto">
                                                <img src="{{asset('assets/img/perfil.png')}}" class="img-fluid" alt="users-avatar">
                                            </div>
                                            <div class="profile pt-4">
                                                <h4 class="mb-1">{{ $cliente->nome }}</h4>
                                                <p>cliente</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-5 profile-counter">
                                        <ul class="nav justify-content-center text-center">
                                            <li class="nav-item border-right px-3">
                                                <div>
                                                    <h4 class="mb-0">{{ $cliente->totalMoedas }}</h4>
                                                    <p>Moedas</p>
                                                </div>
                                            </li>

                                            <li class="nav-item border-right px-3">
                                                <div>
                                                    <h4 class="mb-0">{{ $cliente->totalContas }}</h4>
                                                    <p>Conta</p>
                                                </div>
                                            </li>

                                            <li class="nav-item px-3">
                                                <div>
                                                    <h4 class="mb-0">{{ $cliente->totalRedirecionamentos }}</h4>
                                                    <p>Redire...</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6 col-12 border-t border-right">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Editar dados pessoais</h5>
                                    </div>
                                    <div class="p-4">
                                        {{-- action="{{ route('user.update', $cliente->id) }}" --}}
                                        <form method="POST" id="formEditarDados">
                                            @csrf
                                            @method('POST')

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="nome">Nome completo</label>
                                                    <input type="text" class="form-control" name="nome" id="nomeCompleto" value="{{$cliente->nome}}">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" name="email" id="email" value="{{$cliente->email}}" readonly>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="contacto">Número do Telefone</label>
                                                    <input type="text" class="form-control" name="contacto" id="contacto" value="{{$cliente->contacto}}">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="genero">Gênero</label>
                                                    <input type="email" class="form-control" name="genero" id="genero" value="{{$cliente->genero}}" readonly>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-12">
                                                    <label class="mb-1">Data de Nascimento</label>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input id="diaNascimento" class="form-control" name="diaNascimento" value="{{$cliente->diaNascimento}}">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input id="mesNascimento" class="form-control" name="mesNascimento" value="{{$cliente->mesNascimento}}">
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <input id="anoNascimento" class="form-control" name="anoNascimento" value="{{$cliente->anoNascimento}}">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="pais">País</label>
                                                    <input id="pais" class="form-control" name="pais" value="{{$cliente->pais}}" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="cidade">Cidade</label>
                                                    <input id="cidade" class="form-control" name="cidade" value="{{$cliente->cidade}}" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="bairro">Bairro</label>
                                                    <input type="text" class="form-control" name="bairro" id="bairro" value="{{$cliente->bairro}}" required>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <input type="hidden" class="form-control" id="user_id" value="{{$cliente->id}}">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Concordo com as alterações.
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn bg-gradient text-light">Atualizar dados</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 border-t col-12">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Links Rápidos</h5>
                                    </div>
                                    <div class="p-4">
                                        <form>
                                            <div class="form-group">
                                                <a href="{{ route('visto.estado') }}" class="btn btn-block bg-gradient text-light" id="estadoVisto" >Estado do visto</a>
                                            </div>

                                            <div class="form-group">
                                                <a href="{{ route('conta.estado') }}" class="btn btn-block bg-gradient text-light" id="estadoVisto" >Estado da abertura de conta</a>
                                            </div>

                                            <div class="form-group">
                                                <a href="{{ route('moeda.estado') }}" class="btn btn-block bg-gradient text-light" id="estadoVisto" >Estado da solicitação da moeda</a>
                                            </div>

                                            <div class="form-group">
                                                <a href="{{ route('redirecionamento.estado') }}" class="btn btn-block bg-gradient text-light" id="estadoVisto" >Estado do redirecionamento de Produto</a>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>

    <script>
        document.getElementById('formEditarDados').addEventListener('submit', function(event) {
            
            event.preventDefault(); // Impedir o envio padrão do formulário
            console.log('Estou funcionando...');

            // var spinnerRedirecionar = document.getElementById('spinnerRedirecionar');
            //     spinnerRedirecionar.style.display = "block";

            // var mensagemSucesso = document.getElementById('mensagemSucesso');

            // Pegar os dados vindo do formulário
            var nomCompleto = document.getElementById('nomeCompleto').value;
            var contacto = document.getElementById('contacto').value;
            var diaNascimento = document.getElementById('diaNascimento').value;
            var mesNascimento = document.getElementById('mesNascimento').value;
            var anoNascimento = document.getElementById('anoNascimento').value;
            var cidade = document.getElementById('cidade').value;             
            var bairro = document.getElementById('bairro').value;             
            var pais = document.getElementById('pais').value;             
            
            var user_id =  document.getElementById('user_id').value;
            
            const cliente = {
                pais:pais,
                id: user_id,
                bairro:bairro,
                cidade:cidade,
                contacto:contacto,
                nome: nomeCompleto,
                diaNascimento:diaNascimento,
                anoNascimento:anoNascimento,
                mesNascimento: mesNascimento,
            };

            

        const dadosAtualizados = atualizarDados(cliente);

        dadosAtualizados.then(
            dados=>{
                console.log(dados);
            }
        );

        // alert(cliente.id);

        async function atualizarDados(cliente){
            const response = await fetch('http://localhost:8000/api/userAtualizar',
            {
                method:'POST',
                headers: {
                    'Accept': 'application/json'
                },
                body:JSON.stringify(cliente)
            });
            const dados = await response.json();
            return dados;
            }


            // fetch('http://localhost:8000/api/userAtualizar', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',
            //     },
            //     body: JSON.stringify(cliente),
            // })
            // .then(response => {
            //     if (!response.ok) {
            //         throw new Error('Erro ao salvar os dados:' + response);
            //     }
            //     return response.json();
            // })
            // .then(data => {
            //     console.log(data);
            // })
            // .catch(error => {
            //     console.error(error);
            // });
            
            

        });
    </script>

</div>
    


@endsection

@section('footer')
    @include('layout.componentes.footer')
@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush

