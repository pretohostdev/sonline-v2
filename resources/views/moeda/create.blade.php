@extends('layout.container.app')

@section('titulo', 'Solicitação de moeda')

@push('styles')

    {{-- Inclusão do Bootstrap 5 no projecto --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />

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
                            Solicitação de moeda
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

                    <form action="{{route('moeda.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nomeMoeda" class="text-dark">Seleciona a moeda</label>
                            <select class="form-control" id="nomeMoeda" name="nome">
                                <option value="Dolar">Dolar</option>
                                <option value="Euro">Euro</option>
                                <option value="Kwanza">Kwanza</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="montante" class="text-dark">Montante</label>
                            <input type="number" class="form-control" name="montante" id="montante" oninput="conversaoMoeda(id)">
                        </div>

                        <div class="input-group mb-3" id="divValorPagar">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Valor a pagar</span>
                            </div>
                            <input type="text" class="form-control" id="valorPagar" name="valorPagar" readonly>
                        </div>

                        <div class="form-group">
                            <label for="referenciabancaria" class="text-dark">IBAN</label>
                            <input type="text" class="form-control" value="{{$sistema->iban}}" id="referenciabancaria" readonly>
                        </div>

                        <div class="form-group">
                            <label for="duracao" class="text-dark">Duração do envio do valor</label>
                            <input type="text" class="form-control" value="1-120 min" id="duracao" readonly>
                        </div>

                        <div class="form-group">
                            <label for="comprovativo" class="text-dark">Comprovativo Bancário</label>
                            <img src="{{asset('assets/img/pdf.png')}}" style="height:30px;">
                            <input type="file" class="form-control mt-2" id="comprovativo" name="documento">
                        </div>

                        <button type="submit" class="btn bg-gradient text-light mt-3">Enviar Pedido</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-lg-5">
            
            <div class="card card-statistics rounded">
                <div class="card-header">
                    <div class="card-heading">
                        <h5 class="card-title text-secondary text-center">CALCULADORA DE CONVERSÃO DE MOEDA</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group mb-0">

                        <div class="input-group mb-3" id="divKwanza">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-danger text-light">AOA</span>
                            </div>
                                <input type="text" class="form-control" id="inputKwanza" oninput="conversaoMoeda(id)">
                                <div class="spinner-border text-danger spinner-border-sm" role="status" id="spinnerInputKwanza">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                        </div>
                        

                        <div class="input-group mb-3" id="divDolar">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-gradient text-light">USD</span>
                            </div>
                            <input type="text" class="form-control" id="inputDolar" oninput="conversaoMoeda(id)">
                            <div class="spinner-border text-primary spinner-border-sm" role="status" id="spinnerInputDolar">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>

                          <div class="input-group mb-3" id="divEuro">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-light">EUR</span>
                            </div>
                            <input type="text" class="form-control" id="inputEuro" oninput="conversaoMoeda(id)">
                            <div class="spinner-border text-success spinner-border-sm" role="status" id="spinnerInputEuro">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>

                          <div class="input-group mb-3" id="divTaxaDolar">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Taxa do dolar</span>
                            </div>
                            <input type="text" class="form-control" value=" {{"1 USD - Câmbio +". $sistema->taxa." kz"}}"  id="taxaDolar" readonly>
                          </div>

                          <div class="input-group mb-3" id="divTaxaEuro">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Taxa do Euro</span>
                            </div>
                            <input type="text" class="form-control" value="{{"1 USD - Câmbio +". $sistema->taxa." kz"}}" readonly>
                          </div>

                          <input type="hidden" value="{{$sistema->taxa}}" id="taxa">

                    </div>
                </div>
                
            </div>
            <div>
                <p class="text-dark">
                    OBS: Se desejar entrar em contacto antes de efectuar o pagamento, poderá fazé-lo enviando uma mensagem
                    em: <span class="text-primary">sonlinesolucoes@gmail.com</span>
                </p> 
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
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/funcoes.js')}}"></script>
@endpush
