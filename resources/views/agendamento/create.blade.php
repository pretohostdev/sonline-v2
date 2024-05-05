@extends('layout.container.app')

@section('titulo', 'Agendamento de serviços')

@push('styles')

    {{-- Inclusão do Bootstrap 5 no projecto --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                            Agendamento de serviços
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

                    <form action="{{route('agendamento.store')}}" method="POST" id="formAgendamento">
                        @csrf
                        <div class="form-group">
                            <label for="tipo">Seleciona o tipo de agendamento</label>
                            <select type="da" class="form-control" id="tipo" name="tipo">
                                <option value="consultoria">Consultoria</option>
                                <option value="autenticarDocumento">Autenticação de documento na VFS</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="data">Data do agendamento</label>
                            <input type="date" class="form-control" value="{{date('Y-m-d')}}" id="data" name="data">
                        </div>

                        <div class="form-group">
                            <label for="observacao">Observação</label>
                            <textarea type="text" class="form-control" name="observacao"></textarea>
                        </div>

                        

                        <button type="submit" class="btn bg-gradient text-light">Enviar Pedido</button>
                    </form>
                </div>

            </div>
        </div>


        {{-- <div class="col-xl-5">

        </div> --}}


        

    </div>
    </div>

   
</div>



@endsection

@section('footer')
    @include('layout.componentes.footer')
@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush
