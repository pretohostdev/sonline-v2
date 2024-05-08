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
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="ti ti-close"></i>
                            </button>
                        </div>
                            {{-- <div class="alert alert-success">
                                {{ session('mensagem') }}
                            </div> --}}
                        @endif

                        <div class="table-responsive">
                            <table id="tabelaProdutos" class="table display responsive nowrap table-light table-bordered">
                                <thead class="bg-gradient text-light">
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
                                                {{-- <button class="btn bg-gradient btn-sm btn-block text-light btn-eliminar">Eliminar</button> --}}
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                      
                                                    </a>
                                                    <div class="dropdown-menu">
                                                      <a class="dropdown-item" href="{{route('admin.produto.edit', $produto->id)}}">Editar</a>
                                                      <a class="dropdown-item" href="{{route('eliminarProduto', $produto->id)}}">Eliminar</a>
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

            {{-- <script>
                tabelaProdutos.addEventListener('click', function(event) {
                var elementoClicado = event.target;
                var linha = elementoClicado.closest('tr');
                var id = linha.dataset.id;

               
                async function eliminarProduto(id){
                    const response = await fetch('http://localhost:8000/api/produto/'+id,
                    {
                        method:'DELETE',
                        headers: {
                            'Accept': 'application/json'
                        }
                    });
                    const produto = await response.json();
                    return produto;
                }

                const produto = eliminarProduto(id);

                produto.then(
                    produto=>{
                        console.log(produto);
                        linha.remove();
                    }
                );
    
                
            });
            </script> --}}
            

            
        </div>

    </div>



@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush