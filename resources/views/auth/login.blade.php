@extends('layouts.app')

@section('content')
<div class="container py-3 myForm">
    <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card card-body">
            <h3 class="text-center mb-4">Log-in</h3>
                <form class="form-horizontal form-signin" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <fieldset>       
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-success">
                    
                    <input id="email" type="email" class="form-control input-lg" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-success">
                    
                        <input id="password" type="password" class="form-control input-lg" placeholder="Password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
               
                        <div class="checkbox">
                            <label class="small">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                

                <div class="form-group has-success">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                    <button type="submit" class="btn btn-lg btn-outline-success btn-block">
                        Login
                    </button>                       
                    </div>
                </fieldset>    
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')