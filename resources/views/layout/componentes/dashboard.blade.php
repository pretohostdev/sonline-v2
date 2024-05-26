<nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="index.html">
               {{-- <img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /> --}}
            </a>
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             {{-- <div class="user_img">
                <img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" />
            </div> --}}
             <div class="user_info">
                <h6>John David</h6>
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>Sonline Service</h4>
       <ul class="list-unstyled components">
          <li><a href="{{ route('admin.visto.index') }}"><i class="fa fa-clock-o orange_color"></i> <span>Visto</span></a></li>
          <li><a href="{{ route('admin.conta.index') }}"><i class="fa fa fa-cc-visa blue1_color"></i> <span>Conta</span></a></li>
          <li><a href="{{ route('admin.moeda.index') }}"><i class="fa fa-credit-card red_color"></i> <span>Moeda</span></a></li>
          <li><a href="{{ route('admin.produto.create') }}"><i class="fa fa-amazon red_color"></i> <span>Produtos Amazon</span></a></li>
          <li><a href="{{ route('admin.agendamento.index') }}"><i class="fa fa-clock-o green_color"></i> <span>Agendamento</span></a></li>
          <li><a href="{{ route('admin.redirecionamento.index') }}"><i class="fa fa-external-link orange_color"></i> <span>Redrecionamento</span></a></li>
       </ul>
    </div>
 </nav>



{{-- <aside class="app-navbar">
    <div class="sidebar-nav scrollbar scroll_light" id="lateral">
        <ul class="metismenu " id="sidebarNav">
            <li class="nav-static-title text-secondary">Solicitação</li> 

            <li><a href="{{ route('admin.visto.index') }}" aria-expanded="false"><i class="fe fe-check-circle text-light"></i><span class="nav-title text-light">Visto</span></a> </li>
            <li><a href="{{ route('admin.moeda.index') }}" aria-expanded="false"><i class="fa fa-credit-card text-light"></i><span class="nav-title text-white">Moeda</span></a> </li>
            <li><a href="{{ route('admin.agendamento.index') }}" aria-expanded="false"><i class="fa fa-calendar-o text-light"></i><span class="nav-title text-white">Agendamento</span></a> </li>
            <li><a href="{{ route('admin.produto.create') }}" aria-expanded="false"><i class="fa fa-amazon text-light"></i><span class="nav-title text-white">Produtos Amazon</span></a> </li>
            <li><a href="{{ route('admin.conta.index') }}" aria-expanded="false"><i class="fa fa-cc-visa text-light"></i><span class="nav-title text-white">Abertura de Conta</span></a> </li>
            <li><a href="{{ route('admin.redirecionamento.index') }}" aria-expanded="false"><i class="fa fa-external-link text-light"></i><span class="nav-title text-white">Redirecionamento de Produto</span></a> </li>
        </ul>

        <ul class="metismenu" id="sidebarNav">
            <li class="nav-static-title text-dark">Sonline</li>
           
            <li><a href="javascript:void()" aria-expanded="false"><i class="fa fa-scribd text-light"></i><span class="nav-title text-white">Quem somos</span></a> </li>
            <li><a href="javascript:void()" aria-expanded="false"><i class="fa fa-users text-light"></i><span class="nav-title text-white">Nossos Parceiros</span></a> </li>
        </ul>

    </div>
</aside> --}}