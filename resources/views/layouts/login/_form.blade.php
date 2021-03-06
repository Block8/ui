@component('ui::card')
    @slot('title', $title ?? config('app.name'))
    @slot('icon', 'unlock')

    @component('ui::forms.form', ['route' => route('login'), 'method' => 'POST'])
        @component('material::forms.input-email')
            @slot('label', 'Email address')
            @slot('name', 'email')
            @slot('required', true)
        @endcomponent

        @component('material::forms.input-password')
            @slot('label', 'Password')
            @slot('name', 'password')
            @slot('required', true)
        @endcomponent

        @component('ui::forms.checkbox')
            @slot('name', 'remember')
            @slot('label', 'Remember me')
            @slot('checked', true)
        @endcomponent

        <button style="position: absolute; bottom: 5px; right: 20px;" type="submit" class="btn btn-success">Login</button>
    @endcomponent
@endcomponent

<div class="alert alert-{{ $errors->count() ? 'danger' : 'default' }}" style="box-shadow: none;"><strong>Forgotten your password?</strong> <a href="{{ route('password.request') }}">Reset it here</a>.</div>
