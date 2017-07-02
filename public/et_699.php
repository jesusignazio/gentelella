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
        <link rel="stylesheet" href="../vendors/bootstrap-table/src/bootstrap-table.css">

    </head>

    <body class="nav-md">
        <div class="container body">
            <?php include 'panel.php'; ?>
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Ambulancia ET-699</h3> <ol class="breadcrumb">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="ambulancias.php">Ambulancias</a></li>
                            <li class="active">ET-699</li>
                            </ol>
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
                                    <h2>Estado</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div>
                                        <h4><span class="label label-success pull-left">Operativa</span><span class="label label-danger pull-right">Alfa</span></h4>
                                    </div>
                                    <img src="images/699.jpg" style="width: 100%; height: 100%"/>

                                    <div id="div-check-revision">

                                    </div>




                                </div>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Inventario</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="row">
                                        <table id="tabla-total" data-toggle="table"
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
                                               data-export-types="['excel', 'pdf']"
                                               data-filter-control="true">
                                            <thead>
                                                <tr>
                                                    <th data-sortable="true" data-filter-control="select" data-field="nombre_raiem">Nombre</th>
                                                    <th data-align="center" data-sortable="true" data-filter-control="select" data-field="localizacion">Localización</th>
                                                    <th data-editable="true" data-sortable="true" data-field="caducidad">Caducidad</th>
                                                    <th data-editable="true" data-editable="true" data-field="cantidad">Cantidad</th>
                                                    <th data-field="nivel">Nivel</th>
                                                    <th data-editable="true" data-field="observaciones">Observaciones</th>
                                                    <th data-editable="true" data-visible="false" data-field="otros_nombres">Otros nombres</th>
                                                    <th data-align="center" data-formatter="TableActions">Acciones</th>
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
                        <div class="col-sm-2">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Últimas reposiciones</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    To do...
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Revisiones</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <ul id="lista-revisiones" class="list-group">




                                    </ul>
                                    <button class="btn btn-default btn-xs pull-right">Añadir</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Caduca o por debajo del nivel</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    To do...
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Informes</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <p>Total</p>
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
            };


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

        <!-- Table -->
        <script src="../vendors/bootstrap-table/src/bootstrap-table.js"></script>
        <script src="../vendors/tableExport.jquery.plugin/tableExport.min.js"></script>
        <script src="../vendors/bootstrap-table/src/extensions/export/bootstrap-table-export.js"></script>
        <script src="../vendors/bootstrap-table/src/extensions/filter-control/bootstrap-table-filter-control.js"></script>
        <script src="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="../vendors/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js"></script>
        <script src="../vendors/bootstrap-table/src/locale/bootstrap-table-es-ES.js"></script>
        <script src="../vendors/jspdf/dist/jspdf.min.js"></script>
        <script src="../vendors/jspdf-autotable/dist/jspdf.plugin.autotable.js"></script>


        <script>

            function TableActions (value, row, index) {
                return [

                    '<a class="danger remove" href="javascript:void(0)" data-visitorserial="'+1+'" data-visitornames="'+2+'" data-visitorid="'+3+'" data-toggle="modal" data-target="#VisitorDelete" title="Remove">',
                    '<i class="glyphicon glyphicon-remove red"></i>',
                    '</a>'
                ].join('');
            }

            function getLabelLocalizacion(string){
                var label;

                switch(string) {
                    case "Puerta ampulario":
                        var label = "<span class=\"label label-warning\">" + string + "</span>"
                        break;
                    case "Ampulario":
                        var label = "<span class=\"label label-warning\">" + string + "</span>"
                        break;
                    case "Mochila respiratorio":
                        var label = "<span class=\"label label-primary\">" + string + "</span>"
                        break;
                    case "Mochila circulatorio":
                        var label = "<span class=\"label label-danger\">" + string + "</span>"
                        break;
                    case "Mochila pediátrica":
                        var label = "<span class=\"label label-info\">" + string + "</span>"
                        break;
                    default:
                        var label = "<span class=\"label label-default\">" + string + "</span>"
                        }
                return label;
            }

            function getTextLocalizacion(string){
                var label;
                switch(string){
                    case "<span class=\"label label-warning\">Puerta ampulario</span>":
                        var label = "Puerta ampulario";
                        break;
                    case "<span class=\"label label-warning\">Ampulario</span>":
                        var label = "Ampulario";
                        break;
                    case "<span class=\"label label-primary\">Mochila respiratorio</span>":
                        var label = "Mochila respiratorio";
                        break;
                    case "<span class=\"label label-danger\">Mochila circulatorio</span>":
                        var label = "Mochila circulatorio";
                        break;
                    case "<span class=\"label label-info\">Mochila pediátrica</span>":
                        var label = "Mochila pediátrica";
                        break;
                    default:
                        var label = "<span class=\"label label-default\">" + string + "</span>"
                        }
                return label;
            }

            function getTablaTotal(){
                var database = firebase.database();
                var ref = database.ref("ambulancias/et_699/existe");
                var $table = $('#tabla-total');

                ref.on('value', gotData, errData);

                $table.on('editable-save.bs.table', function(field, row, oldValue, $el){
                    var update = {
                        nombre_raiem: oldValue.nombre_raiem,
                        localizacion: oldValue.localizacion,
                        nivel: oldValue.nivel,
                        caducidad: oldValue.caducidad,
                        cantidad: oldValue.cantidad,
                        observaciones: oldValue.observaciones,
                        otros_nombres: oldValue.otros_nombres
                    }                   

                    ref.child(oldValue.key).update(oldValue);                
                });
                $table.bootstrapTable({
                    exportOptions: {
                        fileName: 'tabla'
                    }
                });

                function gotData(data){
                    $table.bootstrapTable('removeAll');

                    var entradas = data.val();
                    var keys = Object.keys(entradas);

                    for (var i = 0; i < keys.length; i++) {

                        var k = keys[i];
                        var nombre_raiem = entradas[k].nombre_raiem;
                        var caducidad = entradas[k].caducidad;
                        var cantidad = entradas[k].cantidad;
                        var localizacion = entradas[k].localizacion;
                        var observaciones = entradas[k].observaciones;
                        var otros_nombres = entradas[k].otros_nombres;

                        $table.bootstrapTable('insertRow', {
                            index: 1,
                            row: {
                                nombre_raiem: nombre_raiem,
                                localizacion: localizacion,
                                nivel: 1,
                                caducidad: caducidad,
                                cantidad: cantidad,
                                observaciones: observaciones,
                                otros_nombres: otros_nombres,
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
            function getRevisiones(){
                var database = firebase.database();
                var ref = database.ref("ambulancias/et_699/revisiones_electromedicina");
                var lista = $('#lista-revisiones');
                var ultima_revision;

                ref.on('value', gotData, errData);


                function gotData(data){
                    var entradas = data.val();
                    var keys = Object.keys(entradas);

                    for (var i = 0; i < keys.length; i++) {

                        var k = keys[i];
                        var fecha = entradas[k].fecha;
                        var quien = entradas[k].quien;
                        var incidencias = entradas[k].incidencias;
                        var observaciones = entradas[k].observaciones;

                        if (i = 1){ 
                            ultima_revision = moment(fecha).format("w");
                            numero_semana = moment().format("w");

                            if (ultima_revision < numero_semana) {
                                $( "#div-check-revision" ).append( "<h6>Revisión semanal <span class=\"label label-danger pull-right\">Pendiente</span></h6>" );
                            } else {
                                $( "#div-check-revision" ).append( "<h6>Revisión semanal <span class=\"label label-success pull-right\">Hecha</span></h6>" );
                            }
                        }

                        var nuevaLinea =
                            '<li class="list-group-item">(' + moment(fecha).format("w") + ') ' + 
                            '<span class="badge">OK</span>' +
                            moment(fecha).format("DD-MM-YYYY") +
                            '</li>';


                        lista.append(nuevaLinea);



                    }
                }

                function errData(err) {
                    console.log('Error!');
                    console.log(err);
                }
            }



            getTablaTotal();
            getRevisiones();



        </script>
    </body>
</html>
