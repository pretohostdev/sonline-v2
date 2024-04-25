@extends('layout.container.app')

@section('titulo', 'Principal')

@push('styles')

    {{-- Inclusão do Bootstrap 5 no projecto --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{asset('assets/img/favicon.jpg')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.jpg')}}">

    {{-- Font e Icones alternativa --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/themify-icons/themify-icons.css') }}">
@endpush


@section('header')
    @include('layout.componentes.headerCliente')
@endsection

@section('dashboard')
    @include('layout.componentes.dashboardCliente')
@endsection

@section("corpo")

<div class="row" style="margin-top:100px">
    <div class="col-md-12">

        <div class="d-block d-lg-flex flex-nowrap align-items-center">
            <div class="page-title mr-4 pr-4 border-right">
                <h1>Sonline</h1>
            </div>
            <div class="breadcrumb-bar align-items-center">
                <nav>
                    <ol class="breadcrumb p-0 m-b-0">
                        <li class="breadcrumb-item">
                            <a href="x"></a>
                        </li>
                        <li>
                            Página Principal
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                <a href="{{ route('cliente.index') }}" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Clientes">
                    <i class="fe fe-users btn btn-icon text-primary"></i>
                </a>
                <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Solicitação de Moedas">
                    <i class="fe fe-credit-card btn btn-icon text-success"></i>
                </a>
                <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Abertura de conta">
                    <i class="fa fa-cc-visa btn btn-icon text-warning"></i>
                </a>
                <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar">
                    <i class="fa fa-calendar-o btn btn-icon text-cyan"></i>
                </a>
                <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Produtos">
                    <i class="fa fa-product-hunt btn btn-icon text-danger"></i>
                </a>
            </div>
        </div>


        <!--mail-Compose-contant-start-->
        <div class="row account-contant">
            <div class="col-12">
                <div class="card card-statistics">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                                <div class="page-account-profil pt-5">
                                    <div class="profile-img text-center rounded-circle">
                                        <div class="pt-5">
                                            <div class="bg-img m-auto">
                                                <img src="assets/img/avtar/01.jpg" class="img-fluid" alt="users-avatar">
                                            </div>
                                            <div class="profile pt-4">
                                                <h4 class="mb-1">Cláudio Rufino</h4>
                                                <p>cliente</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-5 profile-counter">
                                        <ul class="nav justify-content-center text-center">
                                            <li class="nav-item border-right px-3">
                                                <div>
                                                    <h4 class="mb-0">90</h4>
                                                    <p>Post</p>
                                                </div>
                                            </li>

                                            <li class="nav-item border-right px-3">
                                                <div>
                                                    <h4 class="mb-0">1.5K</h4>
                                                    <p>Messages</p>
                                                </div>
                                            </li>

                                            <li class="nav-item px-3">
                                                <div>
                                                    <h4 class="mb-0">4.4K</h4>
                                                    <p>Members</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="profile-btn text-center">
                                        <div><button class="btn btn-light text-primary mb-2">Atualizar foto</button></div>
                                        <div><button class="btn btn-danger">Delete</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6 col-12 border-t border-right">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Editar dados pessoais</h5>
                                    </div>
                                    <div class="p-4">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="name1">Nome completo</label>
                                                    <input type="text" class="form-control" id="name1" value="Alice Williams">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="title1">Email</label>
                                                    <input type="text" class="form-control" id="title1" value="claudiorufinop@gmail.com" readonly>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="phone1">Número do Telefone</label>
                                                    <input type="text" class="form-control" id="phone1" value="(01) 97 563 15613">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="email1">Gênero</label>
                                                    <input type="email" class="form-control" id="email1" value="Masculino" readonly>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-12">
                                                    <label class="mb-1">Data de Nascimento</label>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select id="inputState" class="form-control">
                                                        <option>Date</option>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                        <option>06</option>
                                                        <option>07</option>
                                                        <option>08</option>
                                                        <option>09</option>
                                                        <option>10</option>
                                                        <option selected="">11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                        <option>31</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <select id="inputState1" class="form-control">
                                                        <option>Month</option>
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option selected="">May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <select id="inputState2" class="form-control">
                                                        <option>Year</option>
                                                        <option>1984</option>
                                                        <option>1985</option>
                                                        <option>1986</option>
                                                        <option>1987</option>
                                                        <option>1988</option>
                                                        <option>1989</option>
                                                        <option>1990</option>
                                                        <option>1991</option>
                                                        <option>1992</option>
                                                        <option>1993</option>
                                                        <option selected="">1994</option>
                                                        <option>1995</option>
                                                        <option>1996</option>
                                                        <option>1997</option>
                                                        <option>1998</option>
                                                        <option>1999</option>
                                                        <option>2000</option>
                                                        <option>2001</option>
                                                        <option>2002</option>
                                                        <option>2003</option>
                                                        <option>2004</option>
                                                        <option>2005</option>
                                                        <option>2006</option>
                                                        <option>2007</option>
                                                        <option>2008</option>
                                                        <option>2009</option>
                                                        <option>2010</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputState3">País</label>
                                                    <select id="inputState3" class="form-control">
                                                        <option>Choose...</option>
                                                        <option selected="">London</option>
                                                        <option>Montreal</option>
                                                        <option>Delhi</option>
                                                        <option>Tokyo</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputState4">Cidade</label>
                                                    <select id="inputState4" class="form-control">
                                                        <option>Choose...</option>
                                                        <option selected="">England</option>
                                                        <option>California </option>
                                                        <option>Texas</option>
                                                        <option>Scotland </option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputZip">Bairro</label>
                                                    <input type="text" class="form-control" id="inputZip" value="EC1A 1BB">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Concordo com as alterações.
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Atualizar dados</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 border-t col-12">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Links Rápidos</h5>
                                    </div>
                                    <div class="p-4">
                                        <form>
                                            <div class="form-group">
                                                <a href="" class="btn btn-block btn-secondary" id="estadoVisto" >Estado do visto</a>
                                            </div>

                                            <div class="form-group">
                                                <a href="" class="btn btn-block btn-secondary" id="estadoVisto" >Estado da abertura de conta</a>
                                            </div>

                                            <div class="form-group">
                                                <a href="" class="btn btn-block btn-secondary" id="estadoVisto" >Estado da solicitação da moeda</a>
                                            </div>

                                            <div class="form-group">
                                                <a href="" class="btn btn-block btn-secondary" id="estadoVisto" >Estado do redirecionamento de Produto</a>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>
</div>
    


@endsection

@section('footer')
    @include('layout.componentes.footer')
@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush

