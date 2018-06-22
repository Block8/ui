
class TopbarComponent extends AdminUiComponent
{
    ready() {
        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                $(this).find('.dropdown-menu, .open').removeClass('open');
            }
        });

        $(document).click(function(e) {
            if (!$(e.target).parents('.topbar-dropdown').length) {
                $(this).find('.dropdown-menu, .open').removeClass('open');
            }
        });

        $('.dropdown-toggle').on('click', function (e) {
            e.preventDefault();
            let target = $(this).next('.dropdown-menu');

            $('.dropdown-menu').not(target).each(function () {
                $(this).removeClass('open');
            });

            target.toggleClass('open');
            $(this).toggleClass('open');
        });
    }
}
