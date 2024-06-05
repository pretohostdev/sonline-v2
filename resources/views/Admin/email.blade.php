@extends('layout.container.app')
@section('titulo', 'Enviar Email')

@push('styles')

    <link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <link rel="stylesheet" href="{{asset('assets/pluto/css/color_2.css')}}" />

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
    
    <div class="">

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

        <div class="row  mt-3">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="card bg-padrao p-4">
                    <div class="card-header">
                        <h5 class="text-center p-0 m-0 text-light">Entrar em comunicação com o cliente</h5>
                    </div>
                
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
                <div class="text-right">
                    <button type="submit" class="btn btn-success btn-bloc mt-2 mb-2">Enviar Email</button>
                </div>
                </form>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-6">
                    <div class="card">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-header bg-padrao">
                                    <h4 class="text-center p-0 m-0">Gerenciando estado</h4>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="card-body">
                            <div class="col-12 d-flex justify-content-center">
                                <div class="">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch_pendente" onchange="estadoAlterado(this)">
                                        <label class="form-check-label" for="switch_pendente">Pendente</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch_aceite" onchange="estadoAlterado(this)">
                                        <label class="form-check-label" for="switch_aceite">Aceite</label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch_rejeitado" onchange="estadoAlterado(this)">
                                        <label class="form-check-label" for="switch_rejeitado">Rejeitado</label>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
                <script>
                    var switch_pendente = document.getElementById('switch_pendente'); 
                    var switch_aceite = document.getElementById('switch_aceite'); 
                    var switch_rejeitado = document.getElementById('switch_rejeitado');
                    
                    switch_pendente.checked = "true";

                    function estadoAlterado(elemento){
                        if(elemento.checked){
                            console.log("Activado");
                        }else{
                            console.log("Desativado");
                        }
                    }
                    
                </script>
    
            </div>

           


@endsection

@push('scripts')
<script src="{{asset('assets/pluto/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/popper.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/meu.js')}}"></script>
@endpush
    
    
    
    
        
        </div>
      </div>


