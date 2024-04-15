<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/meu_estilo.css">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.jpg')}}">
    
    <title>Criar uma conta</title>
</head>
<body>
    
  <div class="d-flex justify-content-center">  
    <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
        <div class="d-flex align-items-center h-100-vh">
            <div class="register p-5">
                <div class="d-flex justify-content-center">
                    <img src="assets/img/logo-registar.png" alt="Logo sonline">
                </div>
                <p>Crie uma conta de forma rápida e simples para usufruir dos nossos serviços plenamente</p>
                <form action="" class="mt-2 mt-sm-5">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Primeiro Nome*</label>
                                <input type="text" class="form-control" placeholder="Primeiro Nome" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Último Nome*</label>
                                <input type="text" class="form-control" placeholder="Último Nome" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Email*</label>
                                <input type="email" class="form-control" placeholder="Email" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Senha*</label>
                                <input type="text" class="form-control" placeholder="Senha" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Confirmar Senha*</label>
                                <input type="password" class="form-control" placeholder="Confirmar Senha" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Aceito os termos & políticas
                                </label>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <a href="auth-login.html" class="btn btn-block text-uppercase text-white btn-cor">Criar Conta</a>
                        </div>
                        <div class="col-12  mt-3">
                            <p>Já possui uma conta ?<a href="auth-login.html" class="text-primary"> Entrar</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
   
</body>
</html>