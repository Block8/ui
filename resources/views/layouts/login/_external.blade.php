<div class="external-auth">
    @if(!empty(config('services.google.client_id')))
        <a class="btn btn-gray-700" href="{{ route('b8.auth.redirect', 'google') }}"><i class="fab fa-2x fa-google"></i> Login with Google</a>
    @endif

    @if(!empty(config('services.graph.client_id')))
        <a class="btn btn-gray-700" href="{{ route('b8.auth.redirect', 'graph') }}"><i class="fab fa-2x fa-windows"></i> Login with Office 365</a>
    @endif
</div>