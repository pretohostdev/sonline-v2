@extends('layout.container.app')

@section('titulo', 'Abertura de conta wise')

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
                            Abertura de conta wise
                        </li>
                    </ol>
                </nav>
            </div>

            @include('layout.componentes.cabecalho_2')

        </div>

    <div class="row">
        <div class="col-xl-7">
            <div class="card card-statistics">
                <div class="card-body">
                    <form action="{{ route('contaWise.store') }}" method="POST" id="formConta" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="data">Dada de emissão</label>
                            <input type="date" class="form-control" id="data" name="data" value="{{ date('Y-m-d') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Valor</label>
                            <input type="number" class="form-control" value="20.000" id="pagamento" placeholder="20.000" readonly>
                        </div>

                        <label for="comprovativo">Comprovativo Bancário</label>
                        <div class="card-body bg-secondary rounded">
                            <input type="file" class="form-control-file" name="comprovativo">
                        </div>

                        <button type="submit" class="btn bg-gradient text-light mt-3">Enviar Pedido</button>
                    </form>
                </div>

                {{-- Spinner do cadastramento da solicitação de abertura de conta wise --}}
                <div class="d-flex justify-content-center bg-info">
                    Testando apenas
                </div>

            </div>
        </div>

        <div class="col-xl-5">

                {{-- Imagem --}}

        </div>


        

    </div>


    </div>

    <script>
        // document.getElementById('formConta').addEventListener('submit', function(event) {
            
        //     event.preventDefault(); // Impedir o envio padrão do formulário
        //     console.log('Estou funcionando...');

        //     // Pegar os dados vindo do formulário
        //     var dataEmissao = document.getElementById('dataEmissaoConta').value;

        //     var comprovativo = document.getElementById('comprovativoBancario').value;

        //     alert(comprovativo);

        //     console.log('Comprovativo: ' + comprovativo.value);

        //     // console.log('A data é: ' + data);
        //     const conta = {
        //         data: dataEmissao,
        //     };

        //     fetch('http://localhost:8000/api/conta', {
        //         method: 'POST',
        //         headers: {
        //             'Content-Type': 'application/json',
        //         },
        //         body: JSON.stringify(conta),
        //     })
        //     .then(response => {
        //         if (!response.ok) {
        //             throw new Error('Erro ao salvar os dados');
        //         }
        //         return response.json();
        //     })
        //     .then(data => {
        //         console.log(data.message); // Mensagem de sucesso
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });

        // });

    </script>
</div>



@endsection

@section('footer')
    @include('layout.componentes.footer')
@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush
