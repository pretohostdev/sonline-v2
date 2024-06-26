@extends('layout.container.app')

@section('titulo', 'Redirecionamento de Produtos')

@push('styles')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                            Redirecionamento de produto
                        </li>
                    </ol>
                </nav>
            </div>
            
            @include('layout.componentes.cabecalho_2')

        </div>

    <div class="row mt-2">

        <div class="col-xl-6">
            <div class="card card-statistics rounded">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-light">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{route('redirecionamento.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group"> 
                            <label for="nomeProduto" class="text-dark">Nome do produto</label>
                            <input type="text" class="form-control" value="{{ old('nome') }}" id="nomeProduto" name="nome" required>
                        </div>

                        <div class="form-group">
                            <label for="paisOrigem" class="text-dark">País de origem</label>
                            <select class="form-control" id="paisOrigem" name="paisorigem">
                                <option value="Portugal">Portugal</option>
                                <option value="Angola">Angola</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="paisDestino" class="text-dark">País de destino</label>
                            <select type="da" class="form-control" id="paisDestino" name="paisdestino">
                                <option value="Angola">Angola</option>
                                <option value="Portugal">Portugal</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="metodoEnvio" class="text-dark">Método de envio</label>
                            <select class="form-control" id="metodoEnvio">
                                <option value="DHL">DHL</option>
                                <option value="CTT">CTT</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="largura" class="text-dark">Largura</label>
                            <input type="number" class="form-control" value="{{ old('largura') }}" id="largura" name="largura">
                        </div>

                        <div class="form-group">
                            <label for="altura" class="text-dark">Altura</label>
                            <input type="number" class="form-control" value="{{ old('altura') }}" id="altura" name="altura">
                        </div>

                        <div class="form-group">
                            <label for="peso" class="text-dark">Peso <span style="font-size:8pt">(em grama)</span></label>
                            <input type="number" class="form-control" id="peso" name="peso"  required>
                        </div>

                        <div class="form-group">
                            <label for="fotoProduto" class="text-dark">Foto do produto</label>
                            <input type="file" class="form-control mt-2" name="fotoProduto">
                        </div>

                        <div class="input-group mb-3" id="divDolarRedirecionamento">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #ececec">Frete ou Preço de envio</span>
                            </div>
                            <input type="text" class="form-control" id="valorConvertido" name="valor" oninput="conversaoMoeda(id)" readonly>
                        </div>

                        <div class="input-group mb-3" id="divTaxaServico">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #ececec">Taxa de Serviço</span>
                            </div>
                            <input type="text" class="form-control" id="inputTaxaServico" value="2,99€" readonly>
                        </div>

                          <div class="input-group mb-3" id="divTaxaArmazenamento">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #ececec">Taxa de armazenamento</span>
                            </div>
                            <input type="text" class="form-control" id="inputTaxaArmazenamento" value="4,99€" readonly>
                            <div class="col-12">
                                <span style="font-size: 11px; color:red">A comissão de armazenamento do produto é de apenas sete (7) dias.</span>
                            </div>
                          </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control" value="{{$user_id}}" id="user_id" name="userId">
                        </div>

                        <div class="input-group mb-3" id="divTaxaServico">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #ececec">Total ou valor a pagar</span>
                            </div>
                            <input type="text" class="form-control" id="total_a_pagar" name="total_a_pagar" readonly>
                          </div>

                        <div class="form-group">
                            <label for="paisDestino" class="text-dark">Forma de pagamento</label>
<select class="form-control" id="metodoPagamento" name="metodoPagamento">
<option value="Revolut">Em Euro</option>
<option value="Iban">Em kwanza</option>
                            </select>
                        </div>

<div class="form-group" id="divResolut">
    <label for="pagamentoResolut" class="text-dark">Pagar no Revolut <span style="font-size:8pt"></span></label>
    <a href="https://checkout.revolut.com/pay/18d1f014-ff1c-4999-9d68-b13617a96d44" class="btn btn-block btn-primary"
        target="_blank">Pagar</a>
</div>
                        <div class="form-group" id="divIban">
                            <label for="referenciabancaria" class="text-dark">IBAN</label>
                            <input type="text" class="form-control" value="{{$sistema->iban}}" id="referenciabancaria" readonly>
                        </div>

                        <div class="form-group">
                            <label for="comprovativo" class="text-dark">Comprovativo Bancário</label>
                            <img src="{{asset('assets/img/pdf.png')}}" style="height:30px;">
                            <input type="file" class="form-control mt-2" name="comprovativo">
                        </div>

                        <div class="form-group">
<label for="descricao" class="text-dark">Informação adicional</label>
<textarea class="form-control" id="descricao" name="descricaoProduto"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Enviar pedido</button>
                    </form>
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

                        <div class="input-group mb-3" id="divKwanzaRedirecionamento">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #ececec" id="tipoEnvio">
                                </span>
                            </div>
                            <input type="text" class="form-control" id="pesoBase" readonly>
                        </div>

                    </div>
                </div>

            </div>

        </div>


    </div>


    </div>

    <script>

        // Conversão relativo ao envio de mercadoria com base aos tipos de envio - HDL versus CCT
        var metodoEnvio = document.getElementById('metodoEnvio');
        var tipoEnvio = document.getElementById('tipoEnvio');

        var pesoBase = document.getElementById('pesoBase');

        var valorConvertido = document.getElementById('valorConvertido');
        var total_a_pagar = document.getElementById('total_a_pagar');

        var peso = document.getElementById('peso');

        if(metodoEnvio.value == "DHL"){
            tipoEnvio.innerHTML = "DHL";
            pesoBase.value = "1kg - 90€";
            valorConvertido.value = "0";
            total_a_pagar.value = "0";
        }
        else{
            tipoEnvio.innerHTML = "CTT";
            pesoBase.value = "1kg - 40€";
            valorConvertido.value = "0";
            total_a_pagar.value = "0";
        }

        metodoEnvio.addEventListener('change', function(){
            var opcaoSelecionada = this.value;

            if(opcaoSelecionada == "DHL"){
                tipoEnvio.innerHTML = "DHL";
                pesoBase.value = "1kg - 90€";
                valorConvertido.value = "0";
                total_a_pagar.value = "0";
            }
            else{
                tipoEnvio.innerHTML = "CTT";
                pesoBase.value = "1kg - 40€";
                valorConvertido.value = "0";
                total_a_pagar.value = "0";
            }
            
            
        });

        peso.addEventListener('input', function(){
            if(metodoEnvio.value == "DHL"){
                valorConvertido.value = (peso.value*90)/1000 + "€";
total_a_pagar.value = ( Number((peso.value*90)/1000) + 2.99 + 4.99).toFixed(2) + "€";
}
else{
valorConvertido.value = (peso.value*40)/1000 + "€";
total_a_pagar.value = ( Number( (peso.value*90) / 1000 ) + 2.99 + 4.99).toFixed(2) + "€";
}
});


var metodoPagamento = document.getElementById('metodoPagamento');

var divIban = document.getElementById('divIban');
var divResolute = document.getElementById('divResolut');

        // Método de pagamento

carregamento();

metodoPagamento.addEventListener('change', (e)=>{
let metodoPagamento = e.target.value;

if(metodoPagamento == "Revolut"){
show(divResolute);
hide(divIban);

const montante = total_a_pagar.value;
converte("AOA", "EUR", montante)
.then(data => {
total_a_pagar.value = data.toFixed(2);
})
.catch(error => {
console.error('Erro ao buscar dados:', error);
});

}
else{
show(divIban);
hide(divResolute);
const montante = ( Number( (peso.value*90) / 1000 ) + 2.99 + 4.99);

converte("EUR", "AOA", montante)
.then(data => {
total_a_pagar.value = data.toFixed(2);
})
.catch(error => {
console.error('Erro ao buscar dados:', error);
});

}
});

function carregamento(){
if(metodoPagamento.value == "Revolut"){
var divResolute = document.getElementById('divResolut');
var divIban = document.getElementById('divIban');
show(divResolute);
hide(divIban);
}
else{
var divIban = document.getElementById('divIban');
var divResolute = document.getElementById('divResolut');
show(divIban);
hide(divResolute);
}
}

function hide(elemento){
elemento.style.display = "none";
}

function show(elemento){
elemento.style.display = "block";
}

async function converte(moedaBase, moedaPretendida, qtd) {

var url =
"https://www.bna.ao/service/rest/taxas/conversor/moeda?moedaOrigem="+moedaBase+"&"+"moedaDestino="+moedaPretendida+"&montante"+"="+qtd

try {
const response = await fetch(url);
const data = await response.json();
if(JSON.stringify(data) === '{}'){
return "indisponivel de momento, tente mais tarde";
}
else{
return data.genericResponse[1].montanteConvertido;
}
} catch (error) {
console.error('Erro ao buscar dados:', error);
throw error;
}
}
    </script>
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
