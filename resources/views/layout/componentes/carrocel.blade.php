<div style="width:100%; margin-top: 60px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/img/banner-1.png')}}" alt="First slide">

                <div class="carousel-caption d-none d-md-block mb-5">
                    <div class="row">
                        <div class="col-12">
                          <div class="d-flex justify-content-start">
                            <div>
                                <h3 class="text-info">Agendamento de viagem</h4>
                                <h5 class="text-dark">Agenda já a tua próxima viagem com a Sonline Service.</h4>
                                <div class="">
                                    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#verticalCenter">Agendar</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/banner-2.png')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block mb-5">
                    <div class="row">
                        <div class="col-12">
                          <div class="d-flex justify-content-start">
                            <div>
                                <h3 class="text-info">Redirecionamento de produto</h4>
                                <h5 class="text-dark">Confira os produtos Amazon a Sonline Service.</h4>
                                <div class="">
                                    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#verticalCenter">Redirecionar</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/banner-3.png')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block mb-5">
                    {{-- <div class="row">
                        <div class="col-12">
                          <div class="d-flex justify-content-start">
                            <div>
                                <h3 class="text-info">Solicitação de Moeda</h4>
                                <h5 class="text-dark">Experimente o melhor câmbio do mercado.</h4>
                                <div class="">
                                    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#verticalCenter">Solicitar</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div> --}}
                  </div>
            </div>
        </div>
        <button class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>