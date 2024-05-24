<!-- Inicio do Header do sistema -->
<header class="app-header top-bar">
    <!-- begin navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="navbar-header d-flex align-items-center bg-white"> 
            <a class="navbar-brand mt-2" href="{{ route('homeAdmin')}}">
                <img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid logo-desktop logo" alt="logo" style="width: 100px"/>
                <img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid logo-mobile logo" alt="logo" style="width: 100px" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-menu"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navigation d-flex">
                <ul class="navbar-nav nav-left">
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link sidebar-toggle" style="color:#2779a7">
                            <i class="fe fe-menu"></i>
                        </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link" style="color:#2779a7" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Social
                            <i class="fe fe-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item nav-link" style="color:#2779a7" target="_blank" href="https://www.facebook.com/share/yncW4ujbVL8MMPQK/?mibextid=dGKdO6">
                                Facebook
                            </a>
                            <a class="dropdown-item nav-link" style="color:#2779a7" target="_blank" href="https://www.instagram.com/sonline_services">Instagram
                            </a>
                        </div>
                    </li>
                    <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                        <a href="javascript:void(0)" class="nav-link expand">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-right ml-auto">
                   
                    <form class="form-inline my-2 mr-3 btnClienteSair">
                        <i class="ti ti-2x ti-user mr-1 " style="color:#2779a7"></i>
                        <a href="{{route('logout')}}" class="my-2 " style="color:#2779a7">
                            Sair
                        </a>
                    </form>
                        
                </ul>

            </div>
        </div>
    </nav> 

    <!-- end navbar -->

</header>