
class HtmlEditorComponent extends AdminUiComponent
{
    ready() {
        let self = this;

        $('.html-editor').each(function () {
            let $el = $(this);

            let config = {
                toolbar: [ 'heading', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
            };

            if ($el.data('upload')) {
                config.toolbar.push('imageUpload');

                config.ckfinder = {
                    uploadUrl: $el.data('upload') + '?_token=' + $('meta[name="csrf-token"]').attr('content'),
                }
            }

            ClassicEditor.create($el[0], config);
        });
    }
}
