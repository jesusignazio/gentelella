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
        <link href="../vendors/pnotify/dist/pnotify.css" media="all" rel="stylesheet" type="text/css" />

    </head>

    <body class="nav-md">
        <div class="container body">
            <?php include 'panel.php'; ?>
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Añadir clase</h3>
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
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Nueva clase de objeto</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form>
                                        <div class="form-group">
                                            <label>Nombre RAIEM:</label>
                                            <input id="nombre_raiem" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Otros Nombres:</label>
                                            <textarea class="form-control" rows="5" id="otros_nombres"></textarea>
                                        </div>
                                        <div>
                                            <label class="radio-inline"><input type="radio" id="radioinventariable">Inventariable</label>
                                            <label class="radio-inline"><input type="radio" id="radiofungible">Fungible</label>
                                        </div>
                                        <div style="margin-top:15px">
                                            <button id="submit" class="btn btn-default">Añadir</button>
                                        </div>
                                    </form>

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



        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

        <script src="../vendors/moment/moment.js"></script>
        <!-- Chart.js -->
        <script src="../vendors/Chart.js/dist/Chart.bundle.js"></script>
        <script src="../vendors/firebase/firebase.js"></script>
        <script src="../vendors/pnotify/dist/pnotify.js"></script>
        <script>
            // Initialize Firebase
            var config = {
                apiKey: "AIzaSyAEdqOASVHZzHUgOlqJNHx8zQEVFCWYy8E",
                authDomain: "sanitariohumanitario.firebaseapp.com",
                databaseURL: "https://sanitariohumanitario.firebaseio.com",
                projectId: "sanitariohumanitario",
                storageBucket: "sanitariohumanitario.appspot.com",
                messagingSenderId: "166629628149"
            };
            firebase.initializeApp(config);
            console.log(firebase);

            var database = firebase.database();
            var ref = database.ref("clases");

            $('#submit').on('click', function(event){
                PNotify.prototype.options.styling = "fontawesome";
                event.preventDefault();
                if ($('#radiofungible').is(":checked")) {
                    var tipo = 'fungible';
                    pushData();
                }
                else if ($('#radioinventariable').is(":checked")) {
                    var tipo = 'inventariable';
                    pushData();
                }
                else {
                    new PNotify({
                        title: 'Error',
                        text: 'No has elegido tipo (inventariable/fungible).',
                        type: 'error'
                    });
                }
                function pushData(){
                    var data = {
                        nombre_raiem: $('#nombre_raiem').val(),
                        tipo,
                        otros_nombres: $('#otros_nombres').val()
                    }
                    ref.push(data);
                    new PNotify({
                        title: 'Listo',
                        text: 'Registro añadido',
                        type: 'success'
                    });
                }

            });
        </script>
        <script>
            $(document).ready(function (){
                $('.ui-pnotify').remove();
            });
        </script>

    </body>
</html>
