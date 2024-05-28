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
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="{{asset('assets/img/logo2.jpg')}}" alt="#" />
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
                           <div class="field">
                              <label class="label_field">Email</label>
                              <input type="email" name="email" value="{{old("email")}}" required />
                           </div>
                           <div class="field">
                              <label class="label_field">Senha</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot" href="{{route('registar')}}">Criar conta</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button type="submit" class="main_bt">Entrar</button>
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