@extends('layout.container.app')

@section('titulo', 'Redirecionamento de Produtos')

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
                            Redirecionamento de produto
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
                            <label for="nomeProduto">Nome do produto</label>
                            <input type="text" class="form-control" value="" id="nomeProduto" required>
                        </div>

                        <div class="form-group">
                            <label for="paisOrigem">País de origem</label>
                            <select type="da" class="form-control" id="paisOrigem">
                                <option value="Portugal">Portugal</option>
                                <option value="Angola">Angola</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="paisDestino">País de destino</label>
                            <select type="da" class="form-control" id="paisDestino">
                                <option value="Angola">Angola</option>
                                <option value="Portugal">Portugal</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="metodoEnvio">Método de envio</label>
                            <select class="form-control" id="metodoEnvio">
                                <option value="DHL">DHL</option>
                                <option value="CTT">CTT</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="peso">Peso <span style="color:#ddd; font-size:8pt">(em grama)</span></label>
                            <input type="number" class="form-control" value="" id="peso" required>
                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control" value="{{$user_id}}" id="user_id">
                        </div>

                        <div class="form-group">
                            <label for="descricao">Descrição do produto</label>
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
                                <span class="input-group-text bg-primary text-light" id="tipoEnvio">
                                    {{-- Preenchimento automático --}}
                                </span>
                            </div>
                            <input type="text" class="form-control" id="pesoBase" readonly>
                        </div>

                          <div class="input-group mb-3" id="divDolarRedirecionamento">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-light">Valor</span>
                            </div>
                            <input type="text" class="form-control" id="valorConvertido" oninput="conversaoMoeda(id)" readonly>
                          </div>


                          <div class="input-group mb-3" id="divTaxaServico">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-light">Taxa de Serviço</span>
                            </div>
                            <input type="text" class="form-control" id="inputTaxaServico" value="2,99€" readonly>
                          </div>

                          <div class="input-group mb-3" id="divTaxaArmazenamento">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-light">Taxa de armazenamento</span>
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
        document.getElementById('formRedirecionamento').addEventListener('submit', function(event) {
            
            event.preventDefault(); // Impedir o envio padrão do formulário
            console.log('Estou funcionando...');

            var spinnerRedirecionar = document.getElementById('spinnerRedirecionar');
                spinnerRedirecionar.style.display = "block";

            var mensagemSucesso = document.getElementById('mensagemSucesso');

            // Pegar os dados vindo do formulário
            var nomeProduto = document.getElementById('nomeProduto').value;
            var paisOrigem = document.getElementById('paisOrigem').value;
            var paisDestino = document.getElementById('paisDestino').value;
            var descricao = document.getElementById('descricao').value;
            var user_id =  document.getElementById('user_id').value;

            var valorRedirecionemto = valorConvertido.value.replace('€', '');


            const redirecionamento = {
                nomeProduto: nomeProduto,
                paisOrigem:paisOrigem,
                paisDestino:paisDestino,
                valor: valorRedirecionemto,
                descricao:descricao,
                user_id: user_id,
            };

            fetch('http://localhost:8000/api/redirecionamento', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(redirecionamento),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro ao salvar os dados');
                }
                return response.json();
            })
            .then(data => {
                if(data.cadastrado == 'true'){
                    spinnerRedirecionar.style.display = "none";
                    mensagemSucesso.style.display = "block";
                }else{
                    console.log('Não cadastrado');
                }
            })
            .catch(error => {
                console.error(error);
            });

        });

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
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    {{-- <script src="{{asset('assets/js/funcoes.js')}}"></script> --}}
@endpush
