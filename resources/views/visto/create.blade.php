@extends('layout.container.app')

@section('titulo', 'Solicitação de Visto')

@push('styles')

    {{-- Inclusão do Bootstrap 4 no projecto --}}
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
                            Solicitação de visto
                        </li>
                    </ol>
                </nav>
            </div>
            
            @include('layout.componentes.cabecalho_2')

        </div>

    <div class="row">

        <div class="col-xl-6">
            <div class="card card-statistics rounded">
                <div class="card-body">
                    <form id="formRedirecionamento">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Selecione o tipo de visto</label>
                            <select class="form-control" id="pais">
                                <option value="Turismo">Turismo</option>
                                <option value="Estuante">Estudante</option>
                                <option value="Trablho">Trabalho</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="paises">Selecione o país a ser visitado</label>
                            <select class="form-control" id="paises">
                                <option value="angola" selected>Angola</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="peso">Data prevista da viagem</label>
                            <input type="date" class="form-control" value="" id="peso">
                        </div>

                        <label for="documento">Cópia do B.I ou Passport</label>
                        <div class="card-body bg-secondary rounded">
                            <input type="file" class="form-control-file" id="documento">
                        </div>

                    
                        <div class="form-group mt-2">
                            <label for="descricao">Outras informações relevantes ou solicitações especiais</label>
                            <textarea class="form-control" id="descricao" required></textarea>
                        </div>
                       

                        <button type="submit" class="btn btn-primary mt-3">Enviar pedido</button>
                    </form>
                </div>

                {{-- Spinner do cadastramento da solicitação de abertura de conta wise --}}
                <div class="d-flex justify-content-center">
                    <div class="spinner-border text-dark" role="status" id="spinnerRedirecionar">
                        <span class="sr-only">Loading...</span>
                      </div>
                </div>

                {{-- Mensagem de envio com sucesso --}}
                <div id="mensagemSucesso">
                    <div class="alert alert-info d-flex alert-dismissible fade show" role="alert">
                        Pedido de redirecionamento enviado com sucesso!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="ti ti-close"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            
            
        </div>


    </div>


    </div>

    <script>
        
        const selectPaises = document.getElementById('paises');

        async function paises(){
            const response = await fetch('https://restcountries.com/v3.1/all',
            {
                method:'get',
                headers: {
                    'Accept': 'application/json'
                }
            });
            const all = await response.json();
            return all;
        }

        const todosPaises = paises();

        todosPaises.then(
            all=>{
                    for (let i = 0; i < all.length; i++) {
                        const option = document.createElement("option");
                        option.value = all[i].name.common; // Valor da opção (pode ser diferente do texto de exibição)
                        option.text = all[i].name.common; // Texto de exibição da opção
                        selectPaises.appendChild(option);
                    }
            }
        )

    </script>
</div>



@endsection

@section('footer')
    @include('layout.componentes.footer')
@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    {{-- <script src="{{asset('assets/js/funcoes.js')}}"></script> --}}
@endpush
