@extends('layout.container.app')

@section('titulo', 'Agendamento de Visto')

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
                            Agendamento de visto
                        </li>
                    </ol>
                </nav>
            </div>
            
            @include('layout.componentes.cabecalho_2')

        </div>

    <div class="row mt-2">

        <div class="col-xl-6">
            <div class="card card-statistics rounded">
                <div class="card-body">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-light">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{route('visto.store')}}" method="POST" id="formVisto" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tipovisto" class="text-dark">Selecione o tipo de visto</label>
                            <select class="form-control" id="tipovisto" name="tipoVisto">
                                <option value="Turismo">Turismo</option>
                                <option value="Estuante">Estudante</option>
                                <option value="Trablho">Trabalho</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="paises" class="text-dark">Selecione o país a ser visitado</label>
                            <select class="form-control" id="paises" name="pais">
                                <option value="angola" selected>Angola</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="data" class="text-dark">Data de Agendamento</label>
                            <input type="text" class="form-control" value="{{date('Y-m-d')}}" id="dataSolicitacao" name="dataSolicitacao">
                        </div>

                        <div class="form-group">
                            <label for="data" class="text-dark">Data prevista da viagem</label>
                            <input type="date" class="form-control" value="{{old('data')}}" id="data" name="data">
                        </div>

                        <div class="form-group">
                            <label for="documento" class="text-dark">Cópia do B.I ou Passport</label>
                            <img src="{{asset('assets/img/pdf.png')}}" style="height:30px;" alt="arquivo pdf">
                            <input type="file" class="form-control mt-2" id="documento" name="documento">
                        </div>

                        <div class="form-group">
                            <label for="data" class="text-dark">Valor a pagar</label>
                            <input type="text" class="form-control" value="{{$sistema->precoAgendamentoVisto}} kz" id="data" name="precoVisto" readonly>
                        </div>

                        <div class="form-group">
                            <label for="referenciabancaria" class="text-dark">Referencia Bancária</label>
                            <input type="text" class="form-control" id="referenciabancaria" value="{{$sistema->iban}}" id="iban" readonly>
                        </div>

                        <div class="form-group">
                            <label for="comprovativo" class="text-dark">Comprovativo Bancário em pdf</label>
                            <img src="{{asset('assets/img/pdf.png')}}" style="height:30px;">
                            <input type="file" class="form-control mt-2" name="comprovativo" id="comprovativo">
                        </div>

                    
                        <div class="form-group mt-2">
                            <label for="descricao" class="text-dark">Outras informações relevantes ou solicitações especiais</label>
                            <textarea class="form-control" id="descricao" name="descricao"></textarea>
                        </div>
                       

                        <button type="submit" class="btn bg-gradient text-light">Enviar pedido</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            <img src="{{asset('assets/img/agendamento.png')}}" alt="agendamento">
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
