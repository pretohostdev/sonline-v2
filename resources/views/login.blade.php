<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Login</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <link rel="icon" href="{{asset('assets/img/favicon.jpg')}}" type="image/jpg" />
      <link rel="stylesheet" href="{{asset('assets/pluto/css/bootstrap.min.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/pluto/style.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/pluto/css/responsive.css')}}" />
     
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="row mt-5 mb-1">
                     <img width="70" src="{{asset('assets/img/favicon.jpg')}}" alt="#" style="margin:0 auto" />
                  </div>
                  <div class="logo_login">
                     <div class="center">
                        <h2 class="text-light">Sonline Service</h2>
                     </div>
                  </div>
                  <div class="login_form">

                    @if ($errors->any())
                        <div class="alert alert-danger text-center">
                            <ul style="list-style: none;">
                                @foreach ($errors->all() as $error)
                                    <li class="text-dark"><strong>{{ $error }}</strong></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                     <form action="{{route('login.store')}}"  method="POST" class="mt-3 mt-sm-5">
                        @csrf
                        <fieldset>

                           <div class="col-12">
                              <div class="form-group mb-2">
                                  <label class="control-label">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
                              </div>
                           </div>

                           <div class="col-12">
                              <div class="form-group mb-2">
                                  <label class="control-label">Senha</label>
                                  <input type="password" class="form-control" name="password" value="{{old('email')}}" id="senha" required>
                              </div>
                           </div>

                           <div class="col-12">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                 <label class="form-check-label" for="flexCheckDefault">
                                 Lembrar senha
                                 </label>
                              </div>
                           </div>

                           <div class="col-12">
                              <div class="d-flex justify-content-end mt-2">
                                 <button type="submit" class="main_bt">Entrar</button>
                              </div>
                           </div>
                           <div class="col-12 d-flex justify-content-start mt-2">
                              <a class="forgot text-primary" href="{{route('registar')}}">Criar conta</a>
                           </div>
                           
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{asset('assets/pluto/js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/pluto/js/popper.min.js')}}"></script>
      <script src="{{asset('assets/pluto/js/bootstrap.min.js')}}"></script>
   </body>
</html>