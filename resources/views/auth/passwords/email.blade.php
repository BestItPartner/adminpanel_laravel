@extends('layouts.sign')

@section('content')
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    
    <div class="login-register" style="background-image:url('{{URL::to('/')}}/theme/assets/images/background/login-register.jpg');">        
        <div class="login-box card">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <h3 class="box-title m-b-20">Reset Password</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <div>Did you remember again? 
                        <a class="text-info m-l-5" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                        </div>
                    </div>
                </div>
                </form>
        </div>
        </div>
    </div>
    
</section>
@endsection
