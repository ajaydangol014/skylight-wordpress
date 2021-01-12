(function($) {

    var menu_item = $('.menu-item'),
        menu_item_has_children = $('.menu-item-has-children'),
        has_childred_link = $('.menu-item-has-children > a'),
        menu_link = $('.menu-item a'),
        dropdown_link = $('.sub-menu a'),
        sub_menu = $('.sub-menu');

    menu_item.addClass('nav-item');
    menu_item_has_children.addClass('dropdown');
    has_childred_link.addClass('dropdown-toggle').attr('data-toggle','dropdown');
    sub_menu.addClass('dropdown-menu');
    dropdown_link.addClass('dropdown-item');
    dropdown_link.removeClass('nav-link');
})(jQuery);