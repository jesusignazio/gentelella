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
        <link href="../vendors/pnotify/dist/pnotify.css" media="all" rel="stylesheet" type="text/css" />
        <link href="../vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../vendors/bootstrap-table/src/extensions/filter-control/bootstrap-table-filter-control.js">


    </head>

    <body class="nav-md">
        <div class="container body">
            <?php include 'panel.php'; ?>
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Ambulancia ET-893</h3> <ol class="breadcrumb">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="ambulancias.php">Ambulancias</a></li>
                            <li class="active">ET-893</li>
                            </ol>
                        </div>

                        <div class="title_right">
                            <div class="col-xs-2 pull-right">

                                <div class="btn-group">
                                    <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fa fa-cog"></span>
                                        Ajustes <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="et_893_niveles.php">Niveles</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row row-eq-height">
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
                                        <h6>Revisión semanal <span class="label label-danger pull-right">Pendiente</span></h6>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Estado</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Inventario</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="container">
                                        <table id="tabla-total" data-toggle="table"
                                               class="table table-striped table-bordered dt-responsive nowrap" 
                                               data-sort-name="nombre_raiem" 
                                               data-sort-order="asc" 
                                               cellspacing="0" 
                                               width="100%"
                                               data-mobile-responsive="true"
                                               data-search="true"
                                               data-show-columns="true"
                                               data-show-export="true"
                                               data-pagination="true"
                                               data-export-types="['excel', 'pdf']"
                                               data-filter-control="true"
                                               >
                                            <thead>

                                                <tr>
                                                    <th data-sortable="true" data-field="nombre_raiem">Nombre</th>
                                                    <th data-align="center" data-formatter="formatterLocalizacion" data-filter-control="select" data-sortable="true" data-field="localizacion">Localización</th>
                                                    <th data-align="center" data-editable="true" data-sortable="true" data-field="caducidad" data-sorter="sortCaducidad">Caducidad</th>
                                                    <th data-align="center" data-editable="true" data-editable="true" data-field="cantidad">Cantidad</th>
                                                    <th data-align="center" data-field="nivel">Nivel</th>
                                                    <th data-editable="true" data-sortable="true" data-field="observaciones">Observaciones</th>
                                                    <th data-editable="true" data-visible="false" data-field="otros_nombres">Otros nombres</th>
                                                    <th data-visible="false" data-field="key">Clave</th>
                                                    <th data-visible="false" data-field="clase">Clave clase</th>
                                                    <th data-visible="false" data-field="clave_nivel">Clave nivel</th>
                                                    <th data-align="center" data-formatter="TableActions">Acciones</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                        <button id="añadirRegistro" class="btn btn-default btn-sm" data-toggle="modal" data-target="#ModalRegistro"><span class="fa fa-plus"></span> Añadir</button>
                                    </div>
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
                                <button id="añadirNivel" class="btn btn-default btn-sm" data-toggle="modal" data-target="#ModalAñadirNivel"><span class="fa fa-plus"></span> Añadir nivel</button>

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
                                <button class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#ModalAñadirRevisionElectromedicina"><span class="fa fa-plus"></span>  Añadir</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Incidencias</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="container">
                                    <h4>Caducado:</h4>
                                    <table id="tabla-caduca" data-toggle="table"
                                           class="table table-striped table-bordered dt-responsive nowrap" 
                                           data-sort-name="nombre_raiem" 
                                           data-sort-order="asc" 
                                           cellspacing="0" 
                                           width="100%"
                                           data-mobile-responsive="true"                                               
                                           data-show-columns="true"
                                           data-show-export="true"
                                           data-pagination="true"
                                           data-export-types="['excel', 'pdf']"
                                           >
                                        <thead>

                                            <tr>
                                                <th data-sortable="true" data-field="nombre_raiem">Nombre</th>
                                                <th data-align="center" data-sortable="true" data-formatter="formatterLocalizacion" data-field="localizacion">Localización</th>
                                                <th data-align="center" data-editable="true" data-sortable="true" data-field="caducidad" data-sorter="sortCaducidad">Caducidad</th>
                                                <th data-align="center" data-editable="true" data-editable="true" data-field="cantidad">Cantidad</th>
                                                <th data-editable="true" data-field="observaciones">Observaciones</th>
                                                <th data-editable="true" data-visible="false" data-field="otros_nombres">Otros nombres</th>
                                                <th data-align="center" data-field="existe_farmacia">Farmacia</th>
                                                <th data-visible="false" data-field="key">Clave</th>
                                                <th data-visible="false" data-field="clase">Clave clase</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="container">
                                    <h4>Por debajo del nivel:</h4>
                                    <table id="tabla-nivel" data-toggle="table"
                                           class="table table-striped table-bordered dt-responsive nowrap" 
                                           data-sort-name="nombre_raiem" 
                                           data-sort-order="asc" 
                                           cellspacing="0" 
                                           width="100%"
                                           data-mobile-responsive='true'
                                           data-show-columns='true'
                                           data-pagination="true"
                                           data-show-export="true"
                                           data-export-types="['excel', 'pdf']"

                                           >
                                        <thead>

                                            <tr>
                                                <th data-sortable="true" data-field="nombre_raiem">Nombre</th>
                                                <th data-sortable="true" data-formatter="formatterLocalizacion" data-align="center" data-field="localizacion">Localización</th>
                                                <th data-align="center" data-field="falta">Falta</th>
                                                <th data-align="center" data-field="nivel">Nivel</th>
                                                <th data-align="center" data-field="existe_farmacia">Farmacia</th>
                                                <th data-visible="false" data-field="key">Clave</th>
                                                <th data-visible="false" data-field="clase">Clave clase</th>
                                            </tr>

                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
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
                                <div id="div-informes-localizaciones" class="container">
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
    <script> //TODO borrar
        function añadirRegistro(){
            var database = firebase.database();
            var ref = database.ref("ambulancias").child("et_893").child("niveles");
            var data = {
                clase : "-Ko6cytls9uBdDuNnt2S",
                nivel : 2,
                existe: 1,
                localizacion: "cajon_1"
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
    <script src="../vendors/moment/locale/es.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.bundle.js"></script>

    <!-- Table -->
    <script src="../vendors/bootstrap-table/src/bootstrap-table.js"></script>
    <script src="../vendors/tableExport.jquery.plugin/tableExport.min.js"></script>
    <script src="../vendors/bootstrap-table/src/extensions/export/bootstrap-table-export.js"></script>
    <script src="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/js/bootstrap-editable.js"></script>
    <script src="../vendors/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js"></script>
    <script src="../vendors/bootstrap-table/src/locale/bootstrap-table-es-ES.js"></script>
    <script src="../vendors/jspdf/dist/jspdf.min.js"></script>
    <script src="../vendors/jspdf-autotable/dist/jspdf.plugin.autotable.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
    <script src="../vendors/bootstrap-table/src/extensions/filter-control/bootstrap-table-filter-control.js"></script>



    <script>

        var arrayClasesKey = [];
        var arrayClasesNombre = [];
        var arrayClasesOtrosNombres = [];
        var arrayLocalizacionesKey = [];
        var arrayLocalizacionesNombre = [];
        var arrayFarmaciaExiste = [];
        var arrayFarmaciaKey = [];

        function TableActions (value, row, index) {

            return [
                '<a href="#" class="danger remove" data-id="' + row.key + '" data-toggle="modal" data-target="#ModalEliminar" title="Borrar">',
                '<i class="glyphicon glyphicon-remove red"></i>',
                '</a>'
            ].join('');

        }

        function formatterLocalizacion(string){
            var label;

            switch(string) {
                case "Puerta ampulario":
                    var label = "<span class=\"label label-warning\">" + string + "</span>"
                    break;
                case "Ampulario&#8291":
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

        function formatterCaducidad(string){
            var i;

            var moment_string = moment(string, "DD-MM-YYYY");
            var moment_3meses = moment().add(3, 'M');


            return i;
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
            var ref = database.ref("ambulancias/et_893/existe");
            var $table = $('#tabla-total');

            ref.once('value', gotData, errData);

            $table.on('editable-save.bs.table', function(field, row, oldValue, $el){

                var i = arrayLocalizacionesNombre.indexOf(oldValue.localizacion);

                var update = {
                    nombre_raiem: oldValue.nombre_raiem,
                    localizacion: arrayLocalizacionesKey[i],
                    nivel: oldValue.nivel,
                    caducidad: oldValue.caducidad,
                    cantidad: oldValue.cantidad,
                    observaciones: oldValue.observaciones,
                    otros_nombres: oldValue.otros_nombres,
                    clase: oldValue.clase,
                    clave_nivel: oldValue.clave_nivel
                }                   

                ref.child(oldValue.key).update(update);

                var cantidad_previa = $el;
                var nueva_cantidad = oldValue.cantidad;

                if (cantidad_previa != nueva_cantidad){
                    var ref2 = database.ref("ambulancias/et_893/niveles/" + oldValue.clave_nivel);

                    ref2.child("existe").once("value", function(childSnap) {

                        var nivel_previo = childSnap.val();
                        var diferencia_cantidad = (cantidad_previa - nueva_cantidad);
                        var diferencia = (nivel_previo - diferencia_cantidad);
                        console.log(diferencia);
                        ref2.update({
                            "existe": diferencia
                        });
                    });
                }



            });

            $table.bootstrapTable({
                exportOptions: {
                    fileName: 'tabla'
                }
            });

            function gotData(data){
                $table.bootstrapTable('removeAll');
                $('#tabla-caduca').bootstrapTable('removeAll');

                var entradas = data.val();
                var keys = Object.keys(entradas);

                for (var i = 0; i < keys.length; i++) {
                    var k = keys[i];

                    var localizacion = entradas[k].localizacion;

                    var clase = entradas[k].clase;
                    var caducidad = entradas[k].caducidad;
                    var a = arrayClasesKey.indexOf(clase);
                    var b = arrayLocalizacionesKey.indexOf(localizacion);
                    var c = arrayFarmaciaKey.indexOf(clase);

                    $table.bootstrapTable('insertRow', {
                        index: i,
                        row: {
                            nombre_raiem: arrayClasesNombre[a],
                            localizacion: arrayLocalizacionesNombre[b],
                            caducidad: entradas[k].caducidad,
                            cantidad: entradas[k].cantidad,
                            nivel: entradas[k].nivel,
                            observaciones: entradas[k].observaciones,
                            otros_nombres: arrayClasesOtrosNombres[a],
                            key: keys[i],
                            clase: entradas[k].clase,
                            clave_nivel: entradas[k].clave_nivel,
                            acciones: true
                        }
                    });
                    
                

                    var today = moment();
                    var e = moment(caducidad, "DD-MM-YYYY");
                    if (e.diff(today, 'days') < 0){
                        var existe;
                        switch (arrayFarmaciaExiste[c]){
                            case true:
                                existe = "<span class=\"fa fa-check-square\"></span>";
                                break;
                            case false:
                                break;
                            default:
                        }
                        $('#tabla-caduca').bootstrapTable('insertRow', {
                            index: 1,
                            row: {
                                nombre_raiem: arrayClasesNombre[a],
                                localizacion: arrayLocalizacionesNombre[b],
                                caducidad: caducidad,
                                cantidad: entradas[k].cantidad,
                                observaciones: entradas[k].observaciones,
                                otros_nombres: arrayClasesOtrosNombres[a],
                                existe_farmacia: existe,
                                key: k,
                                clase: clase
                            }
                        });
                    }
                }
            }

            function errData(err) {
                console.log('Error!');
                console.log(err);

            }
        }

        function searchInArray(array, obj){
            var i;

        }

        function getRevisiones(){
            var ref = firebase.database().ref('ambulancias/et_893/revisiones_electromedicina').orderByKey().limitToLast(10);
            var numero_semana = moment().format("w");

            ref.once("value", function(data) {
                var i = 0;
                data.forEach(function (childSnap) {

                    var fecha = childSnap.val().fecha;

                    if (moment(fecha, "DD-MM-YYYY").format("w") == numero_semana) {

                        $( "#div-check-revision" ).html( "<h6>Revisión semanal <span class=\"label label-success pull-right\">Hecha</span></h6>" );
                    }

                    var nuevaLinea =
                        '<li class="list-group-item">(' + moment(fecha, "DD-MM-YYYY").format("w") + ') ' + 
                        '<span class="badge">OK</span>' +
                        moment(fecha, "DD-MM-YYYY").format("LL") +
                        '</li>';

                    $('#lista-revisiones').append(nuevaLinea);
                    i++;

                });
            });

            function getParent(snapshot) {
                // You can get the reference (A Firebase object) from a snapshot
                // using .ref().
                var ref = snapshot.ref();
                // Now simply find the parent and return the name.
                return ref.parent().name();
            }
        }

        function getRevisiones1(){
            var database = firebase.database();
            var ref = database.ref("ambulancias/et_893/revisiones_electromedicina");
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
                        ultima_revision = moment(fecha, "DD-MM-YYYY").format("w");
                        numero_semana = moment().format("w");

                        if (ultima_revision < numero_semana) {
                            $( "#div-check-revision" ).append( "<h6>Revisión semanal <span class=\"label label-danger pull-right\">Pendiente</span></h6>" );
                        } else {
                            $( "#div-check-revision" ).append( "<h6>Revisión semanal <span class=\"label label-success pull-right\">Hecha</span></h6>" );
                        }
                    }

                    var nuevaLinea =
                        '<li class="list-group-item">(' + moment(fecha, "DD-MM-YYYY").format("w") + ') ' + 
                        '<span class="badge">OK</span>' +
                        moment(fecha, "DD-MM-YYYY").format("LL") +
                        '</li>';

                    lista.append(nuevaLinea);

                }
            }

            function errData(err) {
                console.log('Error!');
                console.log(err);
            }
        }

        function setupPNotify(){
            PNotify.prototype.options.styling = "fontawesome";
            $(document).ready(function (){
                $('.ui-pnotify').remove();
            });
        }

        function getArrayClases(){
            var ref = firebase.database().ref('clases').orderByChild('nombre_raiem');

            ref.once("value", function(data) {
                var i = 0;
                data.forEach(function (childSnap) {
                    arrayClasesKey[i] = childSnap.key;
                    arrayClasesNombre[i] = childSnap.val().nombre_raiem;
                    arrayClasesOtrosNombres[i] = childSnap.val().otros_nombres;
                    $('#registro-nombre').append($('<option>', {
                        value: arrayClasesKey[i],
                        text: arrayClasesNombre[i]
                    }));
                    $('#select-clases-nivel').append($('<option>', {
                        value: arrayClasesKey[i],
                        text: arrayClasesNombre[i]
                    }));
                    i++;

                });
            });

            function getParent(snapshot) {
                // You can get the reference (A Firebase object) from a snapshot
                // using .ref().
                var ref = snapshot.ref();
                // Now simply find the parent and return the name.
                return ref.parent().name();
            }
        }

        function getArrayLocalizaciones(){
            var ref = firebase.database().ref('ambulancias/et_893/localizaciones');

            ref.once("value", function(data) {
                var i = 0;
                data.forEach(function (childSnap) {
                    arrayLocalizacionesKey[i] = childSnap.key;
                    arrayLocalizacionesNombre[i] = childSnap.val().nombre;
                    $('#select-localizacion-nivel').append($('<option>', {
                        value: arrayLocalizacionesKey[i],
                        text: arrayLocalizacionesNombre[i]
                    }));
                    $('#registro-localizacion').append($('<option>', {
                        value: arrayLocalizacionesKey[i],
                        text: arrayLocalizacionesNombre[i]
                    }));

                    var nuevaLinea =
                        '<a href="#"><p>' + arrayLocalizacionesNombre[i] +
                        '</p></a>';

                    $('#div-informes-localizaciones').append(nuevaLinea);

                    i++;

                });
            });

            function getParent(snapshot) {
                // You can get the reference (A Firebase object) from a snapshot
                // using .ref().
                var ref = snapshot.ref();
                // Now simply find the parent and return the name.
                return ref.parent().name();
            }
        }

        function getExistenciasFarmacia(){
            var ref = firebase.database().ref('farmacia/nivel/');

            ref.once("value", function(data) {
                var i = 0;

                data.forEach(function (childSnap) {
                    arrayFarmaciaKey[i] = childSnap.key;
                    var bool_i;
                    switch (childSnap.val().cantidad) {
                        case 0: 
                            arrayFarmaciaExiste[i] = false;
                            break;
                        default: 
                            arrayFarmaciaExiste[i] = true;
                            break;
                    }                        
                    i++;
                });
            });

            function getParent(snapshot) {
                // You can get the reference (A Firebase object) from a snapshot
                // using .ref().
                var ref = snapshot.ref();
                // Now simply find the parent and return the name.
                return ref.parent().name();
            }
        }

        function getTablaNivel(){
            $('#tabla-nivel').bootstrapTable('removeAll');
            var ref = firebase.database().ref('ambulancias/et_893/niveles/');

            ref.once("value", function(data) {

                data.forEach(function (childSnap) {

                    var var_nivel = childSnap.val().nivel;
                    var var_existe = childSnap.val().existe;

                    var a = arrayClasesKey.indexOf(childSnap.val().clase);
                    var b = arrayLocalizacionesKey.indexOf(childSnap.val().localizacion);
                    var c = arrayFarmaciaKey.indexOf(childSnap.val().clase);

                    if (var_existe < parseInt(var_nivel)){
                        var existe;

                        switch (arrayFarmaciaExiste[c]){
                            case true:
                                existe = "<span class=\"fa fa-check-square\"></span>";
                                break;
                            case false:
                                break;
                            default:
                        }
                        $('#tabla-nivel').bootstrapTable('insertRow', {
                            index: 1,
                            row: {
                                nombre_raiem: arrayClasesNombre[a],
                                localizacion: arrayLocalizacionesNombre[b],
                                falta: (childSnap.val().nivel - childSnap.val().existe),
                                nivel: childSnap.val().nivel,
                                otros_nombres: arrayClasesOtrosNombres[a],
                                existe_farmacia: existe,
                                key: childSnap.key,
                                clase: childSnap.val().clase
                            }
                        });
                        //console.log(arrayClasesNombre[a], childSnap.val().nivel, childSnap.val().existe);
                    }
                });
            });



        }

        function debug001(){
            var ref = firebase.database().ref('ambulancias/et_893/niveles/');

            ref.once("value", function(data) {
                data.forEach(function (childSnap){
                    firebase.database().ref("ambulancias/et_893/niveles/" + childSnap.key).update({
                        "existe": 0
                    });
                });
            });
        }

        function sortCaducidad(a,b){
            var i;
            var moment_a = moment(a, "DD-MM-YYYY");
            var moment_b = moment(b, "DD-MM-YYYY");

            if (moment(moment_a).isBefore(moment_b)){
                i = -1; // true
            }
            else if (moment(moment_a).isSame(moment_b)){
                i = 0;
            } else {
                i = 1;
            }


            return i;
        }

        init();

        function init(){
            getArrayClases();
            getExistenciasFarmacia();
            getArrayLocalizaciones();
            setupPNotify();
            getTablaTotal();
            getRevisiones();
            getTablaNivel();

            //debug001(); //Poner existe a 0 en nivel
        }


    </script>

    <div class="modal fade-in" id="ModalRegistro" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Añadir registro:</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="registro-nombre">Clase:</label>
                            <select class="form-control" id="registro-nombre">

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="registro-localizacion">Localización:</label>
                            <select class="form-control" id="registro-localizacion">

                            </select>
                        </div>
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="registro-caducidad" class="control-label">Fecha de caducidad:</label>
                                <input type='text' class="form-control" id='registro-caducidad' />
                            </div>
                            <div class="checkbox">
                                <label for="registro-esterilizacion"><input id='registro-esterilizacion' type="checkbox">Fecha de esterilización.</label>
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $('#registro-caducidad').datetimepicker({
                                        locale: "es",
                                        format: "DD-MM-YYYY",
                                    });
                                });
                            </script>

                        </div>
                        <div class="form-group">
                            <label for="registro-cantidad" class="control-label">Cantidad:</label>
                            <input type="text" class="form-control" id="registro-cantidad">
                        </div>
                        <div class="form-group">
                            <label for="registro-observaciones" class="control-label">Observaciones:</label>
                            <textarea class="form-control" id="registro-observaciones"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="button-añadir-registro" data-dismiss="modal">Añadir</button>
                </div>
                <script>
                    $('#button-añadir-registro').on('click', function () {
                        var i = arrayClasesKey.indexOf($('#registro-nombre').val());
                        var var_nivel = 0;
                        var var_clave_nivel;
                        var var_existe_previo;

                        var ref_nivel = firebase.database().ref("ambulancias/et_893/niveles");
                        ref_nivel.orderByChild("clase")
                            .equalTo(arrayClasesKey[i]);

                        ref_nivel.once("value", function(data) {
                            var e = 0;
                            data.forEach(function (childSnap) {

                                var loc = childSnap.val().localizacion;
                                var clas = childSnap.val().clase;

                                if (loc == $('#registro-localizacion').val() && clas == $('#registro-nombre').val()){
                                    var_nivel = childSnap.val().nivel;
                                    var_clave_nivel = childSnap.key;
                                    var_existe_previo = childSnap.val().existe;
                                }
                                e++;

                            });
                            var data = {
                                caducidad : $('#registro-caducidad').val(),
                                cantidad : $('#registro-cantidad').val(),
                                clase : arrayClasesKey[i],
                                localizacion : $('#registro-localizacion').val(),
                                nivel : parseInt(var_nivel),
                                clave_nivel: var_clave_nivel,
                                nombre_raiem : arrayClasesNombre[i],
                                observaciones : $('#registro-observaciones').val(),
                                esterilizacion : $('#registro-esterilizacion').is(':checked')
                            }

                            var ref = firebase.database().ref("ambulancias/et_893/existe/");
                            ref.push(data);

                            //TODO insertar linea

                            var var_existe = (parseInt(var_existe_previo) + parseInt($('#registro-cantidad').val()));

                            firebase.database().ref("ambulancias/et_893/niveles/" + var_clave_nivel).update({
                                "existe": var_existe
                            });

                            new PNotify({
                                title: 'Añadido registro',
                                text: 'Registro añadido.',
                                type: 'success'
                            });

                            //getTablaNivel();
                        });


                    });

                </script>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalAñadirRevisionElectromedicina" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Nueva revisión de electromedicina ET-699:</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="fecha-revision-electromedicina" class="control-label">Fecha:</label>
                            <input type='text' class="form-control" id='fecha-revision-electromedicina' />
                            <script type="text/javascript">
                                $(function () {
                                    $('#fecha-revision-electromedicina').datetimepicker({
                                        locale: "es",
                                        format: "DD-MM-YYYY",
                                    });
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="observaciones-revision-electromedicina" class="control-label">Observaciones:</label>
                            <textarea class="form-control" id="observaciones-revision-electromedicina"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="quien-revision-electromedicina" class="control-label">Quién:</label>
                            <input type="text" class="form-control" id="quien-revision-electromedicina">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button id="button-añadir-revision-electromedicina" type="button" data-dismiss="modal" class="btn btn-primary">Añadir</button>
                    <script>
                        $('#button-añadir-revision-electromedicina').on('click', function () {
                            var data = {
                                fecha: $('#fecha-revision-electromedicina').val(),
                                observaciones: $('#observaciones-revision-electromedicina').val(),
                                quien: $('#quien-revision-electromedicina').val()
                            }
                            //TODo show notification

                            var ref = firebase.database().ref("ambulancias/et_893/revisiones_electromedicina/");
                            ref.push(data);
                            new PNotify({
                                title: 'Añadido',
                                text: 'Registro de revisión de electromedicina añadido.',
                                type: 'success'
                            });
                        });

                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalAñadirNivel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Añadir nivel:</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="select-clases-nivel">Clase:</label>
                            <select class="form-control" id="select-clases-nivel">

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select-localizacion-nivel">Localizacion:</label>
                            <select class="form-control" id="select-localizacion-nivel">
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="textarea-nivel" class="control-label">Nivel:</label>
                            <textarea class="form-control" id="textarea-nivel"></textarea>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button id="button-modal-nivel" type="button" class="btn btn-primary">Añadir</button>
                    <script>
                        $('#button-modal-nivel').on('click', function () {
                            var data = {
                                clase: $('#select-clases-nivel').val(),
                                localizacion: $('#select-localizacion-nivel').val(),
                                nivel: parseInt($('#textarea-nivel').val()),
                                existe: 0
                            }
                            //TODo show notification

                            var ref = firebase.database().ref("ambulancias/et_893/niveles/");
                            ref.push(data);
                            new PNotify({
                                title: 'Añadido',
                                text: 'Registro de Nivel añadido.',
                                type: 'success'
                            });
                        });

                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalEliminar">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color:#D9534F" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="color:#fff">Eliminar</h4>
                </div>
                <div class="modal-body" style="background:#fff">
                    <p>
                        ¿Estás seguro? Esta acción no se puede deshacer.
                    </p>
                </div>
                <div class="modal-footer" style="background:#fff">
                    <div class="btn-group" role="group"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button id="button-eliminar" type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button></div>
                </div>
            </div>
        </div>
        <script>
            $('#ModalEliminar').on('show.bs.modal', function (event) {
                var i = $(event.relatedTarget).data('id');

                $('#button-eliminar').on('click', function () {

                    //TODo show notification
                    new PNotify({
                        title: 'Eliminado',
                        text: 'Registro eliminado.',
                        type: 'success'
                    });

                    var ref = firebase.database().ref("ambulancias/et_893/existe");

                    var cantidad;
                    var clave_nivel;

                    ref.child(i).once("value", function(childSnap) {
                        cantidad = childSnap.val().cantidad;
                        clave_nivel = childSnap.val().clave_nivel;
                    })


                    var ref2 = firebase.database().ref("ambulancias/et_893/niveles/" + clave_nivel);

                    ref2.child("existe").once("value", function(childSnap) {

                        var nivel_previo = childSnap.val();

                        var diferencia = (nivel_previo - cantidad);
                        console.log(diferencia);
                        ref2.update({
                            "existe": diferencia
                        });
                    });

                    ref.child(i).remove();


                })
            })
        </script>
    </div>
    </body>
</html>
