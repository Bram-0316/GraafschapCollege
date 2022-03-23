$('document').ready(function() {
    $('li').hover(
        function() {
            // mouse over
            $(this).animate({'margin-left' : '+=50px'}, 300, 'easeInOutQuart');
        },
        function() {
            // mouse out
            $(this).animate({'margin-left' : '-=50px'}, 300, 'easeInOutQuart');
        }
    )

    $('h1').hover(
        function() {
            // mouse over
           $(this).html("Hoi");
           $(this).css({'text-decoration': 'underline'});
        },
        function() {
            // mouse out
            $(this).html("doei");
            $(this).css({'text-decoration': 'none'});
        }
    )
})