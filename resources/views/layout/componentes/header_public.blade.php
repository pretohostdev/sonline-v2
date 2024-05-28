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
                    <a href="#testemunho" class="meu-nav-link">Testemunhos</a>
                </li>
                <li class="meu-nav-item">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <a href="#contacto" class="meu-nav-link">Contactos</a>
                </li>
            </ul>
        </div>

        <div class="login-button">
            <a href="{{route('login')}}" class="btn btn-info btn-round">
                <i class="ti ti-2x ti-user mr-1" aria-hidden="true"></i>
                Entrar
            </a>
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
                    <a href="#testemunho" class="meu-nav-link">Testemunhos</a>
                </li>
                <li class="meu-nav-item">
                    <a href="#contacto" class="meu-nav-link">Contactos</a>
                </li>
            </ul>
            <div class="login-sm-button">
                <a href="{{route('login')}}" class="">Entrar</a>
            </div>
        </div>

        <div class="mobile-menu-icon">
            <button onclick="menuShow()">
                <img src="{{asset('assets/img/menu.svg')}}" alt="" class="icon">
            </button>
        </div>
        
    </nav>
</header>