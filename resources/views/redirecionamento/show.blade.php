@extends('layout.container.app')

@section('titulo', 'Estado redirecionamento')

@push('styles')

    {{-- Inclusão do Bootstrap 5 no projecto --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}">
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
                            Estado do redirecionamento
                        </li>
                    </ol>
                </nav>
            </div>

            @include('layout.componentes.cabecalho_2')

        </div>

    <div class="row mt-2">

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card card-statistics faq-contant p-0 p-sm-4">
                <div class="card-body">
                    <div class="tab nav-center">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="estado-tab" data-toggle="tab" href="#estado" role="tab" aria-controls="estado" aria-selected="true"> Estado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="dados-tab" data-toggle="tab" href="#dados" role="tab" aria-controls="dados" aria-selected="false"> Dados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="historial-tab" data-toggle="tab" href="#historial" role="tab" aria-controls="historial" aria-selected="false">
                                    Histórico </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="result-tab" data-toggle="tab" href="#result" role="tab" aria-controls="result" aria-selected="false"> Comprovativo
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show pt-20 active" id="estado" role="tabpanel">
                                <div class="accordion" id="accordionsimplefill">
                                    <div class="mb-2 acd-group">
                                        
                                        @if (isset($redirecionamento->id))
                                        
                                                @if($redirecionamento->estado == '0')
                                                    <div class="card-header bg-primary rounded-0">
                                                        <h5 class="mb-0">
                                                            <a href="#collapse" class="btn-block text-white text-center acd-heading" data-toggle="collapse">PENDENTE</a>
                                                        </h5>
                                                    </div>

                                                    <div id="collapse" class="collapse show" data-parent="#accordionsimplefill">
                                                        <div class="card-body">
                                                            <p>
                                                                O estado <span class="text-dark">pendente</span>  significa que o seu pedido está sendo analizado pela nossa equipa
                                                                para confirmar a verecidade dos dados. Esperamos que essa verificação ocorra o mais
                                                                rápido possível para podermos atendê-lo logo.
                                                            </p>

                                                        </div>
                                                    </div>
                                            
                                                @elseif($redirecionamento->estado == '1')
                                                    <div class="card-header bg-success rounded-0">
                                                        <h5 class="mb-0">
                                                            <a href="#collapse" class="btn-block text-white text-center acd-heading" data-toggle="collapse">CONFIRMADO</a>
                                                        </h5>
                                                    </div>

                                                    <div id="collapse" class="collapse show" data-parent="#accordionsimplefill">
                                                        <div class="card-body">
                                                            <p>
                                                                O estado <span class="text-dark">confirmado</span> significa que o seu pedido já foi analizado pela nossa equipa
                                                                e confirmou a verecidade dos seus dados.
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-start" style="background:#F8F8FF">
                                                            <div class="col-12 mb-3 p-2">
                                                                <span>Processo em curso</span><b class="float-right">80%</b>
                                                                <div class="progress my-2" style="height: 5px;">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row p-2 d-flex justify-content-center" style="">
                                                            <div class="col-12 col-md-4 p-2 bg-dark m-0 rounded">
                                                                <div class="col-12">
                                                                    <span class="text-light"> <strong>Informações do nosso endereço</strong></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    Nome: Muanda Mateus BTCAAQB
                                                                </div>
                                                                <div class="col-12">
                                                                    Rua: Rua da Guarda,  N. 718
                                                                </div>
                                                                <div class="col-12">
                                                                    Código-postal:4458-00
                                                                </div>
                                                                <div class="col-12">
                                                                    Localidade: PERAFITA
                                                                </div>
                                                                <div class="col-12">
                                                                    Distrito:Porto
                                                                </div>
                                                                <div class="col-12">
                                                                    País : Portugal
                                                                </div>
                                                                <div class="col-12">
                                                                    Contacto: +351 936 557 046
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <form>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="endereco" class="form-label">Endereço de entrega</label>
                                                                        <input type="text" class="form-control" id="endereco" placeholder="Província, Município, Bairro, Rua, Número da casa..." required>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <input type="hidden" class="form-control" value="{{ $redirecionamento->id }}" id="idRedirecionamento">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>

                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-10 text-center">
                                                                <button class="btn btn-dark" onclick="enviarEndereco()">Enviar Endereco</button>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 text-center mt-2" id="spinnerEnviarEndereco">
                                                            <div class="spinner-border text-dark " role="status">
                                                                <span class="visually-hidden">Loading...</span>
                                                            </div>
                                                        </div>

                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-6 mb-2 mt-2" id="atualizarEnderecoSucessoDiv">
                                                                <div class="alert alert-success text-center" role="alert">
                                                                    Endereço enviado com sucesso!
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-6 mb-2 mt-3" id="atualizarEnderecoErroDiv">
                                                                <div class="alert alert-danger text-center" role="alert">
                                                                    Endereço enviado com sucesso!
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @elseif($redirecionamento->estado == '2')
                                                    <div class="card-header bg-danger rounded-0">
                                                        <h5 class="mb-0">
                                                            <a href="#collapse" class="btn-block text-white text-center acd-heading" data-toggle="collapse">CANCELADO</a>
                                                        </h5>
                                                    </div>

                                                    <div id="collapse" class="collapse show" data-parent="#accordionsimplefill">
                                                        <div class="card-body">
                                                            <p>
                                                                O estado <span class="text-dark">cancelado</span> significa que o seu pedido já foi analizado pela nossa equipa
                                                                e não conseguiu confirmar a verecidade dos seus dados. Desejamos que reveja seus dados e envia-nos no.
                                                            </p>

                                                        </div>
                                                    </div>
                                                @endif

                                        @endif

                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade pt-20" id="dados" role="tabpanel">
                                <div class="accordion" id="accordionsimpleborder">
                                    <div class="mb-2 acd-group">
                                       
                                        <div id="collapse01" class="collapse show" data-parent="#accordionsimpleborder">
                                            <div class="card-body d-flex justify-content-center">

                                                <div class="col-lg-6">
                                                    @if (isset($redirecionamento->id) && ($redirecionamento->id!== ''))
                                                        
                                                    <ul class="list-group">
                                                        <li class="list-group-item text-dark">Produto: <strong>{{ $redirecionamento->produto }}</strong></li>
                                                        <li class="list-group-item text-dark">Valor a pagar: <strong>{{ $redirecionamento->total }}€</strong></li>
                                                        <li class="list-group-item text-dark">País de origem do produto: <strong>{{ $redirecionamento->paisOrigem }}</strong></strong> </li>
                                                        <li class="list-group-item text-dark">Data de destino do produto: <strong>{{ $redirecionamento->paisDestino }}</strong></li>
                                                        <li class="list-group-item text-dark">Data do redirecionamento:<strong>{{ $redirecionamento->data }}</strong></li>
                                                    </ul>

                                                    @endif
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade pt-20" id="historial" role="tabpanel">
                                <div class="accordion" id="accordionfillborderradius">
                                    <div class="mb-2 acd-group">

                                        <div class="card-body">

                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead class="bg-secondary">
                                                        <tr style="color:white">
                                                            <th scope="col">Produto</th>
                                                            <th scope="col">Data</th>
                                                            <th scope="col">País de origem</th>
                                                            <th scope="col">País de destino</th>
                                                            <th scope="col">Valor</th>
                                                            <th scope="col">Estado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($redirecionamento->listaRedirecionamentos as $red)
                                                        <tr>
                                                            <td>{{ $red->produto->nome }}</td>
                                                            <td>{{ $red->data }}</td>
                                                            <td>{{ $red->paisOrigem  }}</td>
                                                            <td>{{ $red->paisDestino }}</td>
                                                            <td>{{ $red->valor }}</td>
                                                            <td>{{ $red->estado }}</td>
                                                        </tr>
                                                        @endforeach
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
    
                                        </div>

                                    </div>

                                </div>
                            </div>


                            <div class="tab-pane fade pt-20" id="result" role="tabpanel">
                                <div class="accordion" id="accordionborderradius">

                                    <div class="acd-group border-bottom-0">
                                        <div class="card-header rounded-0">
                                            @if ($redirecionamento->comprovativo)
                                                <div class="card-header rounded-0 d-flex justify-content-center">
                                                    <iframe src="{{ url("storage/{$redirecionamento->comprovativo}") }}" width="80%" height="700px"></iframe>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    
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
        function enviarEndereco(){
            var idRedirecionamento = document.getElementById('idRedirecionamento').value;
            var endereco = document.getElementById('endereco').value;
            var atualizarEnderecoSucessoDiv = document.getElementById('atualizarEnderecoSucessoDiv');
            var atualizarEnderecoErroDiv = document.getElementById('atualizarEnderecoErroDiv');

            hide(atualizarEnderecoSucessoDiv)
            hide(atualizarEnderecoErroDiv)
            
            var novoEndereco ={
                id:idRedirecionamento,
                endereco:endereco
            }
            var atualizacao = updateAdress(novoEndereco);

            atualizacao.then(
                estado=>{
                        if(estado == true){
                            show(atualizarEnderecoSucessoDiv);
                            hide(spinnerEnviarEndereco);
                        }
                        else{
                            show(atualizarEnderecoErroDiv);
                            hide(spinnerEnviarEndereco);
                        }
                }
            )

            async function updateAdress(entrega){
                show(spinnerEnviarEndereco)
                const response = await fetch('http://localhost:8000/api/updateEnderecoEntrega/',
                {
                    method:'POST',
                    headers: {
                        'Accept': 'application/json'
                    },
                    body:JSON.stringify(entrega),
                });
                const estado = await response.json();
                return estado;
            }

            function hide(elemento){
                elemento.style.display = "none";
            }

            function show(elemento){
                elemento.style.display = "block";
            }
        }
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
