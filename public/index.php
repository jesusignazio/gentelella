<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include 'title.php'; ?>

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

    </head>

    <body class="nav-md">
        <div class="container body">
            <?php include 'panel.php'; ?>
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Panel de inicio</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div style="height:35px">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="row tile_count">
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="label label-deeppurple">Saldo total</span>
                                <div id="text-saldototal" class="count ">0€</div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="label label-cajarural">Caja Rural</span>
                                <div id="text-saldo1" class="count">0€</div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="label label-tesorero">Caja tesorero</span>
                                <div id="text-saldo2" class="count">0€</div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="label label-tesorero">Caja subtesorero</span>
                                <div id="text-saldo3" class="count">0€</div>
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-line-chart"></i> Evolución del saldo</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <canvas style="height:75%;" id="canvas"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3" >
                                <div class="x_panel" style="background:#0275D8" >
                                    <div class="x_content">
                                        <div class="card card-inverse card-primary text-xs-center">
                                            <div class="card-block">
                                                <address style="color:#fff">
                                                    <strong>Delegación Diocesana del MSC de Jerez</strong><br>
                                                    G11611613<br>
                                                    Plaza del Arroyo 50<br>
                                                    11403, Jerez de la Frontera<br>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3" style="offset-sm-8">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Plain Page</h2>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        Saldo
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <?php include 'footer.php'; ?>
        </div>


        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

        <script src="../vendors/moment/moment.js"></script>
        <!-- Chart.js -->
        <script src="../vendors/Chart.js/dist/Chart.bundle.js"></script>

        <script>
            $(document).ready(function(){
                var array_chart = [];
                var array_saldo1 = [];
                var array_saldo2 = [];
                var array_saldo3 = [];
                var array_saldo = [];
                var labels = [],data=[];

                $.getJSON("php/get_movimientos.php", function(movimientos){
                    var saldo = 0;
                    var array = [0,0,0,0];

                    $.each(movimientos, function(i, movimiento){
                        var id = movimiento.id;
                        var icono = movimiento.icono;
                        var fecha_movimiento = movimiento.fecha_movimiento;
                        var id_cuenta = movimiento.cuenta;
                        var nombre_cuenta = movimiento.nombre_cuenta;
                        var color_cuenta = movimiento.color_cuenta;
                        var id_categoria = movimiento.categoria;
                        var nombre_categoria = movimiento.nombre_categoria;
                        var color_categoria = movimiento.color_categoria;
                        var tipo = movimiento.tipo;
                        var importe = movimiento.importe;
                        var concepto = movimiento.concepto;
                        var persona_relacionada = movimiento.persona_relacionada;
                        var rama = movimiento.rama;
                        var adjunto = movimiento.adjunto;
                        var observaciones = movimiento.observaciones;

                        if (tipo == 1) { // Es un ingreso
                            saldo = saldo+parseFloat(importe);
                            array[id_cuenta] = array[id_cuenta]+parseFloat(importe);

                        }
                        else if (tipo == 2) { // Es un gasto
                            saldo = saldo-parseFloat(importe);
                            array[id_cuenta] = array[id_cuenta]-parseFloat(importe);
                        }

                        array_saldo.push(saldo);

                        if (id_cuenta==1){
                            array_saldo1.push(array[1]);
                        }
                        else if (id_cuenta==2){
                            array_saldo2.push(array[2]);
                        }
                        else if (id_cuenta==3){
                            array_saldo3.push(array[3])
                        }

                        document.getElementById("text-saldototal").innerHTML = saldo;

                        labels.push(fecha_movimiento);
                        data.push(saldo);

                        document.getElementById("text-saldo1").innerHTML = array[1] + '€';
                        document.getElementById("text-saldo2").innerHTML = array[2] + '€';
                        document.getElementById("text-saldo3").innerHTML = array[3] + '€';

                    });

                    function toTimestamp(strDate){
                        var datum = Date.parse(strDate);
                        return datum;
                    }

                });
                var MONTHS = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

                var randomScalingFactor = function() {
                    return Math.round(Math.random() * 100);
                    //return 0;
                };
                var randomColorFactor = function() {
                    return Math.round(Math.random() * 255);
                };
                var randomColor = function(opacity) {
                    return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
                };
                var config = {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: "Saldo",
                            data: data,
                            fill: false,
                            borderDash: [5, 5],
                        }]
                    },
                    options: {
                        responsive: true,
                        title:{
                            display:false
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                            }
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: 'Meses'
                                }
                            }],
                            yAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Saldo'
                                },
                                ticks: {
                                    suggestedMin: -10,
                                    suggestedMax: 250,
                                }
                            }]
                        }
                    }
                };
                $.each(config.data.datasets, function(i, dataset) {
                    dataset.borderColor = randomColor(0.4);
                    dataset.backgroundColor = randomColor(0.5);
                    dataset.pointBorderColor = randomColor(0.7);
                    dataset.pointBackgroundColor = randomColor(0.5);
                    dataset.pointBorderWidth = 1;
                });
                window.onload = function() {
                    var ctx = document.getElementById("canvas").getContext("2d");
                    window.myLine = new Chart(ctx, config);
                };
                $('#randomizeData').click(function() {
                    $.each(config.data.datasets, function(i, dataset) {
                        dataset.data = dataset.data.map(function() {
                            return randomScalingFactor();
                        });
                    });
                    window.myLine.update();
                });
                $('#changeDataObject').click(function() {
                    config.data = {
                        labels: ["July", "August", "September", "October", "November", "December"],
                        datasets: [{
                            label: "My First dataset",
                            data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                            fill: false,
                        }, {
                            label: "My Second dataset",
                            fill: false,
                            data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                        }]
                    };
                    $.each(config.data.datasets, function(i, dataset) {
                        dataset.borderColor = randomColor(0.4);
                        dataset.backgroundColor = randomColor(0.5);
                        dataset.pointBorderColor = randomColor(0.7);
                        dataset.pointBackgroundColor = randomColor(0.5);
                        dataset.pointBorderWidth = 1;
                    });
                    // Update the chart
                    window.myLine.update();
                });
            });
        </script>
        <script>


        </script>
        <script>
            $(document).ready(function(){
                $.getJSON("php/get_numeropendientes.php", function(pagospendientes){

                    $.each(pagospendientes, function(i,pagopendiente){
                        var e = pagopendiente.numero;
                        document.getElementById("menu-pendientes-label").innerHTML = pagopendiente.numero;
                    });

                });
                $('#menu_toggle').on('click', function() {
                    if ($('body').hasClass('nav-md')) {
                        document.getElementById("logo").src="../images/logo.png";
                    }
                    else{
                        document.getElementById("logo").src="../images/logo_small.png";
                    }
                });

            });

        </script>
    </body>
</html>
