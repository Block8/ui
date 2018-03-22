@extends('material::layouts.external')
@section('content')
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="card card-login">
            <div class="card-header text-center" data-background-color="{{ env('MATERIAL_COLOR') }}">
                <h4 class="card-title">Login to {{ env('APP_NAME') }}</h4>
            </div>

            <div class="card-content">

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>

                    @component('material::forms.input-email')
                        @slot('label', 'Email address')
                        @slot('name', 'email')
                        @slot('required', true)
                    @endcomponent
                </div>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock_outline</i>
                    </span>

                    @component('material::forms.input-password')
                        @slot('label', 'Password')
                        @slot('name', 'password')
                        @slot('required', true)
                    @endcomponent
                </div>

            </div>

            <div class="footer">
                <div class="togglebutton" style="margin: 20px 5px 5px 5px;">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                    </label>
                </div>

                <button style="position: absolute; bottom: 5px; right: 15px;" type="submit" class="btn btn-success">Login</button>
            </div>
        </div>


    @if($errors->count())
        <div class="alert alert-danger"><strong>Forgotten your password?</strong> <a href="{{ route('password.request') }}">Reset it here</a>.</div>
    @endif

    </form>
@endsection