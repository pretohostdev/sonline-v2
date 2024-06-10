@extends('layout.container.app')

@section('titulo', 'Estado redirecionamento')

@push('styles')

{{-- Inclusão do Bootstrap 5 no projecto --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}">
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
<!-- color css -->
<link rel="stylesheet" href="{{asset('assets/pluto/css/color_2.css')}}" />
{{-- Font e Icones alternativa --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/awesome/css/font-awesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/themify-icons/themify-icons.css') }}">
@endpush


@section('header')
@include('layout.componentes.topbar')
@endsection

@section('dashboard')
@include('layout.componentes.dash')
@endsection

@section("corpo")

<div class="card mt-5" style="background-color: #fff">
    <div class="row p-2">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="row">
                <div class="col-12">
                    <div class="card-header text-center bg-primary text-light">Cliente</div>
                </div>
                <div class="col-12">
                    <div class="text-center text-dark bg-light p-2" style="border-bottom:1px solid #ddd">
                        {{$cliente->name}}
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center text-dark bg-light p-2" style="border-bottom:1px solid #ddd">
                        {{$cliente->email}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="row">
                <div class="col-12">
                    <div class="card-header text-center bg-primary text-light">Serviço</div>
                </div>
                <div class="col-12">
                    <div class="text-center text-dark bg-light p-2" style="border-bottom:1px solid #ddd">
                        Redirecionamento</div>
                </div>
                <div class="col-12">
                    <div class="text-center text-dark bg-light p-2" style="border-bottom:1px solid #ddd">País Origem -
                        {{$redirecionamento->paisOrigem}}</div>
                </div>
                <div class="col-12">
                    <div class="text-center text-dark bg-light p-2" style="border-bottom:1px solid #ddd">País Destinado
                        - {{$redirecionamento->paisDestino}}</div>
                </div>
                <div class="col-12">
                    <div class="text-center text-dark bg-light p-2" style="border-bottom:1px solid #ddd">Valor a Pagar -
                        {{$redirecionamento->total}}</div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="row">
                <div class="col-12">
                    <div class="card-header text-center bg-primary text-light">Produto</div>
                </div>
                <div class="col-12">
                    <div class="text-center text-dark bg-light p-2" style="border-bottom:1px solid #ddd">
                        {{$redirecionamento->produto}}</div>
                </div>
                @if ($redirecionamento->largura)
                <div class="col-12">
                    <div class="text-center text-dark bg-light p-2" style="border-bottom:1px solid #ddd">Largura -
                        {{$redirecionamento->largura}}
                    </div>
                </div>
                @endif
                @if ($redirecionamento->altura)
                <div class="col-12">
                    <div class="text-center text-dark bg-light p-2" style="border-bottom:1px solid #ddd">Altura -
                        {{$redirecionamento->altura}}
                    </div>
                </div>
                @endif

                @if ($redirecionamento->enderecoEntrega)
                <div class="col-12">
                    <div class="text-center text-dark bg-light p-2" style="border-bottom:1px solid #ddd">Endereço de
                        entrega -
                        {{$redirecionamento->enderecoEntrega}}
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
<div class="row">
    @if ($redirecionamento->fotoProduto)
    <div class="col-12 mb-2">
        <div class="card-header bg-primary text-light">Foto do produto</div>
    </div>
    <div class="col-12">
        <iframe src="{{url("storage/{$redirecionamento->fotoProduto}")}}" alt="foto do produto redirecionado"
            width="100%" height="600px">
        </iframe>
    </div>
    @endif
</div>

<div class="row">
    <div class="col-12">
        @if ($redirecionamento->descricao)
        <div class="col-12">
            <div class="text-center text-dark bg-light p-2" style="border-bottom:1px solid #ddd">
                Informação adicional do produto -
                {{$redirecionamento->descricao}}
            </div>
        </div>
        @endif
    </div>
</div>
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