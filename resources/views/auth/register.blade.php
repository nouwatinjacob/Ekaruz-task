@extends('layouts.app')

@section('content')
<div class="container py-3 myForm">
    <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
            <div class="card card-body">
                <h3 class="text-center mb-4">Sign-up</h3>                
                <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <fieldset>
                    <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <input id="first_name" type="text" class="form-control input-lg"  placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autofocus>

                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <input id="last_name" type="text" class="form-control input-lg" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required autofocus>

                        @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" class="form-control input-lg" placeholder="E-mail Address" name="email" type="text" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                            <input id="username" type="text" class="form-control input-lg" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control input-lg" placeholder="Password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Confirm Password" name="password_confirmation" value="" type="password" required>
                        </div>              
                        <div class="checkbox">
                            <label class="small">
                                <input name="terms" type="checkbox">I have read and agree to the <a href="#">terms of service</a>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-lg btn-outline-success btn-block">
                            Sign Me Up
                          </button>
                    </fieldset>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')