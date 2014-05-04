//Para que el menu quede arriba//
$(document).ready(function() {
var menu = $('#menu');
var menu_offset = menu.offset();
$(window).on('scroll', function() {
if($(window).scrollTop() > menu_offset.top) {
menu.addClass('fijo');
} else {
menu.removeClass('fijo');
}
});
});

