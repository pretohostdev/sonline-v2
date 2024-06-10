@extends('layout.container.app')
@section('titulo', 'sonline-clientes')

@push('styles')
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
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

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />
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
    
    <div class="">

        <div class="row" style="margin-top:80px">

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
                                    Clientes
                                </li>
                            </ol>
                        </nav>
                    </div>

                    @include('layout.componentes.cabecalho_admin_2')
                    
                    </div>

                </div>
    
                <!-- end page title -->
            </div>

        </div>

        {{-- Lista de todos os clientes --}}

        <div class="row editable-wrapper mt-3">
            <div class="col-lg-12 ">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabelaClientes" class="table display responsive nowrap table-light table-bordered">
                                <thead class="bg-padrao text-light">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Género</th>
                                        <th>Contacto</th>
                                        <th>Data Dascimento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($clientes as $cliente)
                                    
                                        <tr data-id="{{ $cliente->id }}">
                                            <td class="text-dark">{{$cliente->name}}</td>
                                            <td class="text-dark">{{$cliente->email}}</td>
                                            <td class="text-dark">{{$cliente->genero}}</td>
                                            <td class="text-dark">{{$cliente->contacto}}</td>
                                            <td class="text-dark">{{$cliente->dataNascimento}}</td>
                                        </tr>

                                    @endforeach
                                    
                                </tbody>
                                
                            </table>
                            {{-- Link que representa a paginação --}}
                            <div class="pagination">
                                {{ $clientes->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
<script src="{{asset('assets/pluto/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/popper.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/meu.js')}}"></script>
@endpush