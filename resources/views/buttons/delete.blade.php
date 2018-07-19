@can('delete', $model)
    @component('ui::forms.form')
        @slot('action', $action)
        @slot('method', 'DELETE')

        <button type="button" class="btn btn-{{ $size ?? 'sm' }} btn-delete" data-confirm="{{ $confirm ?? 'Are you sure you want to delete this?' }}">
            <i class="fas fa-trash"></i> Delete {{ $label ?? '' }}
        </button>
    @endcomponent
@endcan