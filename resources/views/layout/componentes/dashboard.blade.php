<nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="index.html">
               <img class="logo_icon img-responsive" src="{{asset('assets/img/logo.jpg')}}" alt="#" />
            </a>
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="user_profle_side">
             <div class="user_info">
                <h6>{{Auth::user()->name}}</h6>
                <p><span class="online_animation"></span> Admin Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>
            <a href="{{route('homeAdmin')}}" style="cursor: pointer">Home</a>
        </h4>
       <ul class="list-unstyled components">
          <li><a href="{{ route('admin.visto.index') }}"><i class="fa fa-clock-o orange_color"></i> <span>Visto</span></a></li>
          <li><a href="{{ route('admin.conta.index') }}"><i class="fa fa fa-cc-visa blue1_color"></i> <span>Conta</span></a></li>
          <li><a href="{{ route('admin.moeda.index') }}"><i class="fa fa-credit-card red_color"></i> <span>Moeda</span></a></li>
          <li><a href="{{ route('admin.produto.create') }}"><i class="fa fa-amazon red_color"></i> <span>Produtos Amazon</span></a></li>
          <li><a href="{{ route('admin.agendamento.index') }}"><i class="fa fa-clock-o green_color"></i> <span>Agendamento</span></a></li>
          <li><a href="{{ route('admin.redirecionamento.index') }}"><i class="fa fa-external-link orange_color"></i> <span>Redirecionamento</span></a></li>
          <div class="d-block d-md-none">
            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> <span>Sair</span></a></li>
         </div>
       </ul>
    </div>
 </nav>