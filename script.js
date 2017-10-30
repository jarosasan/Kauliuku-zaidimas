$(document).ready(function(){
    var game = 0;
    var games = 0;
    var d1 = 0;
    var d2 = 0;
    var d3 = 0;

    $("#start").click(function(){
        $("#goo").removeAttr("disabled");
        $("#your_win").empty();

        d1 = 0;
        d2 = 0;
        d3 = 0;
        game = 0;
        games = 0;

    });

    $("#goo").click(function(){
        var dice_1 = document.getElementById('kauliukas_1');
        var dice_2 = document.getElementById('kauliukas_2');
        var dice_3 = document.getElementById('kauliukas_3');
        d1 = Math.ceil(Math.random()*6);
        d2 = Math.ceil(Math.random()*6);
        d3 = Math.ceil(Math.random()*6);

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
            $("#goo").attr("disabled",true );
            $("#your_win").append("<p>Jus laimejot " +game+ " Euru.</p>");

            $.post("game.php", { win: game },
                function(data, status){
                    console.log('Zinutr: ' + data);
                });

            }

});

});