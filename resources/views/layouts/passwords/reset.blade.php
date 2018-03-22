@extends('material::layouts.external')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @component('material::card')
        @slot('title', 'Reset Password')

        @component('material::forms.form')
            @slot('method', 'POST')
            @slot('route', route('password.request'))

            <input type="hidden" name="token" value="{{ $token }}">

            @component('material::forms.input-email')
                @slot('name', 'email')
                @slot('label', 'Email Address')
                @slot('value', $email)
                @slot('required', true)
            @endcomponent

            @component('material::forms.input-password')
                @slot('name', 'password')
                @slot('label', 'Password')
                @slot('required', true)
            @endcomponent

            @component('material::forms.input-password')
                @slot('name', 'password_confirmation')
                @slot('label', 'Confirm Password')
                @slot('required', true)
            @endcomponent

            @component('material::forms.submit')
                @slot('label', 'Reset Password')
            @endcomponent
        @endcomponent
    @endcomponent
@endsection
