{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}




<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel Administrativo | Login</title>

    <link href="{{asset('assests/painel/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assests/painel/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('assests/painel/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assests/painel/css/style.css')}}" rel="stylesheet">
    <meta name="csrf" value="{{ csrf_token() }}">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 style="border: solid 1px black" class="logo-name">AC</h1>

            </div>
            <h3>Sistema Administrativo </h3>
            <form class="m-t"  method="POST" action="{{ route('logar') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" value="daniel@daniel" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Senha" name="password" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Esqueceu sua senha?</small></a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('assests/painel/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('assests/painel/js/popper.min.js')}}"></script>
    <script src="{{asset('assests/painel/js/bootstrap.js')}}"></script>


</body>

</html>
