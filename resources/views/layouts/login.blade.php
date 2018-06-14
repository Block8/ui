@extends('material::layouts.external')
@section('content')
    <div class="login">

        @if(!config('app.disable_login_form', false))
            @include('ui::layouts.login._form')
            @include('ui::layouts.login._external')
        @else
            @component('ui::card')
                @slot('title', $title ?? config('app.name'))
                @slot('icon', 'unlock')
                @include('ui::layouts.login._external')
            @endcomponent
        @endif
    </div>
@endsection