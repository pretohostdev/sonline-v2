@extends('layout.container.app')
@section('titulo', 'Produtos')

@push('styles')
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.jpg')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
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

        <div class="row mt-4" style="">

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
                                    Produtos Amazon
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

                        @if(session('mensagem'))
                        <div class="alert bg-success text-light d-flex alert-dismissible fade show" role="alert">
                            {{ session('mensagem') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="border-style: none; background:transparent">
                                <i class="ti ti-close"></i>
                            </button>
                        </div>
                            
                        @endif

                        <div class="table-responsive">
                            <table id="tabelaProdutos" class="table display responsive nowrap table-light table-bordered">
                                <thead class="bg-padrao text-light">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Preço</th>
                                        <th>Link afiliado</th>
                                        <th>Descrição</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($produtos as $produto)
                                    
                                        <tr data-id="{{ $produto->id }}">
                                            <td class="text-dark">{{$produto->nome}}</td>
                                            <td class="text-dark">{{$produto->preco}}</td>
                                            <td class="text-dark">

                                                <a href="{{$produto->link}}" target="_blank" class="text-primary">{{$produto->link}}</a>
                                            </td>
                                            <td class="text-dark">{{$produto->descricao}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                      ver mais
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <form action="{{route('admin.produto.edit', $produto->id)}}" method="GET">
                                                            @csrf
                                                            <button type="submit" class="dropdown-item">Editar</button>
                                                        </form>
                                                      
                                                      <form action="{{route('eliminarProduto', $produto->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="dropdown-item">Eliminar</button>
                                                        </form>
                                                    </div>
                                                  </div>
                                            </td>
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

        </div>

    </div>



@endsection

@push('scripts')
<script src="{{asset('assets/pluto/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/popper.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/meu.js')}}"></script>
@endpush