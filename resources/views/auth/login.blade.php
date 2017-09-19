@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        <p class="h5 text-center mb-4">Login</p>

        {{ csrf_field() }}

        <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            <label for="email">Email</label>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
            <i class="fa fa-lock prefix grey-text"></i>
            <input type="password" id="password-pass" class="form-control" name="password" required>
            <label for="password">Password</label>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="text-center">
            <button class="btn btn-default">Login</button>
        </div>
    </form>
@endsection
