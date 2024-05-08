@extends('layout.container.app')

@section('titulo', 'Abertura de conta wise')

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
                            Abertura de conta wise
                        </li>
                    </ol>
                </nav>
            </div>

            @include('layout.componentes.cabecalho_2')

        </div>

    <div class="row mt-2">
        <div class="col-xl-7">
            <div class="card card-statistics">
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

                    <form action="{{ route('contaWise.store') }}" method="POST" id="formConta" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="data">Dada de emissão</label>
                            <input type="date" class="form-control" id="data" name="data" value="{{ date('Y-m-d') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Valor</label>
                            <input type="number" class="form-control" value="{{$sistema->precoContaWise}}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Referencia Bancária</label>
                            <input type="text" class="form-control" value="{{$sistema->iban}}" id="iban" readonly>
                        </div>

                        <div class="form-group">
                            <label for="comprovativo">Comprovativo Bancário em pdf</label>
                            <input type="file" class="form-control" name="comprovativo">
                        </div>


                        <button type="submit" class="btn bg-gradient text-light mt-3">Enviar Pedido</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-xl-5">

                {{-- Imagem --}}

        </div>


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
