@extends('layout.container.app')

@section('titulo', 'Estado Solicitação de visto')

@push('styles')

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    
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

    {{-- Inclusão do Bootstrap 5 no projecto --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                            Estado do redirecionamento
                        </li>
                    </ol>
                </nav>
            </div>

            @include('layout.componentes.cabecalho_2')

        </div>

    <div class="row">

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
                                <a class="nav-link" id="result-tab" data-toggle="tab" href="#result" role="tab" aria-controls="result" aria-selected="false"> Documentos
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show pt-20 active" id="estado" role="tabpanel">
                                <div class="accordion" id="accordionsimplefill">
                                    <div class="mb-2 acd-group">
                                        
                                        @if (isset($visto->estado))
                                            
                                            @if($visto->estado == '0')
                                                <div class="card-header bg-primary rounded-0">
                                                    <h5 class="mb-0">
                                                        <a href="#collapse" class="btn-block text-white text-center acd-heading" data-toggle="collapse">Pendente</a>
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
                                            
                                            @elseif($visto->estado == '1')
                                                <div class="card-header bg-success rounded-0">
                                                    <h5 class="mb-0">
                                                        <a href="#collapse" class="btn-block text-white text-center acd-heading" data-toggle="collapse">Confirmado</a>
                                                    </h5>
                                                </div>

                                                <div id="collapse" class="collapse show" data-parent="#accordionsimplefill">
                                                    <div class="card-body">
                                                        <p>
                                                            O estado <span class="text-dark">confirmado</span> significa que o seu pedido já foi analizado pela nossa equipa
                                                        e confirmou a verecidade dos seus dados. Em breve lhe mandaremos uma mensagem de email, confirmando a sua operação.
                                                        </p>

                                                    </div>
                                                </div>
                                            @elseif ($visto->estado == '2')
                                                <div class="card-header bg-danger rounded-0">
                                                    <h5 class="mb-0">
                                                        <a href="#collapse" class="btn-block text-white text-center acd-heading" data-toggle="collapse">Cancelado</a>
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
                                                    @if (isset($visto->id) && ($visto->id !== ''))
                                                        <ul class="list-group">
                                                            <li class="list-group-item">Tipo de visto: <span class="text-dark">{{ $visto->tipo }}</span> </li>
                                                            <li class="list-group-item">País desejado: <span class="text-dark">{{ $visto->paisDesejado }}</span> </li>
                                                            <li class="list-group-item">Data prevista para a viagem: <span class="text-dark">{{ $visto->dataPrevista }}</span> </li>
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
                                                            <th scope="col">Tipo de visto</th>
                                                            <th scope="col">Data solicitação</th>
                                                            <th scope="col">Data prevista</th>
                                                            <th scope="col">País Desejado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($visto->listaSolicitacaoVistos as $v)
                                                        <tr>
                                                            <td>{{ $v->tipo }}</td>
                                                            <td>{{ $v->dataSolicitacao  }}</td>
                                                            <td>{{ $v->dataPrevista }}</td>
                                                            <td>{{ $v->paisDesejado }}</td>
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
                                           
                                            @if ($visto->documento)
                                                <div class="row d-flex justify-content-center">
                                                    <h5>Documento Pessoal (B.I ou Passport)</h4>
                                                </div>
                                                <div class="card-header rounded-0 d-flex justify-content-center">
                                                    <iframe src="{{ url("storage/{$visto->documento}") }}" width="80%" height="700px"></iframe>
                                                </div>
                                            @endif

                                            @if ($visto->comprovativo)
                                                    <div class="row d-flex justify-content-center mt-2">
                                                        <h5>Comprovativo do Pagamento</h4>
                                                    </div>
                                                    <div class="card-header rounded-0 d-flex justify-content-center">
                                                        <iframe src="{{ url("storage/{$visto->comprovativo}") }}" width="80%" height="700px"></iframe>
                                                    </div>
                                                @endif
                                        </div>
                                        <div id="collapse4-3" class="collapse" data-parent="#accordionborderradius">
                                            <div class="card-body">
                                                
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


    </div>
</div>



@endsection

@section('footer')
    @include('layout.componentes.footer')
@endsection

@push('scripts')
    {{-- <script src="{{asset('assets/js/funcoes.js')}}"></script> --}}
    <script src="{{asset('assets/pluto/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/pluto/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/pluto/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/pluto/js/meu.js')}}"></script>
@endpush
