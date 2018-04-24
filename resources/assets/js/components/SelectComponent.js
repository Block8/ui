
class SelectComponent extends AdminUiComponent
{
    ready() {
        $('select:not(.no-replace)').each(function () {
            let $sel = $(this);

            $sel.select2({
                allowClear: !$sel.prop('required'),
                placeholder: 'Please select...',
            });
        });
    }
}
