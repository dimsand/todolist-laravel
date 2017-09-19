@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        <p class="h5 text-center mb-4">Register</p>

        {{ csrf_field() }}

        <div class="md-form{{ $errors->has('name') ? ' has-error' : '' }}">
            <i class="fa fa-user prefix grey-text"></i>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            <label for="name">Your name</label>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            <label for="email">Your email</label>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
            <i class="fa fa-lock prefix grey-text"></i>
            <input id="password" type="password" class="form-control" name="password" required>
            <label for="password">Your password</label>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix grey-text"></i>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            <label for="password-confirm">Confirm Password</label>
        </div>

        <div class="text-center">
            <button class="btn btn-deep-orange">Register</button>
        </div>

    </form>
@endsection
