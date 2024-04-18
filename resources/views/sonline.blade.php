@extends('layout.container.app')

@section('titulo', 'Principal')

@push('styles')
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
    @include('layout.componentes.header')
@endsection

@section('dashboard')
    @include('layout.componentes.dashboard')
@endsection

@section("corpo")

{{-- <div class="conteudo"> --}}
   
    <div class="row" style="margin-top:100px ">
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
                                <a href="index.html"></a>
                            </li>
                            <li>
                                Página Principal
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                    <a href="{{ route('cliente.index') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Clientes">
                        <i class="fe fe-users btn btn-icon text-primary"></i>
                    </a>
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Solicitação de Moedas">
                        <i class="fe fe-credit-card btn btn-icon text-success"></i>
                    </a>
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Abertura de conta">
                        <i class="fa fa-cc-visa btn btn-icon text-warning"></i>
                    </a>
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar">
                        <i class="fa fa-calendar-o btn btn-icon text-cyan"></i>
                    </a>
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Produtos">
                        <i class="fa fa-product-hunt btn btn-icon text-danger"></i>
                    </a>
                </div>
            </div>
            <!-- end page title -->
        </div>
    </div>

    <!-- Notification -->
    <div class="row">
        <div class="col-md-12">
            <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                <strong>Holy guacamole!</strong> Recomendamos a verificação constante das estatísticas abaixo.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ti ti-close"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- begin row -->
    <div class="row">
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
                                    <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>{{ $totalClientesAgendados }}</h3>
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
                    <div class="col-xxl-3 col-lg-6">
                        <div class="p-20 border-lg-right border-bottom border-lg-bottom-0">
                            <div class="d-flex m-b-10">
                                <p class="mb-0 font-regular text-muted font-weight-bold">Total solicitação de Moeda</p>
                                <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                            </div>
                            <div class="d-block d-sm-flex h-100 align-items-center">
                                <div class="apexchart-wrapper">
                                    <div id="analytics9"></div>
                                </div>
                                <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                    <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>569</h3>
                                    <p>Avg. Sales per day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="p-20">
                            <div class="d-block d-sm-flex h-100 align-items-center">
                                <div class="apexchart-wrapper">
                                    <div id="analytics10"></div>
                                </div>
                                <div class="statistics ml-sm-auto mt-4 mt-sm-0 pr-sm-5">
                                    <ul class="list-style-none p-0">
                                        <li class="d-flex py-1">
                                            <span><i class="fa fa-circle text-primary pr-2"></i> Redirect Visits</span> <span class="pl-2 font-weight-bold">456</span></li>
                                        <li class="d-flex py-1"><span><i class="fa fa-circle text-warning pr-2"></i> New Visits</span> <span class="pl-2 font-weight-bold">256</span></li>
                                        <li class="d-flex py-1"><span><i class="fa fa-circle text-info pr-2"></i> Direct Visits</span> <span class="pl-2 font-weight-bold">128</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xxl-5 m-b-30">
            <div class="card card-statistics h-100 mb-0">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-heading">
                        <h4 class="card-title">Total Inscritos</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>{{ $totalClientes }}</h2>
                            <span class="d-block mb-2 font-16">Total clientes cadastrados</span>
                            <span class="d-block mb-2 mb-sm-5"><b class="text-primary">65.88%</b> dos clientes existentes</span>
                            <p class="mb-3">Nosso crescimento é notável, impulsionado pela nossa paixão e compromisso com a excelência.</p>
                            <a class="btn btn-round btn-inverse-primary mb-3 mb-sm-0" href="{{ route('cliente.index') }}"><b>Ver Clientes</b></a>
                        </div>
                        <div class="col-xs-6">
                            <div class="apexchart-wrapper">
                                <div id="analytics2" class="chart-fit"></div>
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
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush

