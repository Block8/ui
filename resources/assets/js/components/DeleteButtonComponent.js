
class DeleteButtonComponent extends AdminUiComponent
{
    ready() {
        let self = this;

        $('body').on('click', '.btn-delete', e => {
            e.preventDefault();
            e.stopPropagation();

            let $btn = $(e.target);
            let $form = $btn.parents('form');

            self.showDeleteConfirmation($btn, $form);
        });
    }

    showDeleteConfirmation($btn, $form) {
        let self = this;
        let confirmation = $btn.data('confirm');

        console.log($btn);
        console.log(confirmation);

        swal({
            text: confirmation,
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it',
            cancelButtonText: 'No, keep it',
            confirmButtonClass: "btn btn-success",
            cancelButtonClass: "btn btn-danger",
            buttonsStyling: false
        }).then((res) => {
            if (res.value && res.value === true) {
                $form.submit();
            }

            if (res.dismiss && (res.dismiss == 'cancel' || res.dismiss == 'close' || res.dismiss == 'esc')) {
                self.showError('Cancelled');
            }

        });
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
