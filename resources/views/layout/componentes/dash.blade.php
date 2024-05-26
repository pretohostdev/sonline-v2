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
          <li><a href="{{ route('visto.create') }}"><i class="fa fa-clock-o orange_color"></i> <span>Visto</span></a></li>
          <li><a href="{{ route('contaWise.create') }}"><i class="fa fa fa-cc-visa blue1_color"></i> <span>Conta</span></a></li>
          <li><a href="{{ route('moeda.create') }}"><i class="fa fa-credit-card red_color"></i> <span>Moeda</span></a></li>
          <li><a href="{{ route('agendamento.create') }}"><i class="fa fa-clock-o green_color"></i> <span>Agendamento</span></a></li>
          <li><a href="{{ route('redirecionamento.create') }}"><i class="fa fa-external-link orange_color"></i> <span>Redrecionamento</span></a></li>
       </ul>
    </div>
 </nav>