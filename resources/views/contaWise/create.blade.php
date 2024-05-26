@extends('layout.container.app')

@section('titulo', 'Abertura de conta wise')

@push('styles')

    {{-- Inclusão do Bootstrap 5 no projecto --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/pluto/css/bootstrap.min.css')}}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{asset('assets/pluto/style.css')}}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('assets/pluto/css/responsive.css')}}" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/pluto/css/bootstrap-select.css')}}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{asset('assets/pluto/css/perfect-scrollbar.css')}}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/pluto/css/custom.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />
        {{-- Font e Icones alternativa --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/themify-icons/themify-icons.css') }}">
@endpush


@section('header')
    @include('layout.componentes.topbar')
@endsection

@section('dashboard')
    @include('layout.componentes.dash')
@endsection

@section("corpo")

<div class="row" style="margin-top:20px">
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
                            Abertura de conta
                        </li>
                    </ol>
                </nav>
            </div>

            @include('layout.componentes.cabecalho_2')

        </div>

    <div class="row mt-2">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="card card-statistics" style="width:500px">
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
                            <label for="tipo" class="text-dark">Seleciona o tipo de conta</label>
                            <select class="form-control" id="tipo" name="tipo">
                                <option value="wise">Wise</option>
                                <option value="Resolut">Resolut</option>
                                <option value="N26">N26</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="data" class="text-dark">Dada de emissão</label>
                            <input type="date" class="form-control" id="data" name="data" value="{{ date('Y-m-d') }}">
                        </div>

                        <div class="form-group">
                            <label for="valorconta" class="text-dark">Valor</label>
                            <input type="number" class="form-control" id="valorconta" value="{{$sistema->precoConta}}" readonly>
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


                        <button type="submit" class="btn btn-primary mt-3">Enviar Pedido</button>
                    </form>
                </div>

            </div>
        </div>


    </div>

    </div>
</div>



@endsection

@section('footer')
    @include('layout.componentes.footer')
@endsection

@push('scripts')
<script src="{{asset('assets/pluto/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/popper.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/meu.js')}}"></script>
@endpush
