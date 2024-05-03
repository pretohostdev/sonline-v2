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
                                    Redirecionamentos
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
                                            
                                            <td><button class="btn bg-gradient btn-sm btn-block text-light btn-eliminar">Enviar Email</button> </td>
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

                console.log(id);
        
                // if (elementoClicado.classList.contains('btn-eliminar')) {
                //     console.log('Editar produto com ID:', id);
                // }
            });
            </script>
            

            
        </div>



        {{-- <div class="row">
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
        </div> --}}



    </div>



@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush