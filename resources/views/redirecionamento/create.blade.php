@extends('layout.container.app')

@section('titulo', 'Redirecionamento de Produtos')

@push('styles')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />
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
    <!-- color css -->
    <link rel="stylesheet" href="{{asset('assets/pluto/css/color_2.css')}}" />

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
                            Redirecionamento de produto
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
                    
                    <form action="{{route('redirecionamento.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group"> 
                            <label for="nomeProduto" class="text-dark">Nome do produto</label>
                            <input type="text" class="form-control" value="" id="nomeProduto" name="nome" required>
                        </div>

                        <div class="form-group">
                            <label for="paisOrigem" class="text-dark">País de origem</label>
                            <select class="form-control" id="paisOrigem" name="paisorigem">
                                <option value="Portugal">Portugal</option>
                                <option value="Angola">Angola</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="paisDestino" class="text-dark">País de destino</label>
                            <select type="da" class="form-control" id="paisDestino" name="paisdestino">
                                <option value="Angola">Angola</option>
                                <option value="Portugal">Portugal</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="metodoEnvio" class="text-dark">Método de envio</label>
                            <select class="form-control" id="metodoEnvio">
                                <option value="DHL">DHL</option>
                                <option value="CTT">CTT</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="peso" class="text-dark">Peso <span style="font-size:8pt">(em grama)</span></label>
                            <input type="number" class="form-control" value="" id="peso" required>
                        </div>

                        <div class="input-group mb-3" id="divDolarRedirecionamento">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-secondary text-light">Valor a pagar</span>
                            </div>
                            <input type="text" class="form-control" id="valorConvertido" name="valor" oninput="conversaoMoeda(id)" readonly>
                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control" value="{{$user_id}}" id="user_id" name="userId">
                        </div>

                        <div class="form-group">
                            <label for="peso" class="text-dark">Realizar de pagameno <span style="font-size:8pt"></span></label>
                            <a href="https://checkout.revolut.com/pay/18d1f014-ff1c-4999-9d68-b13617a96d44" class="btn btn-block btn-info" target="_blank">Pagar</a>
                        </div>

                        <div class="form-group">
                            <label for="comprovativo" class="text-dark">Comprovativo Bancário</label>
                            <img src="{{asset('assets/img/pdf.png')}}" style="height:30px;">
                            <input type="file" class="form-control mt-2" name="comprovativo">
                        </div>

                        <div class="form-group">
                            <label for="descricao" class="text-dark">Descrição do produto</label>
                            <textarea class="form-control" id="descricao" name="descricaoProduto" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Enviar pedido</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            
            <div class="card card-statistics rounded">
                <div class="card-header">
                    <div class="card-heading">
                        <h4 class="card-title">Conversão</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group mb-0">

                        <div class="input-group mb-3" id="divKwanzaRedirecionamento">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-secondary text-light" id="tipoEnvio">
                                </span>
                            </div>
                            <input type="text" class="form-control" id="pesoBase" readonly>
                        </div>


                          <div class="input-group mb-3" id="divTaxaServico">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-secondary text-light">Taxa de Serviço</span>
                            </div>
                            <input type="text" class="form-control" id="inputTaxaServico" value="2,99€" readonly>
                          </div>

                          <div class="input-group mb-3" id="divTaxaArmazenamento">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-secondary text-light">Taxa de armazenamento</span>
                            </div>
                            <input type="text" class="form-control" id="inputTaxaArmazenamento" value="4,99€" readonly>
                          </div>

                    </div>
                </div>

            </div>

        </div>


    </div>


    </div>

    <script>

        // Conversão relativo ao envio de mercadoria com base aos tipos de envio - HDL versus CCT
        var metodoEnvio = document.getElementById('metodoEnvio');
        var tipoEnvio = document.getElementById('tipoEnvio');

        var pesoBase = document.getElementById('pesoBase');

        var valorConvertido = document.getElementById('valorConvertido');

        var peso = document.getElementById('peso');

        if(metodoEnvio.value == "DHL"){
            tipoEnvio.innerHTML = "DHL";
            pesoBase.value = "1kg - 90€";
            valorConvertido.value = "0";
        }
        else{
            tipoEnvio.innerHTML = "CTT";
            pesoBase.value = "1kg - 40€";
            valorConvertido.value = "0";
        }

        metodoEnvio.addEventListener('change', function(){
            var opcaoSelecionada = this.value;

            if(opcaoSelecionada == "DHL"){
                tipoEnvio.innerHTML = "DHL";
                pesoBase.value = "1kg - 90€";
                valorConvertido.value = "0";
            }
            else{
                tipoEnvio.innerHTML = "CTT";
                pesoBase.value = "1kg - 40€";
                valorConvertido.value = "0";
            }
            
            
        });

        peso.addEventListener('input', function(){
            if(metodoEnvio.value == "DHL"){
                valorConvertido.value = (peso.value*90)/1000 + "€";
            }
            else{
                valorConvertido.value = (peso.value*40)/1000 + "€";
            }
        })

    </script>
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
