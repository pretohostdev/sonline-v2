<!-- Inicio do Header do sistema -->
<header class="app-header top-bar">
    <!-- begin navbar -->
    <nav class="navbar navbar-expand-md navbar-info">
        <div class="navbar-header d-flex align-items-center bg-white"> 
            <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
            
            <a class="navbar-brand mt-3" href="javascript:void(0)">
                <img src="{{asset('assets/img/logo-registar.png')}}" class="img-fluid logo-desktop" alt="logo"/>
                <img src="{{asset('assets/img/logo-pequeno.png')}}" class="img-fluid logo-mobile" alt="logo" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-align-left"></i>
            <i class="fe fe-menu"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navigation d-flex">
                <ul class="navbar-nav nav-left">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Links Rápidos
                            <i class="fe fe-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu mega-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <div class="row no-gutters">
                                <div class="col-sm-2 p-20">
                                    <h4>Criar Conta</h4>
                                    <ul>
                                        <li class="nav-link text-primary">
                                            <a href="{{route('registar')}}">Clique aqui</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-2 p-20">
                                    <h4>Entrar</h4>
                                    <ul>
                                        <li class="nav-link text-primary">
                                            <a href="{{route('login')}}">Clique aqui</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-3 p-20">
                                    <h4>Contactos</h4>
                                    <ul>
                                        <li class="nav-link text-primary">
                                            <a href="{{route('login')}}">Email:claudiorufino@gmail.com</a>
                                        </li>

                                        <li class="nav-link">
                                            <a href="{{route('login')}}">Telefone 1:934962288</a>
                                        </li>

                                        <li class="nav-link">
                                            <a href="{{route('login')}}">Telefone 2:945029144</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-2 p-20">
                                    <h4>Endereço</h4>
                                    <ul>
                                        <li class="nav-link">
                                            <a href="javascript:void(0)">Cacuaco</a>
                                        </li>

                                        <li class="nav-link">
                                            <a href="javascript:void(0)">Centralidade do sequele</a>
                                        </li>

                                        <li class="nav-link">
                                            <a href="javascript:void(0)">bloco 4 prédio 7</a>
                                        </li>

                                        <li class="nav-link">
                                            <a href="javascript:void(0)">apartamento 302A</a>
                                        </li>

                                        <li class="nav-link">
                                            <a href="javascript:void(0)">junto à empresa Eco-fluxo</a>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link " id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Social
                            <i class="fe fe-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-link" href="javascript:void(0)">
                                Email 
                                <i class="fe fe-mail"></i>
                            </a>
                            <a class="dropdown-item nav-link" href="javascript:void(0)">
                                Facebook
                                <i class="fe fe-facebook"></i>
                            </a>
                            <a class="dropdown-item nav-link" href="javascript:void(0)">Twitter
                                <i class="fe fe-twitter"></i>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                        <a href="javascript:void(0)" class="nav-link expand">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-right ml-auto" id="ul_nav">
                    
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="x">
                            Início
                        </a>
                    </li>

                    <li class="nav-item mr-4">
                        <a class="nav-link" href="">
                            Serviços
                        </a>
                    </li>

                    <li class="nav-item text-primary mr-3">
                        <a class="nav-link" href="" id="" role="button">
                            Sobre
                        </a>
                    </li>

                    <li class="nav-item mr-3">
                        <a class="nav-link " href="" id="">
                            Contacto
                        </a>
                    </li>
                </ul>

                <form class="form-inline my-2 mr-3">
                    <i class="ti ti-2x ti-user mr-1 text-dark"></i>
                    <a href="{{route('login')}}" class="my-2" style="color:#007bff">
                        Entrar
                    </a>
                </form>

            </div>
        </div>
    </nav> 

</header>