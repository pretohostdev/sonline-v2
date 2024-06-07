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
    
    <div>
        <div class="row" style="margin-top:20px">
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
                                    Envio de Email
                                </li>
                            </ol>
                        </nav>
                    </div>
                    @include('layout.componentes.cabecalho_admin_2')
                </div>
            </div>
        </div>

        </div>

        <div class="row  mt-3">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header" style="background:#09588f">
                        <h6 class="text-center text-light p-1 m-0 fs-5">Entrar em comunicação com o cliente</h6>
                    </div>
                
                <form target="_blank" action="https://formsubmit.co/{{ $cliente->email }}" method="POST" class="p-2">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-12 mt-2">
                                <input type="text" name="name" class="form-control text-center text-secondary" value="{{"Nome do cliente - " .$cliente->name}}" readonly>
                            </div>

                            <div class="col-12 mt-2">
                                <input type="hidden" name="name" class="form-control" value="{{$id_servico}}" id="id_servico">
                            </div>
                            
                            <div class="col-12 mt-2">
                                <input type="text" name="name" class="form-control text-center text-secondary" value="{{$modelo}}" id="modelo" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <textarea placeholder="Mensagem" class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success mt-2 mb-2">Enviar Email</button>
                    </div>
                </form>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-6">
                    <div class="card">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-header" style="background:#09588f">
                                    <h6 class="text-center p-1 m-0 text-light fs-5">Gerenciando estado</h6>
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
                    var id_servico = document.getElementById('id_servico');
                    var modelo = document.getElementById('modelo');
                    
                    function estadoAlterado(elemento){
                        if(elemento.checked){
                            if(elemento.id == "switch_pendente"){
                                const servico = {
                                    modelo:modelo.value,
                                    id:id_servico.value,
                                    valorEstado:'0'
                                }
                                switch_pendente.checked = true;
                                switch_aceite.checked = false;
                                switch_rejeitado.checked = false;

                                const alteracao = atualizaEstado(servico);
                            }
                            else if(elemento.id == "switch_aceite"){
                                const servico = {
                                    modelo:modelo.value,
                                    id:id_servico.value,
                                    valorEstado:'1'
                                }
                                switch_pendente.checked = false;
                                switch_aceite.checked = true;
                                switch_rejeitado.checked = false;

                                const alteracao = atualizaEstado(servico);
                            }
                            else if(elemento.id == "switch_rejeitado"){
                                const servico = {
                                    modelo:modelo.value,
                                    id:id_servico.value,
                                    valorEstado:'2'
                                }
                                switch_pendente.checked = false;
                                switch_aceite.checked = false;
                                switch_rejeitado.checked = true;

                                const alteracao = atualizaEstado(servico);
                            }
                        }else{
                            console.log("Desativado");
                        }
                    }
                    
                    const servico = {
                        modelo:modelo.value,
                        id:id_servico.value
                    }
                    const estadoSelecionado = estadoAtual(servico);

                    estadoSelecionado.then(
                        estado=>{
                            if(estado == '0'){
                                switch_pendente.checked = "true";
                            }
                            else if(estado == '1'){
                                switch_aceite.checked = "true";
                            }
                            else if(estado == '2'){
                                switch_rejeitado.checked = "true";
                            }
                        }
                    );

                    async function estadoAtual(servico){
                        const response = await fetch('http://localhost:8000/api/getEstado',
                        {
                            method:'POST',
                            headers: {
                                'Accept': 'application/json'
                            },
                            body:JSON.stringify(servico)
                        });
                        const estado = await response.json();
                        return estado;
                    }

                    async function atualizaEstado(servico){
                        const response = await fetch('http://localhost:8000/api/updateEstado',
                        {
                            method:'POST',
                            headers: {
                                'Accept': 'application/json'
                            },
                            body:JSON.stringify(servico)
                        });
                        const estado = await response.json();
                        return estado;
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


