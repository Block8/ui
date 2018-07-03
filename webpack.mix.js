module.exports = function (mix) {
    mix.babel([
        'node_modules/block8.ui/resources/assets/js/core/admin-ui.js',
        'node_modules/block8.ui/resources/assets/js/core/component.js',
        'node_modules/block8.ui/resources/assets/js/components/AlertComponent.js',
        'node_modules/block8.ui/resources/assets/js/components/SidebarComponent.js',
        'node_modules/block8.ui/resources/assets/js/components/TopbarComponent.js',
        'node_modules/block8.ui/resources/assets/js/components/SelectComponent.js',
        'node_modules/block8.ui/resources/assets/js/components/TabCardComponent.js',
        'node_modules/block8.ui/resources/assets/js/components/DeleteButtonComponent.js',
        'node_modules/block8.ui/resources/assets/js/components/DatePickerComponent.js',
        'node_modules/block8.ui/resources/assets/js/components/HtmlEditorComponent.js',
        'node_modules/block8.ui/resources/assets/js/ui.js',
    ], 'public/block8/ui/js/ui.js');

    mix.copy('node_modules/bootstrap-notify/bootstrap-notify.min.js', 'public/block8/ui/js/bootstrap-notify.min.js');
    mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/block8/ui/js/jquery.min.js');
    mix.copy('node_modules/moment/min/moment.min.js', 'public/block8/ui/js/moment.min.js');
    mix.copy('node_modules/animate.css/animate.min.css', 'public/block8/ui/css/animate.css');
    mix.copyDirectory('node_modules/@ckeditor/ckeditor5-build-classic/build', 'public/block8/ui/js/ckeditor5');
    mix.copyDirectory('node_modules/select2', 'public/block8/ui/js/select2');
    mix.copyDirectory('node_modules/chartist/dist', 'public/block8/ui/js/chartist');
    mix.copyDirectory('node_modules/eonasdan-bootstrap-datetimepicker/build', 'public/block8/ui/js/datetimepicker');
    mix.copyDirectory('node_modules/sweetalert2/dist', 'public/block8/ui/js/sweetalert2');
    mix.copyDirectory('node_modules/block8.ui/resources/assets/img', 'public/block8/ui/img');
};
