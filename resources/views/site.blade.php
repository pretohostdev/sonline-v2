@extends('layout.container.app_publico')

@section('titulo', 'sonline')

@push('styles')
{{-- Inclusão do Bootstrap 5 no projecto --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}">
<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.jpg')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />

 <!--====== Animate CSS ======-->
 <link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/LineIcons.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/awesome/css/font-awesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/themify-icons/themify-icons.css') }}">
     
@endpush

@section('header')
    @include('layout.componentes.header_public')
@endsection


@section("corpo_publico")

<div class="conteudo_publico">

    <section id="features" class="section" style="background-color: #F0F8FF;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="features-text section-header text-center">  
                <div>   
                  <h2 class="section-title tituloAnimado" style="font-family:Roboto" id="servicos">Nossos Serviços</h2>
                  <div class="desc-text">
                    <p class="text-secondary">A sonline Service é uma empresa cuja missão é simplificar e agilizar os serviços digitais</p>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <div class="row featured-bg">
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
              <div class="feature-item featured-border1">
                 <div class="feature-icon float-left">
                   <i class="lni lni-coin"></i>
                 </div>
                 <div class="feature-info float-left">
                   <h4>Divisas</h4>
                   <p>Facilitamos a compra e venda de moedas estrangeiras,<br> garantindo que você tenha acesso às melhores <br> taxas de câmbio e uma transação perfeita</p>
                 </div>
              </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
              <div class="feature-item featured-border2">
                 <div class="feature-icon float-left">
                   <i class="lni lni-visa"></i>
                 </div>
                 <div class="feature-info float-left">
                   <h4>Abertura de conta</h4>
                   <p>Simplificamos o processo de abertura de contas <br> internacionais como a Wise, permitindo que você<br> gerencie suas finanças globais com facilidade.</p>
                 </div>
              </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
              <div class="feature-item featured-border1">
                 <div class="feature-icon float-left">
                    <i class="lni lni-producthunt"></i>
                 </div>
                 <div class="feature-info float-left">
                   <h4>Redirecionamentos</h4>
                   <p>Tornamos suas compras online internacionais<br>ainda mais acessíveis, oferecendo serviços de <br>redirecionamento de produtos..</p>
                 </div>
              </div>
            </div>

             <div class="col-lg-6 col-md-6 col-xs-12 p-0">
               <div class="feature-item featured-border2">
                  <div class="feature-icon float-left">
                    <i class="lni-briefcase"></i>
                  </div>
                  <div class="feature-info float-left">
                    <h4>Agendamento de visto</h4>
                    <p>Eliminamos a complexidade do processo de  obtenção de <br> vistos, guiando-o através de cada etapa com expertise <br> e para o deixá-lo mais confiante.</p>
                  </div>
               </div>
             </div>
            
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
              <div class="feature-item featured-border3">
                 <div class="feature-icon float-left">
                   <i class="lni-reload"></i>
                 </div>
                 <div class="feature-info float-left">
                   <h4>Outros Agendamentos</h4>
                   <p>Além do agendamento mencionado, a Sonline service <br> lida com vários outros serviços de caracter online<br> por isso recomendamos entrar em contacto.
                 </div>
              </div>
            </div>
             <!-- End Col -->
            
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
              <div class="feature-item">
                 <div class="feature-icon float-left">
                    <i class="lni lni-amazon-original"></i>
                 </div>
                 <div class="feature-info float-left">
                   <h4>Produtos Amazon</h4>
                   <p>Como afiliados da Amazon, temos a oportunidade de<br> compartilhar produtos de qualidade com nossos <br>seguidores, ganhando comissões por isso.</p>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    {{-- <hr> --}}
    <section class="about-area pt-70 mt-2">
        <div class="container" style="background-color: #F0F8FF; margin-top:4px; border-top-left-radius:20px;">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title tituloAnimado"><span>Somos a filial da</span> amazon</h3>
                        </div>
                        <p class="text-dark"> Com a confiança e qualidade da marca Amazon, oferecemos uma experiência de compra 
                            segura e conveniente. Encontre tudo o que você precisa em um só lugar e desfrute da 
                            praticidade de fazer suas compras online conosco. Como filia da amazon, trazemos para si os melhores produtofa-spinpara desfrutares</p>
                        <a href="{{route('login')}}" class="main-btn mt-4 text-light" style="background-color:#3c9cfd">Solicitar um serviço</a>
                    </div>                
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{asset('assets/img/filial.jpg')}}" alt="about">
                    </div> 
                </div>
            </div> 
        </div> 
        <div class="about-shape-1">
            <img src="{{asset('assets/img/about-shape-1.svg')}}" alt="shape">
        </div>
    </section>
    </div>

    {{-- Seção de testemunho --}}
    <section id="testimonial" class="testimonial-area about-area pt-15">
        <div class="about-shape-2">
            <img src="{{asset('assets/img/about-shape-2.svg')}}" alt="shape">
        </div>
        <div class="container">
            <div class="row justify-content-right">
                <div class="col-lg-5">
                    <div class="section-title pb-40">
                        <h3 class="title tituloAnimado" id="testemunho">Testemunho <span>dos nossos clientes</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-active wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Estou realmente impressionado com a variedade de produtos oferecidos neste site! Encontrei tudo o que precisava em um só lugar. Definitivamente vou voltar mais vezes.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="{{asset('assets/img/textimonial-shape.svg')}}" alt="shape">
                                <img class="author" src="{{asset('assets/img/author-1.png')}}" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Sabino Solias</h6>
                                <p class="text">Programador, Laravel</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Este site superou todas as minhas expectativas! Além de uma ampla seleção de produtos, o atendimento ao cliente foi excepcional. Minha dúvida foi respondida rapidamente.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="{{asset('assets/img/textimonial-shape.svg')}}" alt="shape">
                                <img class="author" src="{{asset('assets/img/author-2.png')}}" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Manuel Chatanda</h6>
                                <p class="text">CEO, StackFree</p>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">A navegação fácil e intuitiva tornou simples encontrar o que eu estava procurando, e o processo de pagamento foi rápido e seguro. Recomendo totalmente.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="{{asset('assets/img/textimonial-shape.svg')}}" alt="shape">
                                <img class="author" src="{{asset('assets/img/author-3.png')}}" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Audilia Rufino</h6>
                                <p class="text">Adevogada</p>
                            </div>
                        </div>
                    </div> 
                </div>
                
            </div> 
        </div> 
       
    </section>

    

