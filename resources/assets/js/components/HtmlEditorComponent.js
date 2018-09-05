
class HtmlEditorComponent extends AdminUiComponent
{
    ready() {
        if (!CKEDITOR) {
            this.initCke5();
        } else {
            this.initCke4();
        }
    }

    initCke4() {
        let self = this;

        $('.html-editor').each(function () {
            let $el = $(this);
            let config = {
                toolbarGroups: [
                    { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                    { name: 'insert', groups: [ 'insert' ] },
                    { name: 'forms', groups: [ 'forms' ] },
                    { name: 'tools', groups: [ 'tools' ] },
                    { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                    { name: 'others', groups: [ 'others' ] },
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'links', groups: [ 'links' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                    { name: 'styles', groups: [ 'styles' ] },
                    { name: 'colors', groups: [ 'colors' ] },
                    { name: 'about', groups: [ 'about' ] }
                ],
                removeButtons: 'Subscript,Superscript,Cut,Copy,Paste,PasteText,PasteFromWord,Undo,Redo,Scayt,Anchor,Image,Table,HorizontalRule,SpecialChar,Maximize,Source,Strike,About,Outdent,Indent,Styles',
                fillEmptyBlocks: false,
                removePlugins: 'elementspath',
            };

            CKEDITOR.replace($el.attr('id'), config);
        });
    }

    initCke5() {
        let self = this;

        $('.html-editor').each(function () {
            let config = {
                toolbar: [ 'heading', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                fillEmptyBlocks: false,
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
