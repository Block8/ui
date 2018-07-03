
class SidebarComponent extends AdminUiComponent
{
    ready() {
        $('.sidebar-toggle').on('click', function () {
            $('.sidebar').toggleClass('active');
        });

        $('a[data-toggle="collapse"]').on('click', function (e) {
            e.preventDefault();
            let $el = $($(this).attr('href'));

            if ($el.is(':visible')) {
                $(this).removeClass('show');
                $el.slideUp();
            } else {
                $(this).addClass('show');
                $el.slideDown();
            }
        });

        $('.main').on('click', function (e) {
            let $target = $(e.target);

            if ($target.hasClass('sidebar-toggle')) {
                return;
            }

            if ($('.sidebar').hasClass('active')) {
                $('.sidebar').removeClass('active');
            }
        });
    }
}
