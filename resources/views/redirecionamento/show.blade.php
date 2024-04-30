@extends('layout.container.app')

@section('titulo', 'Estado redirecionamento')

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
                                        
                                        @if (isset($redirecionamento->id))
                                        
                                                @if($redirecionamento->estado == '0')
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
                                            
                                                @elseif($redirecionamento->estado == '1')
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
                                                    @if (isset($redirecionamento->id))
                                                        
                                                    <ul class="list-group">
                                                        <li class="list-group-item">Valor pago: <span class="text-dark">{{ $redirecionamento->valor }} €</span> </li>
                                                        <li class="list-group-item">País de origem do produto: <span class="text-dark">{{ $redirecionamento->paisOrigem }}</span> </li>
                                                        <li class="list-group-item">Data de destino do produto: <span class="text-dark">{{ $redirecionamento->paisDestino }}</span> </li>
                                                        <li class="list-group-item">Data do redirecionamento: <span class="text-dark">{{ $redirecionamento->data }}</span> </li>
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
                                        <div class="card-header rounded-0 bg-primary">
                                            <h5 class="mb-0">
                                                <a href="#collapse4-3" class="btn-block  text-center text-white acd-heading collapsed" data-toggle="collapse">Sem documentos para ser exibido</a>
                                            </h5>
                                        </div>
                                        <div id="collapse4-3" class="collapse" data-parent="#accordionborderradius">
                                            <div class="card-body">
                                                <p>
                                                    Nesta seção não encorporamos nenhum documento adicional, como foto cópia do
                                                    B.I ou o passport
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade pt-20" id="CSS3" role="tabpanel">
                                <div class="accordion" id="accordionsimple1">
                                    <div class="mb-2 acd-group">
                                        <div class="card-header bg-primary rounded-0">
                                            <h5 class="mb-0">
                                                <a href="#CSS31" class="btn-block text-white text-left acd-heading" data-toggle="collapse">1. Quick Response Time</a>
                                            </h5>
                                        </div>
                                        <div id="CSS31" class="collapse show" data-parent="#accordionsimple1">
                                            <div class="card-body">
                                                <p>Motivation cannot be an external force, it must
                                                    come from within as the natural product of your
                                                    desire to achieve something and your belief
                                                    that you are capable to succeed at your goal.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2 acd-group">
                                        <div class="card-header rounded-0 bg-primary">
                                            <h5 class="mb-0">
                                                <a href="#CSS32" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">2. Experienced
                                                    Professionals</a>
                                            </h5>
                                        </div>
                                        <div id="CSS32" class="collapse" data-parent="#accordionsimple1">
                                            <div class="card-body">
                                                <p>There are many people in the world with amazing
                                                    talents who realize only a small percentage of
                                                    their potential. We all know people who live
                                                    this truth.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="acd-group border-bottom-0">
                                        <div class="card-header rounded-0 bg-primary">
                                            <h5 class="mb-0">
                                                <a href="#CSS33" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">3. Maximum Query Solved</a>
                                            </h5>
                                        </div>
                                        <div id="CSS33" class="collapse" data-parent="#accordionsimple1">
                                            <div class="card-body">
                                                <p>Text of the printin a galley of type and bled it
                                                    to a type specimen book. It has survived not
                                                    only five centuries make Lorem Ipsum is simply
                                                    dummy.Success isn’t really that difficult.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade pt-20" id="HTML5" role="tabpanel">
                                <div class="accordion" id="accordionsimple2">
                                    <div class="mb-2 acd-group">
                                        <div class="card-header bg-primary rounded-0">
                                            <h5 class="mb-0">
                                                <a href="#HTML51" class="btn-block text-left text-white acd-heading" data-toggle="collapse">1. Making the decision</a>
                                            </h5>
                                        </div>
                                        <div id="HTML51" class="collapse show" data-parent="#accordionsimple2">
                                            <div class="card-body">
                                                <p>
                                                    We also know those epic stories, those
                                                    modern-day legends surrounding the early
                                                    failures of such supremely successful folks as
                                                    Michael Jordan and Bill Gates. We can look a
                                                    bit further back in time to Albert Einstein or
                                                    even further back to Abraham Lincoln.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2 acd-group">
                                        <div class="card-header rounded-0 bg-primary">
                                            <h5 class="mb-0">
                                                <a href="#HTML52" class="btn-block text-left text-white acd-heading collapsed" data-toggle="collapse">2. Developing the Vision</a>
                                            </h5>
                                        </div>
                                        <div id="HTML52" class="collapse" data-parent="#accordionsimple2">
                                            <div class="card-body">
                                                <p>
                                                    Positive pleasure-oriented goals are much more
                                                    powerful motivators than negative fear-based
                                                    ones. Although each is successful separately,
                                                    the right combination of both is the most
                                                    powerful motivational force known to humankind.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acd-group border-bottom-0">
                                        <div class="card-header rounded-0 bg-primary">
                                            <h5 class="mb-0">
                                                <a href="#HTML53" class="btn-block  text-left text-white acd-heading collapsed" data-toggle="collapse">3. Taking Action</a>
                                            </h5>
                                        </div>
                                        <div id="HTML53" class="collapse" data-parent="#accordionsimple2">
                                            <div class="card-body">
                                                <p>The first thing to remember about success is
                                                    that it is a process – nothing more, nothing
                                                    less. There is really no magic to it and it’s
                                                    not reserved only for a select few people. As
                                                    such, success really has nothing to do with
                                                    luck, coincidence or fate. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade pt-20" id="jquery" role="tabpanel">
                                <div class="accordion" id="accordionfillborde3">
                                    <div class="mb-2 acd-group">
                                        <div class="card-header bg-primary rounded-0">
                                            <h5 class="mb-0">
                                                <a href="#jquery1" class="btn-block text-white text-left acd-heading" data-toggle="collapse">1. Many Style Available</a>
                                            </h5>
                                        </div>
                                        <div id="jquery1" class="collapse show" data-parent="#accordionfillborde3">
                                            <div class="card-body">
                                                <p>The sad thing is the majority of people have no
                                                    clue about what they truly want. They have no
                                                    clarity. When asked the question, responses
                                                    will be superficial at best, and at worst, will
                                                    be what someone else wants for them.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2 acd-group">
                                        <div class="card-header bg-primary rounded-0">
                                            <h5 class="mb-0">
                                                <a href="#jquery2" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">2. Parallax Sections</a>
                                            </h5>
                                        </div>
                                        <div id="jquery2" class="collapse" data-parent="#accordionfillborde3">
                                            <div class="card-body">
                                                <p>The best way is to develop and follow a plan.
                                                    Start with your goals in mind and then work
                                                    backwards to develop the plan. What steps are
                                                    required to get you to the goals? Make the plan
                                                    as detailed as possible. Try to visualize and
                                                    then plan for, every possible setback.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acd-group border-bottom-0">
                                        <div class="card-header bg-primary rounded-0">
                                            <h5 class="mb-0">
                                                <a href="#jquery3" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">3. Unlimited layouts</a>
                                            </h5>
                                        </div>
                                        <div id="jquery3" class="collapse" data-parent="#accordionfillborde3">
                                            <div class="card-body">
                                                <p>Commit the plan to paper and then keep it with
                                                    you at all times. Review it regularly and
                                                    ensure that every step takes you closer to your
                                                    Vision and Goals. If the plan doesn’t support
                                                    the vision then change it!</p>
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
