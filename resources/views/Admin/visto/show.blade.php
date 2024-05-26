@extends('layout.container.app')
@section('titulo', 'visto')

@push('styles')
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

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />
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
    
    {{-- <div class=""> --}}

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
                                    Vistos
                                </li>
                            </ol>
                        </nav>
                    </div>

                    @include('layout.componentes.cabecalho_admin_2')


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
                                <thead class="bg-gradient text-light">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Tipo de visto</th>
                                        <th>Data de solicitação</th>
                                        <th>Data prevista</th>
                                        <th>Documentos</th>
                                        <th>País desejado</th>
                                        <th>Estado</th>
                                        <th class="text-center">Opção</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($vistos as $visto)
                                    
                                        <tr data-id="{{ $cliente->id }}">
                                            <td class="text-dark">{{$cliente->nome}}</td>
                                            <td class="text-dark">{{$visto->tipo}}</td>
                                            <td class="text-dark">{{$visto->dataSolicitacao}}</td>
                                            <td class="text-dark">{{$visto->dataPrevista}}</td>
                                            <td>
                                                <a href="{{route('verDocumentoVisto', $visto->id)}}" class="btn btn-success btn-block">ver</a>
                                            </td>
                                            <td class="text-dark">{{$visto->paisDesejado}}</td>
                                            <td class="text-dark">
                                                @if ($visto->estado == "0")
                                                    <div class="d-flex align-items-center">
                                                        <div class="rounded-circle bg-primary mr-2" style="width: 10px; height: 10px;"></div>
                                                        Pendente
                                                    </div>
                                                @elseif ($visto->estado == "1")
                                                    <div class="d-flex align-items-center">
                                                        <div class="rounded-circle bg-success mr-2" style="width: 10px; height: 10px;"></div>
                                                        Confirmado
                                                    </div>
                                                @else
                                                    <div class="d-flex align-items-center">
                                                        <div class="rounded-circle bg-danger mr-2" style="width: 10px; height: 10px;"></div>
                                                        Cancelado
                                                    </div>
                                                @endif
                                            </td>
                                            
                                            <td><a href="{{route('enviarEmail', ['id' => $visto->id, 'modelo' => 'visto'])}}" class="btn bg-gradient btn-sm btn-block text-light btn-eliminar">Enviar Email</> </td>
                                        </tr>

                                    @endforeach
                                    
                                    
                                </tbody>
                                
                            </table>
                            {{-- Link que representa a paginação --}}
                            <div class="pagination">
                                {{ $vistos->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    {{-- </div> --}}
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