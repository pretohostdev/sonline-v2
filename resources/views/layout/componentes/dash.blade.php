<nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="{{route('homeCliente')}}">
               <img class="logo_icon img-responsive" src="{{asset('assets/img/logo.jpg')}}" alt="#" />
            </a>
          </div>
       </div>
       <div class="sidebar_user_inf">
          <div class="d-flex justify-content-center">
             <div class="user_img">
                <img class="img-responsive" src="{{asset('assets/img/logo.jpg')}}" alt="#" />
            </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>SONLINE</h4>
       <ul class="list-unstyled components">
          <li><a href="{{ route('visto.create') }}"><i class="fa fa-clock-o orange_color"></i> <span>Visto</span></a></li>
          <li><a href="{{ route('contaWise.create') }}"><i class="fa fa fa-cc-visa blue1_color"></i> <span>Conta</span></a></li>
          <li><a href="{{ route('moeda.create') }}"><i class="fa fa-credit-card red_color"></i> <span>Moeda</span></a></li>
          <li><a href="{{ route('agendamento.create') }}"><i class="fa fa-clock-o green_color"></i> <span>Agendamento</span></a></li>
          <li><a href="{{ route('redirecionamento.create') }}"><i class="fa fa-external-link orange_color"></i> <span>Redirecionamento</span></a></li>
          <div class="d-block d-md-none">
            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> <span>Sair</span></a></li>
         </div>
       </ul>
    </div>
 </nav>