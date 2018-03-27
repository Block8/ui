@extends('material::layouts.external')
@section('content')
    <div class="login">

        @if(!env('DISABLE_LOGIN_FORM', false))
            @include('ui::layouts.login._form')
            @include('ui::layouts.login._external')
        @else
            @component('ui::card')
                @slot('title', $title ?? env('APP_NAME'))
                @slot('icon', 'unlock')
                @include('ui::layouts.login._external')
            @endcomponent
        @endif
    </div>
@endsection