window.addEventListener('load' , onLoad);
function onLoad(){
    let getal1 = document.getElementById('getal1');
    let getal2 = document.getElementById('getal2');
    parseInt(getal1);
    parseInt(getal2);
    let uitkomst = getal1 + getal2;

    document.getElementById('btn1').addEventListener('click', function(){
        hoi.innerHTML = '<h2>' + uitkomst + '</h2>';
    });
}