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
                            <h3>Ambulancia ET-699</h3>
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
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Ambulancia ET-699</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <img src="images/699.jpg" style="width: 100%; height: 100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Últimas reposiciones</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    Add content to the page ...
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Caduca o por debajo del nivel</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    Add content to the page ...
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Localizaciones</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <p>Mochila circulatorio</p>
                                    <p>Mochila respiratorio</p>
                                    <p>Mochila pediátrica</p>
                                    <p>Ampulario</p>
                                    <p>Cajón 1</p>
                                    <p>Cajón 2</p>
                                    <p>Cajón 3</p>
                                    <p>Cajón 4</p>
                                    <p>Cajón 5</p>
                                    <p>Cajón 6</p>
                                    <p>Cajón 7</p>
                                    <p>Cajón 8</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Existencias</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    Add content to the page ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <?php include 'footer.php'; ?>
        </div>

        <script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>
        <script> //TODO borrar
            function añadirRegistro(){
                var database = firebase.database();
                var ref = database.ref("ambulancias").child("et_699").child("localizaciones").child("ampulario").child("existe").child("-KnErcpZFZkNyEneJKOX");
                var data = {
                    caducidad: 20171030,
                    cantidad: 2
                }
                ref.push(data);
            }
            
            function estaCaducado(referencia){
                referencia.
            }
            
            function porDebajoDeNivel(referencia){
                
            }
        

        </script>
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
        </script>

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


        </script>
    </body>
</html>
