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
@include('layout.componentes.header')
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
            Editar produto
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

<div class="col-xl-6 col-md-6 col-12 border-t border-right">
<div class="page-account-form">
    <div class="form-titel border-bottom p-3">
        <h5 class="mb-0 py-2">Atualizar produtos Amazon</h5>
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
    
        <form action="{{route('admin.produto.update', $produto->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" class="form-control" name="nome" value="{{$produto->nome}}" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="preco">Preço</label>
                    <input type="number" class="form-control" name="preco" value="{{$produto->preco}}" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" value="{{$produto->descricao}}" name="descricao">
                </div>
                <div class="form-group col-md-12">
                    <label for="link">Link Afiliado</label>
                    <input type="text" class="form-control" name="link" value="{{$produto->link}}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem do produto</label>
                <img src="{{asset('assets/img/jpg.png')}}" alt="arquivo jpg"  style="height:40px;">
                <img src="{{asset('assets/img/png.png')}}" alt="aqruivo png" style="height:40px;">
                <input type="text" value="A imagem não poderá ser editada, se desejar apaga..." class="form-control mt-2" name="imagem" readonly>
            </div>
            
            <button type="submit" class="btn bg-gradient text-light">Atualizar produto</button>
        </form>
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

