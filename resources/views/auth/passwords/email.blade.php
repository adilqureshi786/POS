@extends('layouts.login')

@section('content')
                  

                        <form class="forgetform" action="{{ url('/password/email') }}" method="post">
                            
                            {!! csrf_field() !!}
                            <h3 class="font-green">Forgot Password ?</h3>
                            <p> Enter your e-mail address below to reset your password. </p>
                             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group{{ $errors->has('email') ? ' has-error' : '' }}" type="text"  placeholder="Email" name="email" value="{{ old('email') }}"/> </div>
                            <div class="form-actions">
                                <a href="{{ url('/login') }}" class="btn grey btn-default">Back</a>
                                <button type="submit" class="btn blue btn-success uppercase pull-right">Submit</button>
                            </div>
                        </form>

@endsection
