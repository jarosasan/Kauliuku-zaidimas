$(document).ready(function(){

    $("#start").click(function(){
        $("#goo").removeAttr("disabled");
    });
    var game = 0;
    var games = 0;
    $("#goo").click(function(){
        var dice_1 = document.getElementById('kauliukas_1');
        var dice_2 = document.getElementById('kauliukas_2');
        var dice_3 = document.getElementById('kauliukas_3');
        var d1 = Math.ceil(Math.random()*6);
        var d2 = Math.ceil(Math.random()*6);
        var d3 = Math.ceil(Math.random()*6);

        dice_1.innerHTML = d1;
        dice_2.innerHTML = d2;
        dice_3.innerHTML = d3;

        var win_coef = 0.1;
        var roll = [d1, d2, d3];
        roll.forEach(function(element, index) {
            var ref = roll.shift();
            roll.forEach(function(element,index){
                if(element == ref){
                     game += ref * win_coef;
                }
            });

        });
        console.log(game);
        games++;
        console.log(games);
        if(games > 3){
            $("#goo").setAttribute("disabled", 1);
        }
    });





});



// roll.forEach(function (element, index) {
//     var ref = roll.shift();
//     roll.forEach(element,index){
//         if(element == ref){
//             win += Math.random((element * win_coef)*100)/100;
//             console.log("This math bring You" + Math.random((element * win_coef)*100)/100);
//         }
//     }
//
// });