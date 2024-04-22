@extends('layout.container.app')
@section('titulo', 'sonline-clientes')

@push('styles')
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />

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
    
    <div class="">

        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Clients</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Pages
                                </li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Clients</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>

        {{-- Lista de todos os clientes --}}

        <div class="row">
            <div class="col-12">
                <div class="card card-statistics clients-contant">
                    <div class="card-header">
                        <div class="d-xxs-flex justify-content-between align-items-center">
                            <div class="card-heading">
                                <h4 class="card-title">Total clientes inscritos</h4> 
                            </div>
                            <div class="mt-xxs-0 mt-3 btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-round  btn-primary">
                                    <input type="radio" name="options" id="option1" checked="">
                                    Diário
                                </label>
                                <label class="btn btn-sm btn-outline-primary">
                                    <input type="radio" name="options" id="option2">
                                    Semanal
                                </label>
                                <label class="btn btn-sm btn-round btn-outline-primary">
                                    <input type="radio" name="options" id="option3"> Mensalmente
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0 table-responsive">
                        <table class="table clients-contant-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contacto</th>
                                    <th scope="col">Gênero</th>
                                    <th scope="col">Editar & Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <p class="font-weight-bold">Adrian Demiandro</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                20/07/2018
                                            </div>
                                        </div>
                                    </td>
                                    <td>$230.00</td>
                                    <td><span>Masculino</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 btn-sm"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round btn-sm"><i class="ti, ti-close"></i></a>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>



@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush