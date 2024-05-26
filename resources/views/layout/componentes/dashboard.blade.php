<nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="index.html">
               <img class="logo_icon img-responsive" src="{{asset('assets/img/logo.jpg')}}" alt="#" />
            </a>
          </div>
       </div>
       <div class="sidebar_user_inf">
          <div class="user_profle_side">
             <div class="user_info">
                <h6>{{Auth::user()->name}}</h6>
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>SONLINE</h4>
       <ul class="list-unstyled components">
          <li><a href="{{ route('admin.visto.index') }}"><i class="fa fa-clock-o orange_color"></i> <span>Visto</span></a></li>
          <li><a href="{{ route('admin.conta.index') }}"><i class="fa fa fa-cc-visa blue1_color"></i> <span>Conta</span></a></li>
          <li><a href="{{ route('admin.moeda.index') }}"><i class="fa fa-credit-card red_color"></i> <span>Moeda</span></a></li>
          <li><a href="{{ route('admin.produto.create') }}"><i class="fa fa-amazon red_color"></i> <span>Produtos Amazon</span></a></li>
          <li><a href="{{ route('admin.agendamento.index') }}"><i class="fa fa-clock-o green_color"></i> <span>Agendamento</span></a></li>
          <li><a href="{{ route('admin.redirecionamento.index') }}"><i class="fa fa-external-link orange_color"></i> <span>Redirecionamento</span></a></li>
       </ul>
    </div>
 </nav>