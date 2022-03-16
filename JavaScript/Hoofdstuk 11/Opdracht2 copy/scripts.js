$(document).on('mousemove', function(e){ 
    const posX = e.pageX - 75;
    const posY = e.pageY - 50;
    console.log(posX, posY);
    $('img').css('left', posX);
    $('img').css('top', posY);
});

// $(document).ready(function() {
//     $(document).mousemove(function(e){            
//         let relX = e.pageX;
//         let relY = e.pageY;

//         ;
//     });
// });