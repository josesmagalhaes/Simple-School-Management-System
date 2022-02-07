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

    <title>{{ 'Controle Escolar | Registrar' }}</title>
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
              <p class="mb-4">Para entrar, primeiro registre-se.</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group last mb-4">
                <x-jet-label for="name" value="{{ __('Nome') }}" />
                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="form-group last mb-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="form-group last mb-4">
                <x-jet-label for="password" value="{{ __('Senha') }}" />
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="form-group last mb-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirme Senha') }}" />
                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Já tem registro?') }}
                </a>

                <x-jet-button class="btn text-white btn-block btn-danger">
                    {{ __('Registrar') }}
                </x-jet-button>
            </div>
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










