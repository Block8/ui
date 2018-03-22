<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-small ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h5 class="modal-title">{{ $title }}</h5>
            </div>

            <div class="modal-body text-center">
                {{ $slot }}
            </div>

            <div class="modal-footer text-center">
                {{ $buttons }}
            </div>
        </div>
    </div>
</div>
