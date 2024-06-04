    <header class="bg-white">
        <div class="d-none d-md-block">
            <nav class="navbar-web">
                <div class="logo-web">
                    <img src="{{asset('assets/img/favicon.jpg')}}" alt="logo">
                </div>

                <div class="menu-web">
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
                            <a href="#testemunho" class="meu-nav-link">Testemunhos</a>
                        </li>

                        <li class="meu-nav-item">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="#contacto" class="meu-nav-link">Contactos</a>
                        </li>
                    </ul>
                </div>

                <div class="botoes-navbar-web">
                    <a href="{{route('registar')}}" class="text-info">Registar</a>
                    <a href="{{route('login')}}" class="text-info">Entrar</a>
                </div>
            </nav>
        </div>

        <!-- Navbar versão mobile -->
        <div class="row">
        <div class="col-12 d-block d-md-none">
            <nav class="navbar-mobile">
                <div class="col-12 d-flex justify-content-center ">
                    <div class="logo-mobile mt-2">
                        <img src="{{asset('assets/img/favicon.jpg')}}" alt="logo">
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-12 d-flex justify-content-around align-items-center">
                        <div class="botoes-navbar-mobile">
                            <a href="{{route('registar')}}" class="text-info">Registar</a>
                            <a href="{{route('login')}}" class="text-info">Entrar</a>
                        </div>

                        <div class="botoes-navbar-mobile">
                            <button onclick="menuShow()">
                                    <img src="{{asset('assets/img/menu.svg')}}" class="icon">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="d-flex justify-content-center mb-2" style="background-color:rgb(5, 55, 86); border-radius:10px;">
                    <div class="menu-mobile">
                        <ul class="ul_nav">
                            <li class="meu-nav-mobile-item">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <a href="#inicio" class="meu-nav-link text-light">Início</a>
                            </li>
                            <li class="meu-nav-mobile-item">
                                 <i class="fa fa-cubes" aria-hidden="true"></i>
                                <a href="#servicos2" class="meu-nav-link text-white">Serviços</a>
                            </li>
                            <li class="meu-nav-mobile-item">
                                <i class="fa fa-amazon" aria-hidden="true"></i>
                                <a href="#produtos" class="meu-nav-link text-white">Produtos</a>
                            </li>
                            <li class="meu-nav-mobile-item">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <a href="#testemunho-mobile" class="meu-nav-link text-white">Testemunhos</a>
                            </li>
                            <li class="meu-nav-mobile-item">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="#contacto" class="meu-nav-link text-white">Contactos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>

            </div>
            </nav>
        </div>
    </header>
{{-- </div> --}}
{{-- </div> --}}