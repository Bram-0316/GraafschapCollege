$('document').ready(function() {

    $('#submit').on('click', function(){
       let inputValue = $('#nummer').val();
       for (inputValue <= 0; inputValue--;) {
        $('ul').append('<li> Hallo </li>');
       };
    });

    $('ul').on('mouseover', 'li' ,function(){
        console.log('hallo');
       $(this).addClass('mouseover');
    })
    $('ul').on('mouseout', 'li' ,function(){
        $(this).removeClass('mouseover');
    })

});