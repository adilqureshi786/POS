@extends('layouts.login')

@section('content')
                  

                     <form class="login-form" method="post" action="{{ url('/login') }}">
                            @if ($errors->has('email') || $errors->has('password'))
                                <div class="alert alert-danger">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            @endif
                            <div class="row">
                            {!! csrf_field() !!}   
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group  {{ $errors->has('email') ? ' has-error' : '' }}" type="email" placeholder="Email" name="email"   value="{{ old('email') }}"/>
                                </div>
                                <div class="col-xs-6 ">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group {{ $errors->has('password') ? ' has-error' : '' }}" type="password"  placeholder="Password" name="password" />                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="rem-password">
                                        <p>Remember Me
                                            <input type="checkbox" name="remember" class="rem-checkbox" />
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-8 text-right">
                                    <div class="forgot-password">
                                        <a href="{{ url('/password/reset') }}" id="forget-password" class="forget-password">Forgot Password?</a>
                                    </div>

                                    <button class="btn blue" type="submit">Sign In</button>
                                </div>
                            </div>
                        </form>

                        

@endsection
