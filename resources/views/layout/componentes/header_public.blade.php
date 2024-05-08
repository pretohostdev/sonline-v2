<!-- Inicio do Header do sistema -->
<header class="app-header top-bar">
    <!-- begin navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="navbar-header d-flex align-items-center bg-white"> 
            
            <a class="navbar-brand mt-3" href="javascript:void(0)">
                <img src="{{asset('assets/img/logo-registar.png')}}" class="img-fluid logo-desktop" alt="logo"/>
                <img src="{{asset('assets/img/logo-pequeno.png')}}" class="img-fluid logo-mobile" alt="logo" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-menu"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navigation d-flex">
                <ul class="navbar-nav nav-left">
                    <li class="nav-item">
                        <a class="nav-link" style="color:#007bff" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Links Rápidos
                            <i class="fe fe-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu mega-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <div class="row no-gutters">
                                <div class="col-sm-2 p-20 bg-secondary">
                                    <h4> <a href="{{route('registar')}}" class="text-light">Criar Conta</a></h4>
                                </div>
                                <div class="col-sm-2 p-20 bg-secondary">
                                    <h4><a href="{{route('login')}}" class="text-light">Entrar</a></h4>
                                </div>

                                <div class="col-sm-3 p-20 bg-dark">
                                    <h4 class="text-light">Contactos</h4>
                                    <ul>
                                        <li class="nav-link text-light">
                                            <a href="{{route('login')}}">claudiorufino@gmail.com</a>
                                        </li>

                                        <li class="nav-link text-light">
                                            <a href="{{route('login')}}">934962288</a>
                                        </li>

                                        <li class="nav-link text-light">
                                            <a href="{{route('login')}}">945029144</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-2 p-20 bg-dark">
                                    <h4 class="text-light">Endereço</h4>
                                    <ul>
                                        <li class="nav-link text-light">
                                            <span>Cacuaco</span>
                                        </li>

                                        <li class="nav-link text-light">
                                            <span>Centralidade do sequele</span>
                                        </li>

                                        <li class="nav-link text-light">
                                            <span>bloco 4 prédio 7</span>
                                        </li>

                                        <li class="nav-link text-light">
                                            <span>apartamento 302A</span>
                                        </li>

                                        <li class="nav-link text-light">
                                            <span>junto à empresa Eco-fluxo</span>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link" style="color: #007bff" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_blank">Social
                            <i class="fe fe-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-link text-info" target="_blank" href="https://www.facebook.com/share/yncW4ujbVL8MMPQK/?mibextid=dGKdO6">
                                Facebook
                            </a>
                            <a class="dropdown-item nav-link text-info" target="_blank" href="https://www.instagram.com/sonline_services">Instagram
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
                        <a class="nav-link" href="#inicio">
                            Início
                        </a>
                    </li>

                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#servicos">
                            Serviços
                        </a>
                    </li>

                    <li class="nav-item text-primary mr-4">
                        <a class="nav-link" href="#produtos" role="button">
                            Produto
                        </a>
                    </li>

                    <li class="nav-item text-primary" style="margin-right:55px">
                        <a class="nav-link" href="#testemunho" role="button">
                            Testemunho
                        </a>
                    </li>

                    <li class="nav-item mr-4">
                        <a class="nav-link " href="#contacto" id="">
                            Contacto
                        </a>
                    </li>
                </ul>
                
                <form class="form-inline my-2 mr-3 btnClienteSair">
                    <i class="ti ti-2x ti-user mr-1" style="color:#007bff"></i>
                    <a href="{{route('login')}}" class="my-2" style="color:#007bff">
                        Entrar
                    </a>

            </div>
        </div>
    </nav> 

</header>