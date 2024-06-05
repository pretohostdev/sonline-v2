@extends('layout.container.app')

@section('titulo', 'home')

@push('styles')
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
    <link rel="stylesheet" href="{{asset('assets/pluto/css/color_2.css')}}" />

    {{-- Font e Icones alternativa --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/themify-icons/themify-icons.css') }}">
@endpush


@section('header')
    @include('layout.componentes.topbar')
@endsection

@section('dashboard')
    @include('layout.componentes.dashboard')
@endsection

@section("corpo")

    <div class="row" style="margin-top:20px">
        <div class="col-md-12">
            <!-- begin page title -->
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
                                Página Principal
                            </li>
                        </ol>
                    </nav>
                </div>
                
                @include('layout.componentes.cabecalho_admin_2')

            </div>

            <!-- end page title -->
        </div>
    </div>

    <!-- Notification -->
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                <strong>{{ $nomeAdmin }}!</strong> Recomendamos a verificação constante das estatísticas abaixo.
                <button type="button" class="close bg-transparent" data-dismiss="alert" aria-label="Close" style="border-style: none;">
                    <i class="ti ti-close"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- begin row -->
    <div class="row mt-3">
        <div class="col-sm-12">
            <div class="card card-statistics">
                <div class="row no-gutters">
                    <div class="col-xxl-3 col-lg-6">
                        <div class="p-20 border-lg-right border-bottom border-xxl-bottom-0">
                            <div class="d-flex m-b-10">
                                <p class="mb-0 font-regular text-muted font-weight-bold">Total Agendamento</p>
                                <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                            </div>
                            <div class="d-block d-sm-flex h-100 align-items-center">
                                <div class="apexchart-wrapper">
                                    <div id="analytics7"></div>
                                </div>
                                <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                    <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>{{ $totalAgendamento }}</h3>
                                    <p>Agendamento Mensal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="p-20 border-xxl-right border-bottom border-xxl-bottom-0">
                            <div class="d-flex m-b-10">
                                <p class="mb-0 font-regular text-muted font-weight-bold">Total abertura de conta</p>
                                <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                            </div>
                            <div class="d-block d-sm-flex h-100 align-items-center">
                                <div class="apexchart-wrapper">
                                    <div id="analytics8"></div>
                                </div>
                                <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                    <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>{{ $totalConta }}</h3>
                                    <p>Este Mes</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="border-top my-4"></div>
    <div class="row">
        <div class="col-12 col-md-3">
            <span>Total solicitação de Moeda: <b>{{ $totalMoedas }}</b></span>
            <div class="progress my-3" style="height: 4px;">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <span>Total redirecionamento: <b>{{$totalRedirecionamento}}</b></span>
            <div class="progress my-3" style="height: 4px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <span>Total Solicitação de visto: <b>{{$totalAgendamento}}</b></span>
            <div class="progress my-3" style="height: 4px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <span>Total Inscritos: <b>{{($totalClientes - 1)}}</b></span>
            <div class="progress my-3" style="height: 4px;">
                <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    {{-- @section('footer') --}}
        @include('layout.componentes.footer')
    {{-- @endsection --}}
@endsection



@push('scripts')
<script src="{{asset('assets/pluto/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/popper.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/meu.js')}}"></script>
@endpush

