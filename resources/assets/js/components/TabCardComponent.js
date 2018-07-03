
class TabCardComponent extends AdminUiComponent
{
    ready() {
        let self = this;

        if (window.location.hash) {
            let $link = $('a[href="' + window.location.hash + '"]');

            if ($link.length) {
                self.activateTab($link);
            }
        }

        $('.card-tabs > ul li a').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            let $link = $(this);
            self.activateTab($link);
        });
    }

    activateTab($link) {
        let $tab = $link.parents('li.tab');
        let $panel = $($link.attr('href'));
        let $card = $tab.parents('.card-tabs');
        let $tabs = $card.find('li.tab');
        let $panels = $card.find('.tab-panel');

        $panels.hide();
        $tabs.removeClass('active');

        $panel.show();
        $tab.addClass('active');
    }
}
