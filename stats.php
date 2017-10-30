<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<!--    <link rel="stylesheet" href="style.css">-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Your wins.</h1>
            <div class="col">
                <button class="btn btn-outline-success my-2 my-sm-0" name="statAll" id="statAll" type="submit">All users stat</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <div class="row">
                <canvas id="myChart" width="auto" height="400"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script  src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: [],
            datasets: [{
                label: [],
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [],
            }]
        },

        // Configuration options go here
        options: {}
    });
    $.getJSON("game.php",
        {
            stat: ''
        },
        function (json, textStatus){
            $.each(json.game, function (i, field) {
                chart.data.labels.push(field.time);
                chart.data.datasets[0].data.push(field.result);
                chart.update();
            })
        });
    $('#statAll').click(function(){

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: [],
                    data: [],
                    borderColor: [],
                    borderWidth: 1,
                    backgroundColor:[],
                }]
            }
        });

        $.getJSON("game.php",
            {

            },
            function (json, textStatus) {
                $.each(json.game, function (i, field) {
                    myChart.data.labels.push(field.name);
                    myChart.data.datasets[0].data.push(field.result);
                    myChart.update();
                })
            });
    });




</script>




</body>
</html>
