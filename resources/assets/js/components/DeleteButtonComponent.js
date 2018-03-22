
class DeleteButtonComponent extends AdminUiComponent
{
    ready() {
        let self = this;

        $('body').on('click', '.btn-delete[data-url]', e => {
            e.preventDefault();
            e.stopPropagation();

            self.showDeleteConfirmation($(this));
        });
    }

    showDeleteConfirmation($btn) {
        let self = this;
        let thing = $btn.data('thing');
        let url = $btn.data('url');

        swal({
            title: 'Are you sure?',
            text: 'This ' + thing + ' will be permanently deleted.',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it',
            cancelButtonText: 'No, keep it',
            confirmButtonClass: "btn btn-success",
            cancelButtonClass: "btn btn-danger",
            buttonsStyling: false
        }).then(() => {
            $.ajax({
                url: url,
                method: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function () {
                    self.showDeletedMessage();
                },
                failed: function () {
                    self.showError('Sorry,', 'Could not delete ' + thing);
                }
            })
        }, function(dismiss) {
            // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
            if (dismiss === 'cancel') {
                self.showError('Cancelled');
            }
        });
    }

    showDeletedMessage() {
        swal({
            title: 'Deleted',
            type: 'success',
            confirmButtonClass: "btn btn-success",
            buttonsStyling: false
        }).catch(swal.noop)
    }

    showError(title, text) {
        swal({
            title: title,
            text: text,
            type: 'error',
            confirmButtonClass: "btn btn-success",
            buttonsStyling: false
        }).catch(swal.noop)
    }
}
