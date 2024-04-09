@extends('layout.container.app')

@section('titulo', 'Início')

@push('styles')
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meu_estilo.css')}}" />
@endpush

@section('corpo')

<div class="row mt-4">
    <div class="col">
    <div class="card-deck m-b-30">
        <div class="card">
            <img class="card-img-top" src="assets/img/widget/07.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Sobre Agência</h4>
                <p class="card-text">One of the main areas that I work on with my clients is shedding these non-supportive beliefs and replacing them with beliefs that will help them to accomplish their desires.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="assets/img/widget/06.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Filial da Amazon</h4>
                <p class="card-text">An open discussion of your managerial board with our designers let's them gain a deeper insight of your plans, future goals and the preferred approach towards the achievement of those goals. </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="assets/img/widget/05.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Redirecionamento de Produtos</h4>
                <p class="card-text">This is the battle cry of author and journalist Robert Ringer. And he is absolutely correct. Not all of the decision-making, clarity, planning, focus and belief in the world, will get you to where you want to be, without taking action!</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection

@push('scripts')
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
@endpush

