@extends('layout.container.app')

@section('titulo', 'Cliente')

@push('styles')

<link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}">
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


{{-- Inclusão do Bootstrap 5 no projecto --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />
@endpush


@section('header')
    @include('layout.componentes.topbar')
@endsection

@section('dashboard')
    @include('layout.componentes.dash')
@endsection

@section("corpo")

<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12" style="margin-top: 0.5px">
             <div class="page_title" style="background-color:#243147">
                <h2 class="text-white">Perfil</h2>
             </div>
          </div>
       </div>

       <!-- row -->
       <div class="row column1">
          <div class="col-md-2"></div>
          <div class="col-md-8">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Dados Pessoais</h2>
                   </div>
                </div>
                <div class="full price_table padding_infor_info">
                   <div class="row">
                      <!-- profile image -->
                      <div class="col-lg-12">
                         <div class="full dis_flex center_text">
                            <div class="profile_img">
                                <img src="{{asset('assets/img/perfil.png')}}" width="180" class="rounded-circle" class="img-fluid" alt="users-avatar">
                            </div>
                            <div class="profile_contant">
                               <div class="contact_inner">
                                  <h3>{{ $cliente->nome }}</h3>
                                  <p><strong>Sobre: </strong>Cliente Sonline</p>
                                  <ul class="list-unstyled">
                                     <li><i class="fa fa-envelope-o"></i> : {{ $cliente->email }}</li>
                                     <li><i class="fa fa-phone mb-3"></i> : {{ $cliente->contacto }}</li>
                                  </ul>
                               </div>

                               <div class="user_progress_bar">
                                  <div class="progress_bar">
                                     <!-- Skill Bars -->
                                     <form method="POST" id="formEditarDados">
                                        @csrf
                                        @method('POST')
                                        <div class="mb-3">
                                            <label for="nomeCompleto">Nome completo</label>
                                            <input type="text" class="form-control" name="nome" id="nomeCompleto" value="{{$cliente->nome}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="contacto">Número do Telefone</label>
                                            <input type="text" class="form-control" name="contacto" id="contacto" value="{{$cliente->contacto}}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="genero">Género</label>
                                            <input type="email" class="form-control" name="genero" id="genero" value="{{$cliente->genero}}" readonly>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-12">
                                                <label class="mb-1">Data de Nascimento</label>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input id="diaNascimento" class="form-control" name="diaNascimento" value="{{$cliente->diaNascimento}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input id="mesNascimento" class="form-control" name="mesNascimento" value="{{$cliente->mesNascimento}}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <input id="anoNascimento" class="form-control" name="anoNascimento" value="{{$cliente->anoNascimento}}">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="pais">País</label>
                                                <input id="pais" class="form-control" name="pais" value="{{$cliente->pais}}" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="cidade">Cidade</label>
                                                <input id="cidade" class="form-control" name="cidade" value="{{$cliente->cidade}}" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="bairro">Bairro</label>
                                                <input type="text" class="form-control" name="bairro" id="bairro" value="{{$cliente->bairro}}" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <input type="hidden" class="form-control" id="user_id" value="{{$cliente->id}}">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Concordo com as alterações.
                                                </label>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-space-between">
                                            <div class="mr-4">
                                                <button type="submit" class="main_bt">Atualizar dados</button> 
                                            </div>
                                            <div>
                                                <i class="fa fa-check fa-2x text-success mr-2" id="atualizadoDadosSucesso"></i>
                                                <i class="fa fa-close fa-2x text-danger" id="atualizadoDadosErro"></i>
                                                <div class="spinner-border text-primary mr-2" role="status" id="spinnerAtualizar">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
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

                <div class="row">
                    <div class="container" style="background-color:#243147">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading1" style="box-shadow: -1px 1px 4px -2px rgba(0, 0, 0, 0.2);">
                                    <h2 class="text-center text-light">
                                        Meus Serviços
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 d-flex justify-content-center align-items-center">
                            <div class="mb-1">
                                <a href="{{ route('visto.estado') }}" class="btn btn-outline-light">Vistos</a>
                                <a href="{{ route('conta.estado') }}" class="btn btn-outline-light">Contas</a>
                                <a href="{{ route('moeda.estado') }}" class="btn btn-outline-light">Moedas</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 d-flex justify-content-center align-items-center">
                            <div class="mb-5">
                                <a href="{{ route('agendamento.estado') }}" class="btn btn-outline-light">Agendamentos</a>
                                <a href="{{ route('redirecionamento.estado') }}" class="btn btn-outline-light">Redirecionamentos</a>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>

             </div>
             <div class="col-md-2"></div>
          </div>
          <!-- end row -->
       </div>
       <!-- footer -->
       @section('footer')
            @include('layout.componentes.footer')
       @endsection

    </div>
    <!-- end dashboard inner -->
 </div>

    <script>
        document.getElementById('formEditarDados').addEventListener('submit', function(event) {
            
            event.preventDefault(); // Impedir o envio padrão do formulário
            console.log('Estou funcionando...');

            var spinnerAtualizar = document.getElementById('spinnerAtualizar');
                spinnerAtualizar.style.display = "block";

                atualizadoDadosSucesso = document.getElementById('atualizadoDadosSucesso');
                atualizadoDadosSucesso.style.display = "none";
                atualizadoDadosErro = document.getElementById('atualizadoDadosErro');
                atualizadoDadosErro.style.display = "none";

            // Pegar os dados vindo do formulário
            var nomeCompleto = document.getElementById('nomeCompleto').value;
            var contacto = document.getElementById('contacto').value;
            var diaNascimento = document.getElementById('diaNascimento').value;
            var mesNascimento = document.getElementById('mesNascimento').value;
            var anoNascimento = document.getElementById('anoNascimento').value;
            var cidade = document.getElementById('cidade').value;             
            var bairro = document.getElementById('bairro').value;             
            var pais = document.getElementById('pais').value;             
            
            var user_id =  document.getElementById('user_id').value;
            
            const cliente = {
                pais:pais,
                id: user_id,
                bairro:bairro,
                cidade:cidade,
                contacto:contacto,
                nome: nomeCompleto,
                diaNascimento:diaNascimento,
                anoNascimento:anoNascimento,
                mesNascimento: mesNascimento,
            };

        const dadosAtualizados = atualizarDados(cliente);

        dadosAtualizados.then(
            dados=>{
                if(dados.atualizado == "true"){
                    spinnerAtualizar.style.display = "none";
                    atualizadoDadosSucesso.style.display = "block";
                }
                else{
                    spinnerAtualizar.style.display = "none";
                    atualizadoDadosErro.style.display = "block";
                }
            }
        );

        async function atualizarDados(cliente){
            const response = await fetch('https://sonlinedigital.com/api/userAtualizar',
            {
                method:'POST',
                headers: {
                    'Accept': 'application/json'
                },
                body:JSON.stringify(cliente)
            });
            const dados = await response.json();
            return dados;
        }

        });
    </script>

@endsection


@push('scripts')
<script src="{{asset('assets/pluto/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/popper.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/pluto/js/perfect-scrollbar.min.js')}}"></script>
<script>
   var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- custom js -->
<script src="{{asset('assets/pluto/js/meu.js')}}"></script>
@endpush

