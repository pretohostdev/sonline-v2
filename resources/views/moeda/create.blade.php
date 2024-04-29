@extends('layout.container.app')

@section('titulo', 'Solicitação de moeda')

@push('styles')

    {{-- Inclusão do Bootstrap 5 no projecto --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
    @include('layout.componentes.dashboardCliente')
@endsection

@section("corpo")

<div class="row" style="margin-top:100px">
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
                            Solicitação de moeda
                        </li>
                    </ol>
                </nav>
            </div>

            @include('layout.componentes.cabecalho_2')

        </div>

    <div class="row">

        <div class="col-xl-6">
            <div class="card card-statistics rounded">
                <div class="card-body">
                    <form action="" method="" id="formConta">
                        {{-- @csrf --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Seleciona a moeda</label>
                            <select type="da" class="form-control" id="nomeMoeda">
                                <option value="Dolar">Dolar</option>
                                <option value="Euro">Euro</option>
                                <option value="Kwanza">Kwanza</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Montante</label>
                            <input type="number" class="form-control" value="" id="montade">
                        </div>

                        <label for="">Comprovativo Bancário</label>
                        <div class="card-body bg-secondary rounded">
                            <input type="file" class="form-control-file" id="comprovativoBancario">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Enviar Pedido</button>
                    </form>
                </div>

                {{-- Spinner do cadastramento da solicitação de abertura de conta wise --}}
                <div class="d-flex justify-content-center bg-info">
                    Testando apenas
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            
            <div class="card card-statistics rounded">
                <div class="card-header">
                    <div class="card-heading">
                        <h4 class="card-title">Conversão</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group mb-0">

                        <div class="d-flex justify-content-center">
                            <div class="spinner-border" role="status" id="spinnerInputKwanza">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        
                        <div class="input-group mb-3" id="divKwanza">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-danger text-light">AOA</span>
                            </div>
                            <input type="number" class="form-control" id="inputKwanza" oninput="conversaoMoeda(id)">
                        </div>

                          <div class="d-flex justify-content-center">
                            <div class="spinner-border" role="status" id="spinnerInputDolar">
                                <span class="sr-only">Loading...</span>
                            </div>
                          </div>

                          <div class="input-group mb-3" id="divDolar">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-light">USD</span>
                            </div>
                            <input type="number" class="form-control" id="inputDolar" oninput="conversaoMoeda(id)">
                          </div>

                          <div class="d-flex justify-content-center">
                            <div class="spinner-border" role="status" id="spinnerInputEuro">
                                <span class="sr-only">Loading...</span>
                            </div>
                          </div>

                          <div class="input-group mb-3" id="divEuro">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark text-light">EUR</span>
                            </div>
                            <input type="number" class="form-control" id="inputEuro" oninput="conversaoMoeda(id)">
                          </div>

                    </div>
                </div>

            </div>

        </div>

        {{-- <div class="col-xl-5">

        </div> --}}


        

    </div>


    </div>

    <script>
        document.getElementById('formConta').addEventListener('submit', function(event) {
            
            event.preventDefault(); // Impedir o envio padrão do formulário
            console.log('Estou funcionando...');

            // Pegar os dados vindo do formulário
            var dataEmissao = document.getElementById('dataEmissaoConta').value;

            var comprovativo = document.getElementById('comprovativoBancario');

            console.log('Comprovativo: ' + comprovativo.value);

            // console.log('A data é: ' + data);
            const conta = {
                data: dataEmissao,
            };

            fetch('http://localhost:8000/api/conta', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(conta),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro ao salvar os dados');
                }
                return response.json();
            })
            .then(data => {
                console.log(data.message); // Mensagem de sucesso
            })
            .catch(error => {
                console.error(error);
            });

        });

    </script>
</div>



@endsection

@section('footer')
    @include('layout.componentes.footer')
@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/funcoes.js')}}"></script>
@endpush