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
        <link href="../vendors/bootstrap-table/src/bootstrap-table.css" rel="stylesheet">

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
                                    <h2>Clases</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="row">
                                        <table id="tabla-clases" data-toggle="table"
                                               class="table table-striped table-bordered dt-responsive nowrap" 
                                               data-sort-name="producto" 
                                               data-sort-order="asc" 
                                               cellspacing="0" 
                                               width="100%"
                                               data-mobile-responsive="true"
                                               data-search="true"
                                               data-show-columns="true"
                                               data-show-export="true"
                                               data-pagination="true"
                                               data-export-types="['excel']"
                                               data-filter-control="true">
                                            <thead>
                                                <tr>
                                                    <th data-sortable="true" data-editable="true" data-field="nombre_raiem">Nombre</th>
                                                    <th data-editable="true" data-field="otros_nombres">Otros nombres</th>
                                                    <th data-editable="true" data-sortable="true" data-filter-control="select" data-field="proveedor">Proveedor</th>
                                                    <th data-editable="true" data-sortable="true" data-filter-control="select" data-field="tipo">Tipo</th>
                                                    <th data-visible="false" data-field="key">Clave</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Nueva clase de producto</h2>

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
                                        <div class="form-group">
                                            <label>Proveedor:</label>
                                            <input id="proveedor" type="text" class="form-control">
                                        </div>
                                        <div>
                                            <label class="radio-inline"><input type="radio" id="radioinventariable">Inventariable</label>
                                            <label class="radio-inline"><input type="radio" id="radiofungible">Fungible</label>
                                            <label class="radio-inline"><input type="radio" id="radiomedicamento">Medicamento</label>
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
        
        <!-- Table -->
        <script src="../vendors/bootstrap-table/src/bootstrap-table.js"></script>
        <script src="../vendors/bootstrap-table/src/extensions/export/bootstrap-table-export.js"></script>
        <script src="../vendors/bootstrap-table/src/extensions/filter-control/bootstrap-table-filter-control.js"></script>
        <script src="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="../vendors/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js"></script>
        <script src="../vendors/bootstrap-table/src/locale/bootstrap-table-es-ES.js"></script>
        
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
                    var tipo = 'Fungible';
                    pushData();
                }
                else if ($('#radioinventariable').is(":checked")) {
                    var tipo = 'Inventariable';
                    pushData();
                }
                else if($('#radiomedicamento').is(":checked")) {
                    var tipo = 'Medicamento';
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
                    $('#tabla-clases').bootstrapTable('removeAll');
                    ref.push(data);
                    new PNotify({
                        title: 'Listo',
                        text: 'Registro añadido',
                        type: 'success'
                    });
                }

            });
            function getTablaClases(){
                var database = firebase.database();
                var ref = database.ref("clases");
                var $table = $('#tabla-clases');

                ref.on('value', gotData, errData);

                $table.on('editable-save.bs.table', function(field, row, oldValue, $el){
                    var update = {
                        nombre_raiem: oldValue.nombre_raiem,
                        key: oldValue.key,
                        tipo: oldValue.tipo,
                        proveedor: oldValue.proveedor,
                        otros_nombres: oldValue.otros_nombres
                    }                   

                    ref.child(oldValue.key).update(oldValue);                
                });

                function gotData(data){
                    var entradas = data.val();
                    var keys = Object.keys(entradas);

                    for (var i = 0; i < keys.length; i++) {

                        var k = keys[i];
                        var nombre_raiem = entradas[k].nombre_raiem;
                        var tipo = entradas[k].tipo;
                        var proveedor = entradas[k].proveedor;
                        var otros_nombres = entradas[k].otros_nombres;

                        $table.bootstrapTable('insertRow', {
                            index: 1,
                            row: {
                                nombre_raiem: nombre_raiem,
                                tipo: tipo,
                                otros_nombres: otros_nombres,
                                proveedor: proveedor,
                                key: k
                            }

                        });

                    }
                }

                function errData(err) {
                    console.log('Error!');
                    console.log(err);
                }
            }
            getTablaClases();

        </script>
        <script>
            $(document).ready(function (){
                $('.ui-pnotify').remove();
            });
        </script>

    </body>
</html>
