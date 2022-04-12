$(document).ready(function() {
    $('button').on("click", function(){
        $(".result").css('color' , 'black');
        $(".result").css('fontSize' , '20px');

        let dice1 = Math.floor(Math.random() * 6) + 1;
        $(".dice1").html(dice1);
    
        let dice2 = Math.floor(Math.random() * 6) + 1;
        $(".dice2").html(dice2);
        
        
        if(dice2 === dice1){
            $(".result").html("Je hebt gewonnen!");
            $(".result").css('color' , 'green');
            $(".result").animate({'fontSize' : '+=100px'},1000);
        }
        else{ 
            $(".result").html("Helaas probeer het nog eens");
        }
        
    })

})