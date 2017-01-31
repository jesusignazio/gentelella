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

        <!-- bootstrap-table -->
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
                            <h3>Farmacia</h3>
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
                                    <h2>Farmacia</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="fixed-table-toolbar">
                                        <div class="bs-bars pull-left"><div id="toolbar">        
                                            <button disabled="" class="btn btn-danger" id="remove">            
                                                <i class="glyphicon glyphicon-remove"></i> Borrar       
                                            </button>    
                                            </div>
                                        </div>
                                    </div>
                                    <table id="tabla" 
                                           class="table table-striped table-bordered dt-responsive nowrap" 
                                           data-sort-name="nombre" 
                                           data-sort-order="asc" 
                                           cellspacing="0" 
                                           width="100%"
                                           data-row-style="rowStyle"
                                           data-mobile-responsive="true"
                                           data-search="true"
                                           data-show-columns="true"
                                           data-show-export="true"
                                           data-pagination="true"
                                           data-export-types="['excel']"
                                           data-filter-control="false"

                                           >
                                        <thead>
                                            <tr> 
                                                <th data-sortable="true" data-field="nombre" data-align="left">Nombre</th>
                                                <th data-sortable="true" data-field="caducidad" data-align="center">Caducidad</th>
                                                <th data-sortable="true" data-field="cantidad" data-align="center">Cantidad</th>
                                                <th data-sortable="true" data-field="sublocalizacion" data-align="center">Localización</th>
                                                <th data-sortable="false" data-field="otros_nombres" data-align="center">Otros nombres</th>
                                                <th data-sortable="false" data-field="id_producto" data-align="center">ID</th>
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

        <!-- boostrap-table -->
        <script src="../vendors/bootstrap-table/src/bootstrap-table.js"></script>
        <script src="../vendors/bootstrap-table/src/locale/bootstrap-table-es-ES.js"></script>
        <script src="../vendors/tableExport.jquery.plugin/tableExport.min.js"></script>
        <script src="../vendors/bootstrap-table/src/extensions/export/bootstrap-table-export.js"></script>
        <script src="../vendors/bootstrap-table/src/extensions/mobile/bootstrap-table-mobile.js">   </script>
        <script src="../vendors/bootstrap-table/src/extensions/filter-control/bootstrap-table-filter-control.js"></script>

        <!-- Populate tabla -->
        <script>
            $(document).ready(function(){
                var url="../php/getFarmacia.php";
                $.getJSON(url,function(movimientos){
                    $.each(movimientos, function(i,movimiento){
                        var rows = [];
                        var id_existencia = movimiento.id_existencia;
                        var nombre_producto = movimiento.nombre_producto;
                        var nombre_sublocalizacion = movimiento.nombre_sublocalizacion;
                        var otros_nombres = movimiento.otros_nombres;
                        var id_producto = movimiento.id_producto;
                        var cantidad = movimiento.cantidad;

                        todaysDate = new Date();
                        todaysDate.setHours(0, 0, 0, 0);
                        movimientoDate = new Date(movimiento.fecha_caducidad)
                        if (movimientoDate <= todaysDate){
                            var fecha_caducidad = "<i class=\"fa fa-warning\"></i>   " + movimiento.fecha_caducidad + "   <i class=\"fa fa-warning\"></i>";
                        }
                        else{
                            var fecha_caducidad = movimiento.fecha_caducidad;
                        }



                        rows.push ({
                            nombre: nombre_producto,
                            sublocalizacion: nombre_sublocalizacion,
                            caducidad: fecha_caducidad, 
                            cantidad: cantidad,
                            otros_nombres: otros_nombres,
                            id_producto: id_producto,
                        });
                        $('#tabla').bootstrapTable();
                        $('#tabla').bootstrapTable('append', rows);
                        $('#tabla').bootstrapTable('hideColumn', 'otros_nombres');
                        $('#tabla').bootstrapTable('hideColumn', 'id_producto');
                    });
                });
            });
        </script>
        <script>
            
                function rowStyle(row, index) {
                var classes = ['success', 'danger'];

                $.each(this.columns, function(i, column) {

                    if (column.id == 'ingreso') {
                        return {
                            classes: classes[1]
                        };
                    }

                    else { 
                        return {
                            classes: classes[0]
                        }
                    }


                })
                return {};
            }

            
        </script>

        <script>
            $('#tabla').bootstrapTable({
                onClickRow: function (row, $element) {
                    var data = JSON.stringify(row);
                    var json = JSON.parse(data);
                    var id = json.id_producto;
                    location.href = "ver_producto_farmacia.php?id=" + id;
                    
                }
            }
                                                  );
        </script>

    </body>
</html>
