$(document).ready(function() {

    // buttons
    $('#bold').on('click',function() {
        $('p').addClass('bold').val();
        $('p').removeClass('font').val();
        $('p').removeClass('color').val();
    });

    $('#font').on('click',function() {
        $('p').removeClass('bold').val();
        $('p').addClass('font').val();
        $('p').removeClass('color').val();
    });

    $('#color').on('click',function() {
        $('p').removeClass('bold').val();
        $('p').removeClass('font').val();
        $('p').addClass('color').val();
    });
})