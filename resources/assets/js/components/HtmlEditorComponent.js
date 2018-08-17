
class HtmlEditorComponent extends AdminUiComponent
{
    ready() {
        let self = this;

        $('.html-editor').each(function () {
            console.log('HTML EDITOR COMPONENT');
            
            let $el = $(this);

            let config = {
                toolbar: [ 'heading', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                fillEmptyBlocks: false,
            };

            console.log(config);

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
