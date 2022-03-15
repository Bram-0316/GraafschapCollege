// $('#divResult').on('mousemove', function (e)  { 
//     const posX = e.pageX;
//     const posY = e.pageY;
//     $('#divResult').html('positie X:' + posX + '<br /> Positie Y:' + posY);
// });

$(document).ready(function() {
    $("#divResult").mousemove(function(event){            
        var relX = event.pageX - $(this).offset().left;
        var relY = event.pageY - $(this).offset().top;
        var relBoxCoords = "(" + relX + "," + relY + ")";
        $('#divResult').html('positie X:' + relX + '<br /> Positie Y:' + relY);
        // document.title = "posX:" + relX + "posY:" + relY
        ;
    });
});