<!-- Inicio do Header do sistema -->
<header class="app-header top-bar">
    <!-- begin navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="navbar-header d-flex align-items-center bg-white"> 
            <a class="navbar-brand mt-2" href="javascript:void(0)">
                <img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid logo-desktop logo" alt="logo" style="width: 100px" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navigation d-flex bg-white">
                <ul class="navbar-nav nav-left">
                    <li class="nav-item">
                        <a class="nav-link" style="color:#2779a7;" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LINKS RÁPIDOS
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

                <ul class="navbar-nav ml-aut" id="ul_nav">
                    
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

                {{-- <form class="form-inline my-2 mr-3 btnClienteSair"> 
                    <i class="ti ti-2x ti-user mr-1" style="color:#2779a7;  font-weight: bolder;"></i>
                    <a href="{{route('login')}}" class="my-2" style="color:#2779a7;  font-weight: bolder;">
                        Entrar
                    </a>
                </form> --}}
            </div>
        </div>
    </nav> 

</header>


