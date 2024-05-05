@extends('layout.container.app')
@section('titulo', 'Produtos')

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
                                <thead class="bg-gradient text-light">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Género</th>
                                        <th>Contacto</th>
                                        <th>Data Dascimento</th>
                                        <th class="text-center">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($produtos as $produto)
                                    
                                        <tr data-id="{{ $produto->id }}">
                                            <td class="text-dark">{{$produto->name}}</td>
                                            <td class="text-dark">{{$produto->email}}</td>
                                            <td class="text-dark">{{$produto->genero}}</td>
                                            <td class="text-dark">{{$produto->contacto}}</td>
                                            <td class="text-dark">{{$produto->dataNascimento}}</td>
                                            <td><button class="btn bg-gradient btn-sm btn-block text-light btn-eliminar">Eliminar</button> </td>
                                        </tr>

                                    @endforeach
                                    
                                    
                                </tbody>
                                
                            </table>
                            {{-- Link que representa a paginação --}}
                            <div class="pagination">
                                {{ $produtos->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <script>
                tabelaprodutos.addEventListener('click', function(event) {
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

    </div>



@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush