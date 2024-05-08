<aside class="app-navbar">
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
</aside>