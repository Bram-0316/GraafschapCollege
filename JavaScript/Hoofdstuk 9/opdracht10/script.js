$(document).ready(function() {

    // buttons
    $('button').on('click',function() {
        $('ul').append('<li class="item">' + $('input').val() + ' <a href="#" class="removeItem">verwijder</a></li>');
    });

    $('ul').on('click', '.removeItem', function() {
        $(this).parent().remove();
    });
})