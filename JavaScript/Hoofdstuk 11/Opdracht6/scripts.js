$(document).ready(function() {
    let leftpos = 50;
    let toppos = 50;

    $(document).on('keydown', function(event) {

        if (event.which === 37)
        {
            // alert('hoi');
            leftpos = leftpos - 10;
            $('.box').css('left', leftpos);
        }
        else if (event.which === 38)
        {
            // alert('hoi');
            toppos = toppos - 10;
            $('.box').css('top', toppos);
        }
        else if (event.which === 39)
        {
            // alert('hoi');
            leftpos = leftpos + 10;
            $('.box').css('left', leftpos);
        }
        else if (event.which === 40)
        {
            // alert('hoi');
            toppos = toppos + 10;
            $('.box').css('top', toppos);
        }


});
});