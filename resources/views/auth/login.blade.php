<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="layoutlogin/fonts/icomoon/style.css">

    <link rel="stylesheet" href="layoutlogin/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="layoutlogin/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="layoutlogin/css/style.css">

    <title>{{ 'Controle Escolar | Login' }}</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="layoutlogin/images/undraw_file_sync_ot38.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>{{ 'Controle' }} <strong>{{ 'Escolar' }}</strong></h3>
              <p class="mb-4">Para entrar, insira seu email e senha nos espaços abaixo.</p>
            </div>

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
            @csrf
              <div class="form-group first">
                <label for="username" value="{{ __('Email') }}">{'Email'}</label>
                <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocu>

              </div>
              <div class="form-group last mb-4">
                <label for="password" value="{{ __('Password') }}">{'Senha'}</label>
                <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">{{ __('Lembre-me') }}</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                @if (Route::has('password.request'))
                <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">{{ __('Esqueci minha senha') }}</a></span>
                @endif 
              </div>

              <input type="submit" value="{{ __('Entrar') }}" class="btn text-white btn-block btn-danger">
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="layoutlogin/js/jquery-3.3.1.min.js"></script>
    <script src="layoutlogin/js/popper.min.js"></script>
    <script src="layoutlogin/js/bootstrap.min.js"></script>
    <script src="layoutlogin/js/main.js"></script>
  </body>
</html>
