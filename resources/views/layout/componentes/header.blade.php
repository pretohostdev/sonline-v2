<!-- Inicio do Header do sistema -->
<header class="app-header top-bar">
    <!-- begin navbar -->
    <nav class="navbar navbar-expand-md">
                                                            {{-- style="background-color:white --}}
        <div class="navbar-header d-flex align-items-center bg-white"> 
            <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
            <a class="navbar-brand" href="{{route('sonline')}}">
                <img src="{{asset('assets/img/logo-pequeno.png')}}" class="imfg-fluid logo-desktop" alt="logo"/>
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
                        <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                            <i class="fe fe-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Links Rápidos
                            <i class="fe fe-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu mega-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <div class="row no-gutters">
                                <div class="col-sm-2 p-20">
                                    <h4>UI Kit</h4>
                                    <ul>
                                        <li class="nav-link">
                                            <a href="ui-alerts.html">Alerts</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="ui-button.html">Buttons</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="ui-cards.html">Cards</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="ui-carousel.html">Carousel</a>
                                        </li>

                                        <li class="nav-link">
                                            <a href="ui-dropdowns.html">Dropdowns</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="ui-list-group.html">List Group</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="ui-modals.html">Modals</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="ui-progressbars.html">Progress Bars</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="ui-tabs.html">Tabs</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-2 p-20">
                                    <h4>Pages</h4>
                                    <ul>
                                        <li class="nav-link">
                                            <a href="page-account-settings.html">Account Settings</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="page-clients.html">Clients</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="page-contacts.html">Contacts</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="page-gallery.html">Gallery</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="page-pricing.html">Pricing</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="page-task-list.html">Task List</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="page-404.html">404</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="page-500.html">500</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="page-coming-soon.html">Coming Soon</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 p-20">
                                    <h4>Contact Us</h4>
                                    <div>
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Password1" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="Email1" placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Message" id="Textarea1" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="chart-wrap">
                                        <div class="p-20">
                                            <h4 class="mb-1">Page Views</h4>
                                            <p>Daily page visitors</p>
                                            <h2 class="text-primary font-xxl mt-2">80+</h2>
                                        </div>
                                        <div class="apexchart-wrapper">
                                            <div id="pageview"></div>
                                        </div>
                                    </div>
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
                <ul class="navbar-nav nav-right ml-auto">
                   
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Início
                        </a>
                    </li>

                    <li class="nav-item mr-4">
                        <a class="nav-link" href="javascript:void(0)" id="navbarDropdown3" role="button">
                            Serviços
                        </a>
                    </li>

                    <li class="nav-item text-primary mr-2">
                        <a class="nav-link" href="" id="" role="button">
                            Sobre
                        </a>
                    </li>

                    <li class="nav-item mr-2">
                        <a class="nav-link " href="" id="">
                            Contacto
                        </a>
                    </li>

                    <li class="nav-item ml-2">
                        <a class="nav-link" href="{{route('login')}}">
                            Sair
                        </a>
                    </li>
                        
                    {{-- </form> --}}
                </ul>

                

            </div>
        </div>
    </nav> 

    <!-- end navbar -->

    {{-- <div class="nav2">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">Sonline</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="dripicons dripicons-align-right"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link text-mute" href="#">Início <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Contactos</a>
              </li>
             
            </ul>
          </div>
        </nav> 
      </div> --}}
      {{-- Fim da segunda navegação --}}

      

</header>