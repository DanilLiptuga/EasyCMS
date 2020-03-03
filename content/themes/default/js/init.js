$(document).ready(function (e) {
    $('a[href=\'' + window.location.pathname + '\']').parent().addClass('active');
});