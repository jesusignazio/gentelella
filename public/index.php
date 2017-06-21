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
        <link rel='stylesheet' href='../vendors/fullcalendar/dist/fullcalendar.css' />

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
                        <div class="col-sm-9">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-calendar"></i> Calendario</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div id="calendar"></div>
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



        <script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>
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


        <!--Calendar-->
        <script src='../vendors/moment/moment.js'></script>
        <script src='../vendors/fullcalendar/dist/fullcalendar.js'></script>
        <script src="../vendors/fullcalendar/dist/locale/es.js"></script>
        <script src="../vendors/fullcalendar/dist/gcal.js"></script>
        <script>
            $(document).ready(function() {

                // page is now ready, initialize the calendar...

                $('#calendar').fullCalendar({
                    googleCalendarApiKey: 'AIzaSyAaKkJ30FXOc1Q4LQmzlMYEhsB_8DRrOeQ',
                    locale: 'es',
                    evens: {
                        googleCalendarId: '1hnbgdnsf9g4f8pa9ra7e6ds6k@group.calendar.google.com'
                    }

                })

            });
        </script>


    </body>
</html>
