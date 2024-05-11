@extends('layout.container.app')
@section('titulo', 'Enviar Email')

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
    @include('layout.componentes.header')
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
                                    Envio de Email
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
                            
                            <div class="container" style="height:500px" >
                                <div class="row">
                                <div class="col-8">

                                    <h3>Enviar email de confirmação</h3>
                                    <form target="_blank" action="https://formsubmit.co/{{ $cliente->email }}" method="POST">
                                        @csrf
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col mt-2">
                                                <input type="text" name="name" class="form-control" value="{{$cliente->name}}" required>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <textarea placeholder="Mensagem" class="form-control" name="message" rows="10" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-lg bg-gradient text-light btn-block mt-2">Enviar Email</button>
                                    </form>


                                </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>



@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush
    
    
    
    
        
        </div>
      </div>


