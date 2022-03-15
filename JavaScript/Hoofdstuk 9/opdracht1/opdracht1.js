$(document).ready(function() {

    $('input:radio').on('click', function() {
        console.log($(this).val());
    })


    $('button').on('click',function() {
        if($('#voorgrond').is(':checked')) { 
            $('#tekstVak').css('color',$('#input').val()); 
            $('input').val('');
        } else if ($('#achtergrond').is(':checked')) { 
            $('#tekstVak').css('background-color',$('#input').val()); 
        } else if ($('#tekst').is(':checked')) {
            $('#tekstVak').text($('#input').val());
        }else if ($('#breedte').is(':checked')) {
            $('#tekstVak').css('width',$('#input').val());
        } else if ($('#hoogte').is(':checked')) {
            $('#tekstVak').css('height',$('#input').val());
        }else {
            console.log("no selection")
        }

        $('input').val('');
    });

    $('#tekstVak').on('click',function() {
        $('#tekstVak').empty().val();
    })


})