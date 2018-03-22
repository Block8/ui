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
            @slot('route', route('password.email'))

            @component('material::forms.input-email')
                @slot('name', 'email')
                @slot('label', 'Email Address')
                @slot('value', old('email'))
                @slot('required', true)
            @endcomponent

            @component('material::forms.submit')
                @slot('label', 'Send Reset Email')
            @endcomponent
        @endcomponent
    @endcomponent
@endsection
