@extends('layout.container.app')

@section('titulo', 'Principal')

@push('styles')
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.jpg')}}">

    {{-- Font Awesome alternativa --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/awesome/css/font-awesome.css') }}">
@endpush


@section('header')
    @include('layout.componentes.header')
@endsection

@section('dashboard')
    @include('layout.componentes.dashboard')
@endsection

@section("corpo")

<div class="conteudo">
    {{-- <h1>Teste</h1> --}}
    <div style="width: 100px; height:50px; background-color:black">
        Tests
    </div>
    {{-- <div class="row mt bg-dark" style="margin-top: 90px">
        <div class="col-md-12">
            <div class="agendamento-header">
                <h4 class="text-dark m-0">AGENDAMENTO</h4>
            </div>
        </div>
        <div class="col-md-6">
          <div class="agendamento-img">
            <img  src="{{asset('assets/img/agendamento.png')}}" alt="Imagem de agendamento">
         </div>
        </div> --}}

        {{-- <div class="col-md-6 col-xxl-3"> --}}
            {{-- <div class="agendamento-content-header mt-2">
                <div class="card card-statistics h-10 mb-0 widget-income-list">
                    <div class="card-body d-flex align-itemes-center">
                        <div class="media align-items-center w-100">
                            <div class="text-left">
                                <h3 class="mb-0">3000 </h3>
                                <span>Total de Agendamento do mes em curso</span>
                            </div>
                            <div class="img-icon bg-info ml-auto">
                                <i class="fe fe-calendar text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="agendamento-content mt-2">
                <div class="alert alert-primary" role="alert">
                    <h4 class="text-white">Faça o seu agendamento!</h4>
                    <p class="text-white">Para fazer o seu agendamento de visto é necessário ter uma conta.
                        Caso não tenhas uma conta, basta clicares no botão abaixo com o título criar conta.
                        Caso já tenhas uma conta, podes clicar directamente no botão agendar.</p>
                    <a type="button" href="" class="btn btn-light">Criar conta</a>
                    <a type="button" href="" class="btn btn-light">Agendar Visto</a>
                </div>
             </div> --}}
        {{-- </div> --}}
    {{-- </div> --}}

    {{-- <div class="row mt-4 mb-4"> --}}
        {{-- <div class="col-md-12">
            <div class="solicita-header d-flex justify-content-end">
                <h4 class="text-light m-0" >SOLICITAÇÃO DE MOEDA</h4>
            </div>
        </div> --}}
    
    {{-- <div class="col-8">
        <div class="solicita-moeda d-flex justify-content-end">
            <div class="solita-moeda-content">
                <div class="d-flex justify-content-end">
                    <div class="w-70 solita-moeda-content-interno" >
                        <h4>Solicite moeda</h4>
                        <p class="text-justify">Oferecemos o serviço de solicitação de moeda estrangeira, com os melhores preços 
                            do mercado. Procuramos estar a par de todas atualizações do câmbio afim de trazê-lo
                            os preços mais justos possíveis, com o acréscimo de uma taxa que se adequa ao cenário
                            atual.
                        </p>
                        <p class="text-justify">Se já possui uma conta, então pode solicitar uma moeda estrangeira,
                            caso não, primeiro crie uma conta.
                        </p>
                        <a type="button" href="" class="btn btn-light mt-2">Criar conta</a>
                        <a type="button" href="" class="btn btn-light mt-2">Agendar Visto</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="col-4">
        <div class="solicita-moeda justify-content-center">
            <div class="solita-moeda-img">
                <img src="{{asset('assets/img/moeda.png')}}" alt="Solicitação de moedas">
            </div>
        </div>
    </div> --}}
    {{-- <div class="col">
    <div class="card-deck m-b-30">
        <div class="card">
            <img class="card-img-top" src="assets/img/widget/07.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Sobre Agência</h4>
                <p class="card-text">One of the main areas that I work on with my clients is shedding these non-supportive beliefs and replacing them with beliefs that will help them to accomplish their desires.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="assets/img/widget/06.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Filial da Amazon</h4>
                <p class="card-text">An open discussion of your managerial board with our designers let's them gain a deeper insight of your plans, future goals and the preferred approach towards the achievement of those goals. </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="assets/img/widget/05.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Redirecionamento de Produtos</h4>
                <p class="card-text">This is the battle cry of author and journalist Robert Ringer. And he is absolutely correct. Not all of the decision-making, clarity, planning, focus and belief in the world, will get you to where you want to be, without taking action!</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>
    </div> --}}
    {{-- </div> --}}
</div>


@endsection

@section('footer')
    @include('layout.componentes.footer')
@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush

