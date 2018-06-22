
class AlertComponent extends AdminUiComponent
{
    ready() {
        $('.alert-close').on('click', function (e) {
            e.preventDefault();
            $(this).closest('.alert').hide();
        });
    }
}