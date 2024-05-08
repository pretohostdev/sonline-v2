@extends('layout.container.app')

@section('titulo', 'Estado Solicitação de moeda')

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
                            Estado moeda
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
                                        
                                        @if (isset($moeda->estado))
                                            
                                                @if($moeda->estado == '0')
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
                                            
                                            @elseif($moeda->estado == '1')
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
                                            @else
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
                                                    @if (isset($moeda->id) && ($moeda->id !== ''))
                                                        <ul class="list-group">
                                                            <li class="list-group-item">Nome da moeda: <span class="text-dark">{{ $moeda->nome }}</span> </li>
                                                            <li class="list-group-item">Data solicitação: <span class="text-dark">{{ $moeda->data }}</span> </li>
                                                            <li class="list-group-item">Montante: <span class="text-dark">{{ $moeda->montante }}</span> </li>
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
                                                            <th scope="col">Nome da moeda</th>
                                                            <th scope="col">Data de Solicitação</th>
                                                            <th scope="col">Montante</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($moeda->listaSolicitacoaMoedas as $m)
                                                        <tr>
                                                            <td>{{ $m->nome }}</td>
                                                            <td>{{ $m->data }}</td>
                                                            <td>{{ $m->montante }}</td>
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
                                            @if ($moeda->documento)
                                                <div class="card-header rounded-0 d-flex justify-content-center">
                                                    <iframe src="{{ url("storage/{$moeda->documento}") }}" width="80%" height="700px"></iframe>
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
        document.getElementById('formConta').addEventListener('submit', function(event) {
            
            event.preventDefault(); // Impedir o envio padrão do formulário
            console.log('Estou funcionando...');

            // Pegar os dados vindo do formulário
            var dataEmissao = document.getElementById('dataEmissaoConta').value;

            var comprovativo = document.getElementById('comprovativoBancario');

            console.log('Comprovativo: ' + comprovativo.value);

            // console.log('A data é: ' + data);
            const conta = {
                data: dataEmissao,
            };

            fetch('http://localhost:8000/api/conta', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(conta),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro ao salvar os dados');
                }
                return response.json();
            })
            .then(data => {
                console.log(data.message); // Mensagem de sucesso
            })
            .catch(error => {
                console.error(error);
            });

        });

    </script>
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
