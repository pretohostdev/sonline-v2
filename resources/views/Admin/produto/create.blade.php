@extends('layout.container.app')

@section('titulo', 'Produto Amazon')

@push('styles')

    {{-- Inclusão do Bootstrap 4 no projecto --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    @include('layout.componentes.headerCliente')
@endsection

@section('dashboard')
    @include('layout.componentes.dashboard')
@endsection

@section("corpo")

{{-- <div class="conteudo"> --}}
   
    <div class="row" style="margin-top:100px">
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
                                Página de produto
                            </li>
                        </ol>
                    </nav>
                </div>
                
                @include('layout.componentes.cabecalho_admin_2')

            </div>

            <!-- end page title -->
        </div>
    </div>

    
        <!-- Cadastramento de produtos -->
        <div class="row account-contant mt-2">
            <div class="col-12">
                <div class="card card-statistics">
                    <div class="card-body p-0">
                        <div class="row no-gutters">

                            <div class="col-xl-5 col-md-6 col-12 border-t border-right">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Cadastrar produtos Amazon</h5>
                                    </div>
                                    <div class="p-4">

                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li class="text-light">{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    
                                        <form action="{{route('admin.produto.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="nome">Nome do Produto</label>
                                                    <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome')}}" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="preco">Preço</label>
                                                    <input type="number" class="form-control" id="preco" name="preco" value="{{old('preco')}}" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="descricao">Descrição</label>
                                                    <input type="text" class="form-control" id="descricao" name="descricao" value="{{old('descricao')}}" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="link">Link Afiliado</label>
                                                    <input type="text" class="form-control" id="link" name="link" value="{{old('link')}}" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="imagem">Imagem do produto</label>
                                                <input type="file" class="form-control" id="imagem" name="imagem">
                                            </div>
                                            
                                            <button type="submit" class="btn bg-gradient text-light">Cadastrar produto</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 border-t col-12">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Dados do sistema</h5>
                                    </div>
                                    <div class="p-4">
                                        <form action="admin.produto" method="POST" id="formSistema">
                                            @csrf
                                            <div class="form-group">
                                                <label for="iban">Iban:</label>
                                                <input type="text" class="form-control" id="iban" value="{{$sistema->iban}}" name="iban">
                                            </div>
                                            <div class="form-group">
                                                <label for="precoWise">Preço conta wise:</label>
                                                <input type="number" class="form-control" id="precoWise" value="{{$sistema->precoContaWise}}" name="precoWise">
                                            </div>

                                            <div class="d-flex justify-content-space-round">
                                                <button type="submit" class="btn bg-gradient text-light mr-2">Atualizar</button>
                                                    <div class="spinner-border text-primary" role="status" id="spinnerSistema">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                            </div>
                                            
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('formSistema').addEventListener('submit', function(event) {
                
                event.preventDefault(); // Impedir o envio padrão do formulário
                console.log('Estou funcionando...');
    
                var spinnerSistema = document.getElementById('spinnerSistema');
                    spinnerSistema.style.display = "block";
    
                // Pegar os dados vindo do formulário
                var preco = document.getElementById('precoWise').value;
                var iban = document.getElementById('iban').value;
    
                const sistema = {
                    iban: iban,
                    preco: preco,
                };
    
                fetch('http://localhost:8000/api/sistema', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(sistema),
                })
                .then(response => {
                    if (!response.ok) {
                        spinnerSistema.style.display = "none";
                        throw new Error('Erro ao salvar os dados');
                    }
                    return response.json();
                })
                .then(data => {
                    spinnerSistema.style.display = "none";
                })
                .catch(error => {
                    console.error(error);
                });
    
            });
    
        </script>
    

   


@endsection

@section('footer')
    @include('layout.componentes.footer')
@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush
