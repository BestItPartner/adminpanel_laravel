@extends('layouts.sign')

@section('content')
<section id="wrapper">
    <div class="login-register" style="background-image:url({{URL::to('/')}}/theme/assets/images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf                                        
                    <!-- ============================================================== -->
                    <!-- Language -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <h3 class="box-title" style="float:left;">{{ __('messages.signin') }}</h3>
                        <li class="dropdown" style="float:right;">
                            <a class="dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                <i id="flag-country-icon" class="flag-icon flag-icon-us"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right scale-up"> 
                                <a class="dropdown-item" href="{{ url('locale/en') }}"><i class="flag-icon flag-icon-us"></i> English</a> 
                                <a class="dropdown-item" href="{{ url('locale/cn') }}"><i class="flag-icon flag-icon-cn"></i> 中文</a>                                 
                            </div>
                        </li>                         
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">                            
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 font-14">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                            {{ __('messages.rememberme') }}
                            </label>
                            </div> 

                            <div class="col-md-8 offset-md-4">
                            @if (Route::has('password.request'))
                                <a class="text-dark pull-right" href="{{ route('password.request') }}">
                                    {{ __('messages.forgotpwd') }}                                    
                                </a>
                            @endif
                            </div> 
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-info btn-lg btn-block waves-effect waves-light">
                                <i class="fas fa-caret-square-right"></i> {{ __('messages.signin') }}
                            </button>
                        </div>
                    </div>                    
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <div>{{ __('messages.havenoaccount') }}                   
                                <a class="text-info m-l-5" href="{{ route('register') }}">{{ __('messages.signup') }}</a>
                            </div>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</section>
@endsection
