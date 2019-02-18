@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding: 30px 20px;margin-bottom: 0px;">
        <div class="col-md-7" style="background-color: white">
            <div class="backgorund" style="background-color: white;">
                <h3 class="text-center">What is e-Traceability?</h3><hr>
                <p style="font-size: 16px">Traceability is the ability to track any food, feed, medicine, medical device. ... In comparison with the paper-based system, electronic traceability (e-traceability) system establishes an information chain which is easier to access, copy and exchange; more scalable; and can be (semi) automated. <span style="font-style: italic;">To know more login</span></p>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">'
                    <div class="row">
                        <div class="col-md-6">
                            <div class="fish" style="border:1px solid #474545; padding: 10px;text-align: center;">
                                <p style="font-size: 20px">White Fish</p><hr>
                                <p style="font-size: 20px">Shrimp</p>
                            </div>
                        </div>
                        <div class="col-md-6"> 
                            <div class="pond" style="border:1px solid #474545; padding: 10px; text-align: center;">

                                <p style="font-size: 20px">Total Pond</p>
                                <p style="font-size: 20px">786</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>

                <div class="col-md-12">
                    <img src="{{ asset('assets/img/structure.png') }}" class="img-responsive">
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4 pull-right">
            <div class="card">
                <div class="card-header" style="text-align: center;font-size: 20px;font-weight: bold">{{ __('Login') }}</div>
                <hr>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
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
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color: black">
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
@endsection
