@extends('layout.container.app')
@section('titulo', 'sonline-redirecionamento')

@push('styles')
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />

     {{-- Font e Icones alternativa --}}
     <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/awesome/css/font-awesome.css') }}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/themify-icons/themify-icons.css') }}">
@endpush


@section('header')
    @include('layout.componentes.headerCliente')
@endsection

@section('dashboard')
    @include('layout.componentes.dashboard')
@endsection


@section("corpo")
    
    <div class="">

        <div class="row" style="margin-top:80px">

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
                                    Redirecionamentos
                                </li>
                            </ol>
                        </nav>
                    </div>
                    @include('layout.componentes.cabecalho_admin_2')
                </div>
            </div>

        </div>

        <div class="row editable-wrapper mt-3">
            <div class="col-lg-12 ">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabelaClientes" class="table display responsive nowrap table-light table-bordered">
                                <thead class="bg-gradient text-light">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Produto</th>
                                        <th>Data</th>
                                        <th>País Origem</th>
                                        <th>País Destino</th>
                                        <th>Valor</th>
                                        <th>Estado</th>
                                        <th class="text-center">Opção</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($redirecionamentos as $redirecionamento)
                                    
                                        <tr data-id="{{ $cliente->id }}">
                                            <td class="text-dark">{{$cliente->nome}}</td>
                                            <td class="text-dark">{{$redirecionamento->produto->nome}}</td>
                                            <td class="text-dark">{{$redirecionamento->data}}</td>
                                            <td class="text-dark">{{$redirecionamento->paisOrigem}}</td>
                                            <td class="text-dark">{{$redirecionamento->paisDestino}}</td>
                                            <td class="text-dark">{{$redirecionamento->valor}}</td>
                                            <td class="text-dark">
                                                @if ($redirecionamento->estado == "0")
                                                    <div class="d-flex align-items-center">
                                                        <div class="rounded-circle bg-primary mr-2" style="width: 10px; height: 10px;"></div>
                                                        Pendente
                                                    </div>
                                                @elseif ($redirecionamento->estado == "1")
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
                                            
                                            <td><a href="{{route('enviarEmail', ['id'=>$redirecionamento->id, 'modelo'=> 'redirecionamento'])}}" class="btn bg-gradient btn-sm btn-block text-light btn-eliminar">Enviar Email</a> </td>
                                        </tr>

                                    @endforeach
                                    
                                </tbody>
                                
                            </table>
                            {{-- Link que representa a paginação --}}
                            <div class="pagination">
                                {{ $redirecionamentos->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <script>
                tabelaClientes.addEventListener('click', function(event) {
                var elementoClicado = event.target;
                var linha = elementoClicado.closest('tr');
                var id = linha.dataset.id;

            });
            </script>
        </div>

    </div>

@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush