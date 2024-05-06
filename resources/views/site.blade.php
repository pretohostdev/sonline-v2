@extends('layout.container.app_publico')

@section('titulo', 'sonline')

@push('styles')
{{-- Inclusão do Bootstrap 5 no projecto --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
<link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}" />
<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.jpg')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/awesome/css/font-awesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/themify-icons/themify-icons.css') }}">
     
@endpush


{{-- <script src="https://unpkg.com/scrollreveal"><script/>  --}}


@section('header')
    @include('layout.componentes.header_public')
@endsection


@section("corpo_publico")

<div class="conteudo_publico">
    
    <div class="row">
        <div class="col-md-12">
            <div class="w-100 d-flex justify-content-center align-items-center" style="height: 600px; background-color:#062f4f">
                <div style="text-align:center;">
                    <h1 id="servicos" class="text-light tituloAnimado">Sonline Service</h1>
                    <p style="width: 500px; font-size:16pt;" class="text-light">
                        Descubra destinos incríveis, planeje suas aventuras e crie memórias inesquecíveis com os 
                        pacotes personalizados da nossa agência.
                    </p>

                    <button class="btn btn-round btn-light mt-4" data-toggle="modal" data-target="#verticalCenter"> <span style="font-size: 13pt">Agendar viagem agora</span></button>
                
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="height: 600px;">
        <div class="col-lg-6 d-flex justify-content-center">
            <img src="{{asset("assets/img/agendar.png")}}" alt="Agendar visto">
        </div>

        <div class="col-lg-6 bg-dark d-flex justify-content-center align-items-center">
            <div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-light tituloAnimado" style="">Agende seu visto</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p style="width: 500px; font-size:15pt;">
                            Com um processo simples e eficiente, oferecemos assistência especializada para que você agende seu visto 
                            sem complicações
                        </p>
                        <button class="btn btn-round btn-light mt-4" data-toggle="modal" data-target="#verticalCenter"> <span style="font-size: 13pt">Agendar visto agora</span></button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="row" style="height: 600px;">
        
        <div class="col-lg-6 bg-dark d-flex justify-content-center align-items-center">
            <div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-light tituloAnimado" style="">Solicite moeda</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p style="width: 500px; font-size:15pt;">
                            Com taxas competitivas e um processo simples, garantimos que você tenha a moeda certa 
                            em mãos antes de partir para seu destino.
                        </p>

                        <button class="btn btn-round btn-light mt-4" data-toggle="modal" data-target="#verticalCenter"> <span style="font-size: 13pt">Solicite moeda agora</span></button>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="col-lg-6 d-flex justify-content-center" style="width: inherit; height:inherit">
            <img src="{{asset("assets/img/cambio.png")}}" alt="Agendar visto" class="w-100 h-100">
        </div>

    </div>

   

    <!-- Modal solicitar Moeda -->
    <div class="modal fade" id="verticalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verticalCenterTitle">SOLICITAÇÃO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-dark">
                        Para solicitar o serviço em questão, precisa entrar com a sua conta, caso já tenha, ou
                        criar uma conta para estar a par de tudo. Use os botão abaixo para entrar ou criar uma conta.
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="{{route('login')}}" type="button" data-login-url="{{ route('login') }}" class="btn btn-primary btn-block" data-dismiss="modal" id="loginButton">Entrar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6 round">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive ml-2" style="overflow: auto; height:400px">
                        <table class="table table-hover mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">MOEDA</th>
                                    <th scope="col">VALOR</th>
                                </tr>
                            </thead>

                            <tbody class="table-secondary" id="tabelaMoeda">
                                {{-- Corpo da tabela foi carregado com --}}
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center">
                            <div class="spinner-border" role="status" id="spinnerTabela">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-4">
            
            <div class="card card-statistics">
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
        

    </div>

    <div class="row mt-2">
        <div class="col-md-12">
            <div class="w-100 d-flex justify-content-center align-items-center" style="height: 600px; background-color:#062f4f">
                <div style="text-align:center;">
                    <h1 class="text-light tituloAnimado">Abertura de conta</h1>
                    <p style="width: 500px; font-size:16pt;">
                        Desfrute de acesso fácil aos serviços oferecidos pelo acesso a uma conta wise, seja para suas finanças 
                        pessoais ou empresariais.
                    </p>

                    <button class="btn btn-round btn-light mt-4" data-toggle="modal" data-target="#verticalCenter"> <span style="font-size: 13pt">Solicitar abertura de conta</span></button>
                
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 d-flex justify-content-center">

        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12 mr-auto">
                    <div class="d-flex justify-content-center align-items-center bg-dark">
                        <img class="card-img-top" src="assets/img/filial.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h4 class="card-title">Filial Amazon</h4>
                        <p class="card-text">
                            Com a confiança e qualidade da marca Amazon, oferecemos uma experiência de compra 
                            segura e conveniente. Encontre tudo o que você precisa em um só lugar e desfrute da 
                            praticidade de fazer suas compras online conosco.
                        </p>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center align-items-center bg-dark" s>
                            <img class="card-img-top" src="assets/img/redirecionamento.png" alt="Card image cap">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <h4 class="card-title">Redirecionamento de Produtos</h4>
                            <p class="card-text">
                                Nosso serviço de redirecionamento de produtos permite que você receba suas compras de lojas 
                                internacionais de forma rápida e fácil. Com um endereço de entrega de Portugal e Angola, 
                                você pode comprar em lojas online de todo o mundo e enviar seus produtos para nós.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <button href="" class="btn btn-block btn-dark" data-toggle="modal" data-target="#verticalCenter">Solicitar Redirecionamento</button>
                    </div>
                </div>
        </div>
    </div>


    {{-- Lista de Produtos da Amazon --}}
    <div class="row mt-4 mb-4">
        <div class="container">
            <div class="col-lg-12 d-flex justify-content-center align-items-center p-2" style="background-color:#062f4f">
                <div class="text-center">
                    <h3  class="text-light" style="margin:0;padding:0">Lista de produtos Amazon</h3>
                </div>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="container">
            <div class="lista-horizontal">
                <ul>
                    @foreach ($produtos as $produto )
                   
                    <li>
                        <div class="card" style="width: 18rem;">
                            @if ($produto->imagem)
                                <img src="{{url("storage/{$produto->imagem}") }}" class="card-img-top" alt="telefone">
                            @endif
                            <div class="card-body">
                              <h5 class="card-title">{{$produto->nome}}</h5>
                              <p class="card-text" style="width: inherit">700$</p>
                              <p>Descrição - Importante</p>
                              <a href="{{$produto->link}}" class="btn btn-block btn-info ">Comprar</a>
                            </div>
                          </div>
                      </li>
                    @endforeach
                  
                </ul>
              </div>
        </div>
    </div>

<div class="row mt-5">
    <div class="container">
        <div class="col-lg-12">
            <div class="">
                <h2>Links de afiliado</h2>
                <hr>
            </div>
        </div>
    </div>

</div>
      
  <div class="row mt-4">

    <div class="container">
        <div class="col-lg-10">
            <div class="tab nav-border-bottom">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" id="home-02-tab" data-toggle="tab" href="#home-02" role="tab" aria-controls="home-02" aria-selected="true">O que é?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-02-tab" data-toggle="tab" href="#profile-02" role="tab" aria-controls="profile-02" aria-selected="false">O que significa ser Afiliado?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="portfolio-02-tab" data-toggle="tab" href="#portfolio-02" role="tab" aria-controls="portfolio-02" aria-selected="false">Como a empresa ganha?</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade py-3 active show" id="home-02" role="tabpanel" aria-labelledby="home-02-tab">
                        <p class="text-dark" style="font-size: 13pt">Um link de afiliado é um <b>URL único</b> atribuído a um afiliado que participa de um programa de marketing de 
                            afiliados. Esse tipo de link é usado para rastrear o tráfego e as vendas geradas por um afiliado 
                            específico. Quando um usuário clica em um link de afiliado e realiza uma ação desejada (como fazer 
                            uma compra ou preencher um formulário), o afiliado é creditado pela referência e pode receber uma 
                            comissão ou outro tipo de compensação, dependendo dos termos do programa de afiliados..
                        </p>
                    </div>
                    <div class="tab-pane fade py-3" id="profile-02" role="tabpanel" aria-labelledby="profile-02-tab">
                        <p class="text-dark" style="font-size: 13pt">
                            Ser afiliado, significa ser um <b>parceiro comercial</b> de uma empresa
                            ou marca que oferece um programa de afiliados. Os afiliados promovem os produtos ou serviços dessa 
                            empresa em troca de uma comissão ou outra forma de compensação por vendas, tráfego ou ações específicas 
                            geradas através de seus esforços de marketing.
                        </p>
                    </div>
                    <div class="tab-pane fade py-3" id="portfolio-02" role="tabpanel" aria-labelledby="portfolio-02-tab">
                        <p class="text-dark" style="font-size: 13pt">Tanto a empresa anunciante quanto o afiliado têm a oportunidade de ganhar de diferentes maneiras:</p>
                        <br>
                        <ul>
                            <li class="text-dark" style="font-size: 13pt">
                                <b>Vendas direta</b>: Quando um cliente clicado por um afiliado realiza uma compra, a empresa afiliada recebe 
                                uma parte da receita da venda como comissão. Esse é o modelo mais comum de remuneração no marketing de 
                                afiliados. A comissão pode ser uma porcentagem fixa do valor da venda ou um valor fixo por transação.
                            </li>

                            <li class="text-dark" style="font-size: 13pt">
                                <b>Tráfego qualificado</b>: Mesmo se o cliente não realizar uma compra imediata, a empresa afiliada pode ganhar 
                                com o tráfego direcionado pelo afiliado. Por exemplo, se o cliente clicar no link de afiliado e se 
                                inscrever para uma lista de e-mails ou preencher um formulário de lead, a empresa afiliada pode ganhar 
                                uma comissão por cada lead gerado.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

    {{-- Sobre --}}
  <div class="row mt-4 d-flex justify-content-center">

    <div class="col-lg-4 d-flex justify-content-end align-items-center" style="height: 800px">
        <h2 id="consultoria" class="text-info">Consultoria</h2>
    </div>


    <div class="col-lg-8 d-flex justify-content-cente align-items-cente" style="height: 800px">
        <img src="{{asset('assets/img/consultoria.jpg')}}" alt="consultoria" height="" width="100%">
    </div>
    
  </div>

  {{-- Contactos --}}
  <div class="row mt-4 d-flex justify-content-center">
    
    <div class="col-lg-6 col-lg-4 d-flex justify-content-end align-items-cente bg-dark" style="height: 400px">
        <div>
            <img src="{{asset('assets/img/contacto.png')}}" alt="contactos" height="100%">
        </div>
    </div>

    <div class="col-lg-4 d-flex align-items-center bg-secondary" style="height: 400px">
        <div style="">
            <h2 class="text-light" id="contacto">Contactos</h2>
            <h4 class="text-light">Unitel:934962288</h4>
            <h4 class="text-light">Africell:945029144</h4>
            <h4 class="text-light">Email:claudiorufino@gmail.com</h4>
        </div>
    </div>
  </div>

    
  </div>

@endsection

@section('footer')
    @include('layout.componentes.footer_public')
@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/animacao.js')}}"></script>  
   
    
@endpush

