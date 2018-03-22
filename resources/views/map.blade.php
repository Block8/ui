<div class="map material-map" id="{{ $id or 'map' }}" @isset($style)style="{{ $style }}"@endisset></div>

@push('scripts')
<script>
    $('#{{ $id }}').data('zoom', {{ $zoom or 10 }});

    @if(!empty($center))
    $('#{{ $id }}').data('center', {!! json_encode($center) !!});
    @endif

    @if(!empty($markers))
    $('#{{ $id }}').data('markers', {!! json_encode($markers) !!});
    @endif
</script>
@endpush
