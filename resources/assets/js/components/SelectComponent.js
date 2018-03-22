
class SelectComponent extends AdminUiComponent
{
    ready() {
        $('select:not(.no-replace)').select2();
    }
}