<div class="row mt-5">
    <div class="container">
        <div class="col-lg-12">
            <div class="text-center">
                <div class="section-title text-center pb-40">
                    <h3 class="slideShow">LINK DE AFILIADO<i class="lni lni-customer text-info ml-1"></i></h3>
                        <hr>
                </div>
            </div>
        </div>
    </div>

</div>
      
  <div class="row">

    <div class="container d-flex justify-content-center">
        <div class="col-lg-12">
            <div class="tab nav-border-bottom">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a style="font-size:13pt; font-family:serif" class="nav-link show text-dark" id="home-02-tab" data-toggle="tab" href="#home-02" role="tab" aria-controls="home-02" aria-selected="true">O que é?</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size:13pt; font-family:serif" class="nav-link text-dark" id="profile-02-tab" data-toggle="tab" href="#profile-02" role="tab" aria-controls="profile-02" aria-selected="false">O que significa ser Afiliado?</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size:13pt; font-family:serif" class="nav-link text-dark" id="portfolio-02-tab" data-toggle="tab" href="#portfolio-02" role="tab" aria-controls="portfolio-02" aria-selected="false">Como a empresa ganha?</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade py-3 active show" id="home-02" role="tabpanel" aria-labelledby="home-02-tab">
                        <p class="text-dark" style="font-size: 12pt;">Um link de afiliado é um <b>URL único</b> atribuído a um afiliado que participa de um programa de marketing de 
                            afiliados. Esse tipo de link é usado para rastrear o tráfego e as vendas geradas por um afiliado 
                            específico. Quando um usuário clica em um link de afiliado e realiza uma ação desejada (como fazer 
                            uma compra ou preencher um formulário), o afiliado é creditado pela referência e pode receber uma 
                            comissão ou outro tipo de compensação, dependendo dos termos do programa de afiliados..
                        </p>
                    </div>
                    <div class="tab-pane fade py-3" id="profile-02" role="tabpanel" aria-labelledby="profile-02-tab">
                        <p class="text-dark" style="font-size: 12pt;">
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
                            <li class="text-dark" style="font-size: 12pt;">
                                <b>Vendas direta</b>: Quando um cliente clicado por um afiliado realiza uma compra, a empresa afiliada recebe 
                                uma parte da receita da venda como comissão. Esse é o modelo mais comum de remuneração no marketing de 
                                afiliados. A comissão pode ser uma porcentagem fixa do valor da venda ou um valor fixo por transação.
                            </li>

                            <li class="text-dark" style="font-size: 12pt;">
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


    {{-- Lista de Produtos da Amazon --}}
    <div class="row mt-4 mb-2">
            <div class="col-lg-12 d-flex justify-content-center align-items-center" style="background-color:#062f4f">
                <div>
                    <h4  class="text-light m-0 p-2" id="produtos">Lista de produtos Amazon</h3>
                </div>
            </div>
    </div>
   
    <div class="row">
            <div class="lista-horizontal" style="background-color:#F0F8FF">
                <ul>
                    @foreach ($produtos as $produto )
                   
                    <li>
                        <div class="card rounded" style="width: 19rem;">
                            @if ($produto->imagem)
                              <div class="card-header" style="height: 200px">
                                <img src="{{url("storage/{$produto->imagem}") }}" class="card-img-top" height="100%" alt="telefone">
                              </div>
                            @endif
                            <div class="card-body rounded" style="background-color:#fff">
                              <h5 class="card-title text-dark">{{$produto->nome}}</h5>
                              <p class="card-text text-dark" style="width: inherit">{{$produto->preco}}</p>
                              <p class="text-dark">Descrição - {{$produto->descricao}}</p>
                              <a href="{{$produto->link}}" target="_blank" class="btn btn-block text-light mt-2" style="background-color:#044370">Comprar</a>
                            </div>
                          </div>
                      </li>
                    @endforeach
                  
                </ul>
              </div>
    </div>

    {{-- Consultoria --}}
    <div class="row">
      <article class="d-flex align-items-center justify-content-center">
        <div class="col-lg-6" style="height:200px">
          <h2 class="font-weight-bold tituloAnimado" style="color:white">Consultoria & <br>Acompanhamento de visto</h2> 
          <a href="{{route('login')}}" class="main-btn mt-4">Solicitar Serviço</a>
        </div>  
      </article> 

      <article class="d-flex align-items-center justify-content-center">
        <div class="row">
          <div class="col-lg-12" style="height:200px">
            <h2 class="font-weight-bold tituloAnimado text-center" style="color:white">Sonline Service</h2> 
            <h2 class="font-weight-bold tituloAnimado" style="color:white">Melhores preços do Mercado</h2> 
            <div class="d-flex align-items-center justify-content-center">
              <a href="{{route('login')}}" class="main-btn mt-4">Solicitar Serviço</a>
            </div>
          </div> 
        </div>
      </article> 

      <article></article>
    </div>
    
  <footer id="contacto" style="background-color:#062f4f">
  <section class="footer-Content">
    <div class="container">
      <div class="row d-flex justify-content-around">
        
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12 mt-4">
          <div class="widget">
            <h3 class="block-title">Crie uma conta</h3>
            <ul class="menu" style="list-style:none">
              <li><a href="{{route('login')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i> Entrar</a></li>
              <li><a href="{{route('login')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i> Sobre</a></li>
              <li><a href="{{route('login')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i> Preços</a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-1 mt-4">
          <div class="widget">
            <h3 class="block-title">Contacto</h3>
            <ul class="menu" style="list-style:none">
              <li><a href="javascript:void()"><i class="fa fa-phone" aria-hidden="true"></i> 947937025</a></li>
              <li><a href="javascript:void()"><i class="fa fa-phone" aria-hidden="true"></i> 936132172</a></li>
              <li><a href="javascript:void()"><i class="fa fa-envelope-o" aria-hidden="true"></i> sonlinesolucoes@gmail.com</a></li>
            </ul>
          </div>
        </div>
        

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12 mt-4">
          <div class="widget">
            <h3 class="block-title">Endereço</h3>
            <ul class="menu" style="list-style:none">
              <li><a href="javascript:void()">Cacuaco - Centralidade do sequele, Bloco 4, Prédio 7, Junto à empresa Eco-fluxo</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-info float-left">
              <p>Todos os direitos reservados, produzido pela <a href="https://www.petrohost.ao/" target="_blank"><strong>PetroHost</strong></a> &copy; 2024 - Sonline Service </p>
            </div>              
            <div class="float-right">  
              <ul class="footer-social">
                <li><a class="facebook" href="https://www.facebook.com/share/yncW4ujbVL8MMPQK/?mibextid=dGKdO6" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="https://www.instagram.com/sonline_services"  target="_blank"><i class="lni lni-instagram-original"></i></a></li>
                <li><a class="google-plus" href="javascript:void()"><i class="lni-google-plus"></i></a></li>
              </ul> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>

@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/animacao.js')}}"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>
   
    
@endpush

