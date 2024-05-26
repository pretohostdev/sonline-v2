<header>
    <nav class="meu-navbar">
        <div class="logo-nav">
            <img src="{{asset('assets/img/nav-logo.jpg')}}" class="img-fluid logo">
        </div>

        <div class="meu-nav-list">
            <ul class="ul_nav">
                <li class="meu-nav-item">
                    <i class="fa fa-home" aria-hidden="true"></i> 
                    <a href="#inicio" class="meu-nav-link">Início</a>
                </li>

                <li class="meu-nav-item">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <a href="#servicos" class="meu-nav-link">Serviços</a>
                </li>
                <li class="meu-nav-item">
                    <i class="fa fa-amazon" aria-hidden="true"></i>
                    <a href="#produtos" class="meu-nav-link">Produtos</a>
                </li>
                <li class="meu-nav-item">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <a href="#testemunho" class="meu-nav-link">Testemunho</a>
                </li>
                <li class="meu-nav-item">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <a href="#contacto" class="meu-nav-link">Contactos</a>
                </li>
            </ul>
        </div>

        <div class="login-button">
            <a href="{{route('login')}}" class="">Entrar</a>
        </div>

        <div class="mobile-menu">
            <ul class="ul_nav">
                <li class="meu-nav-item">
                    <a href="#inicio" class="meu-nav-link">Início</a>
                </li>
                <li class="meu-nav-item">
                    <a href="#servicos" class="meu-nav-link">Serviços</a>
                </li>
                <li class="meu-nav-item">
                    <a href="#produtos" class="meu-nav-link">Produtos</a>
                </li>
                <li class="meu-nav-item">
                    <a href="#testemunho" class="meu-nav-link">Testemunho</a>
                </li>
                <li class="meu-nav-item">
                    <a href="#contacto" class="meu-nav-link">Contactos</a>
                </li>
            </ul>
            <div class="login-button">
                <a href="{{route('login')}}" class="">Entrar</a>
            </div>
        </div>

        <div class="mobile-menu-icon">
            <button onclick="menuShow()">
                <img src="{{asset('assets/img/menu-open.svg')}}" alt="" class="icon">
            </button>
        </div>
        
    </nav>
</header>







{{-- <!-- Inicio do Header do sistema -->
<header class="app-header top-bar">
    <nav class="navbar navbar-expand-md">
        <div class="navbar-header d-flex align-items-center bg-white"> 
            <a class="navbar-brand mt-2" href="javascript:void(0)">
                <img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid logo-desktop logo" alt="logo" style="width: 90px" />
            </a>
        </div>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-menu"></i>
        </button> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navigation d-flex bg-white">
                <ul class="navbar-nav nav-left">
                    <li class="nav-item">
                        <a class="nav-link" style="color:#2779a7;" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACESSO RÁPIDO
                            <i class="fe fe-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu mega-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <div class="row no-gutters">
                                <div class="col-sm-2 p-20 bg-secondary">
                                    <h4> <a href="{{route('registar')}}" class="text-light"><i class="fa fa-user-plus" aria-hidden="true"></i> Criar Conta</a></h4>
                                </div>
                                <div class="col-sm-2 p-20 bg-secondary">
                                    <h4><a href="{{route('login')}}" class="text-light"><i class="fa fa-sign-in" aria-hidden="true"></i> Entrar</a></h4>
                                </div>

                                <div class="col-sm-4 p-20 bg-dark">
                                    <h4 class="text-light">Contactos</h4>
                                    <ul>
                                        <li class="nav-link text-light">
                                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i> sonlinesolucoes@gmail.com</span>
                                        </li>

                                        <li class="nav-link text-light">
                                            <span><i class="fa fa-phone" aria-hidden="true"></i> 947937025</span>
                                        </li>

                                        <li class="nav-link text-light">
                                            <span><i class="fa fa-phone" aria-hidden="true"></i> 936132172</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-4 p-20 bg-dark">
                                    <h4 class="text-light"><i class="fa fa-map-marker" aria-hidden="true"></i> Endereço</h4>
                                    <ul>
                                        <li class="nav-link text-light">
                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i> Cacuaco</span>
                                        </li>

                                        <li class="nav-link text-light">
                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i> Centralidade do sequele</span>
                                        </li>

                                        <li class="nav-link text-light">
                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i> bloco 4 prédio 7</span>
                                        </li>

                                        <li class="nav-link text-light">
                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i> apartamento 302A</span>
                                        </li>

                                        <li class="nav-link text-light">
                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i> junto à empresa Eco-fluxo</span>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link" style="color: #2779a7;" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_blank">SOCIAL
                            <i class="fe fe-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-link" style="color: #2779a7;" target="_blank" href="https://www.facebook.com/share/yncW4ujbVL8MMPQK/?mibextid=dGKdO6">
                                <i class="fa fa-facebook" aria-hidden="true"></i> Facebook
                            </a>
                            <a class="dropdown-item nav-link" style="color: #2779a7;" target="_blank" href="https://www.instagram.com/sonline_services">
                                <i class="fa fa-instagram" aria-hidden="true"></i> Instagram
                            </a>
                        </div>
                    </li>
                    
                </ul>

                <ul class="navbar-nav nav-left ml-auto" id="ul_nav">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">
                            <i class="fa fa-home" aria-hidden="true"></i> 
                            Início
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">
                            <i class="fa fa-cubes" aria-hidden="true"></i>
                            Serviços
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#produtos" role="button">
                            <i class="fa fa-amazon" aria-hidden="true"></i> 
                            Produtos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#testemunho" role="button">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Testemunho
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            Contactos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}" style="font-weight: bolder;">
                            <i class="ti ti-2x ti-user" aria-hidden="true"></i>
                            Entrar
                        </a>
                    </li>

                </ul>

                
            </div>
        </div>
    </nav> 

</header>
 --}}
