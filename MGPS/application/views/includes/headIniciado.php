<!DOCTYPE HTML>
<html>
    <head>
        <title>MGPS</title>
        <!--LIBRERIAS,JAVASCRIPT Y ENLACES A HOJAS DE ESTILO-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,600,400' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url('css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css" media="all" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/3.3.5/css/bootstrap.min.css" />-->
        <script src="<?php echo base_url('js/jquery-1.10.2.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/responsive-nav.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/owl.carousel.js'); ?>" type="text/javascript"></script>
        <!--<script type="text/javascript" src = "<?php echo base_url(); ?>assets/js/usuario.js"></script>-->
        <link rel="stylesheet" type="text/css" href="http://localhost/MGPS/js/jquery-ui.css" />
        <!--<script src="http://localhost/MGPS/js/jquery-1.9.1.js" type="text/javascript"></script>-->
        <script type="text/javascript" src="http://localhost/MGPS/js/jquery-ui.js"></script>
        <!--<?php echo link_tag('css/default.css'); ?>-->
        <?php echo link_tag('css/style.css'); ?>
        <?php echo link_tag('css/owl.carousel.css'); ?>
        <style>
            .modal-header, h4, .close{
            background-color: #A4A4A4;
            color:white !important;
            text-align: center;
            font-size: 30px;
            }
            .modal-footer {
            background-color: #f9f9f9;
            }
        </style>


        <!-- Start Autocompletado -->
        <script type="text/javascript">
            $(document).ready(function () {

                $('tr:odd').css('background', '#e3e3e3');
                //var url = 'index.php/autocomplete/get_data';
                var url = '<?php echo base_url('index.php/autocomplete/get_data'); ?>';
                console.log(url);
                $('#EMAIL').autocomplete({
                    source: url + '?item=EMAIL'
                });

                $('#txtBuscar').autocomplete({
                    source: url + '?item=NOMBRESUSUARIO'
                });

            });
        </script>
        <!-- End Autocompletado -->


        <!-- START VENTANA MODAL LIBRERIAS -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="http://localhost/MGPS/css/fileinput.css" media="all" rel="stylesheet" type="text/css" /> 
        <script src="http://localhost/MGPS/js/fileinput.js" type="text/javascript"></script>
        <link rel="stylesheet" href="http://localhost/MGPS/css/style.css"  type="text/css" /> <!-- Revisar -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.css">

        <style>
            .kv-avatar .file-preview-frame,.kv-avatar .file-preview-frame:hover {
                margin: 0;
                padding: 0;
                border: none;
                box-shadow: none;
                text-align: center;
            }
            .kv-avatar .file-input {
                display: table-cell;
                max-width: 220px;
            }
        </style>
        <!-- END VENTANA MODAL LIBRERIAS -->

    </head>
    <body>
        <!-- START VENTANA MODAL -->
        <!--Modal VER PROYECTO-->
        <div class="modal fade" id="verProyecto" tabindex="-1" role="dialog" aria-labelledby="titulo-modal5" aria-hidden="true">
            
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--encabezado de la emergente-->
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title" id="exampleModalLabel">ASi esta tu proyecto</h2>
                    </div>
                    <!--contenido de la emergente-->
                    <div class="modal-body" style="padding:40px 50px;">
                        
                        <form  action="#" id="formProyecto">
                            <div class="form-group">
                              <label for="nombres">Nombre del proyecto</label>
                              <input type="text" name="nombre"class="form-control" id="nombreProVer" placeholder="Nombre del proyecto">
                            </div>
                            <div class="form-group">
                              <label for="">Fecha de inicio</label>
                              <div>
                                  <input name="fi" placeholder="yyyy-mm-dd" id="fechaInicioPV" class="form-control datepicker" type="text">
                                <span class="help-block"></span>
                            </div>
                            </div>
                            <div class="form-group">
                              <label for="email">Fecha de finalizacion</label>
                              <div>
                                  <input name="ff" placeholder="yyyy-mm-dd" id="fechaFinPV"class="form-control datepicker" type="text">
                                <span class="help-block"></span>
                            </div>
                            </div>
                            <div class="form-group">
                              <label for="pwd">Descripcion</label>
                              <textarea name="descripcion" id="descripcionPV" placeholder="Describe tu proyecto ..." class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="email">Estado</label>
                              
                              <select name="estado" id="estadoPV"class="form-control">
                                        <option value="">--Selecciona un estado</option>
                                        <option value="Abierto">Abierto</option>
                                        <option value="Finalizado">Fnalizado</option>
                                        <option value="Cancelado">Cancelado</option>
                                    </select>
                                    <span class="help-block"></span>
                            </div>
                            
                        
                    </div>
                    <div class="modal-footer">
                        
                        <button type="button"  data-dismiss="modal" class="btn btn-primary" id="btnSiguiemteNuevoProyeco"><span class="glyphicon glyphicon-ok"></span> Aceptar</button>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>

        <!-- Start proyecto -->

        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
        <div>
                
        <div class="modal fade" id="vNuevoProyecto" tabindex="-1" role="dialog" aria-labelledby="titulo-modal5" aria-hidden="true">
            
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--encabezado de la emergente-->
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title" id="exampleModalLabel">Nuevo proyecto, paso 1 de 2</h2>
                    </div>
                    <!--contenido de la emergente-->
                    <div class="modal-body" style="padding:40px 50px;">
                        
                        <form  action="#" id="formProyecto">
                            <div class="form-group">
                              <label for="nombres">Nombre del proyecto*</label>
                              <input type="text" name="nombre"class="form-control" id="nombrePro" placeholder="Nombre del proyecto">
                            </div>
                            <div class="form-group">
                              <label for="">Fecha de inicio*</label>
                              <div>
                                  <input name="fi" placeholder="yyyy-mm-dd" id="fechaInicioP" class="form-control datepicker" type="text">
                                <span class="help-block"></span>
                            </div>
                            </div>
                            <div class="form-group">
                              <label for="email">Fecha de finalizacion*</label>
                              <div>
                                  <input name="ff" placeholder="yyyy-mm-dd" id="fechaFinP"class="form-control datepicker" type="text">
                                <span class="help-block"></span>
                            </div>
                            </div>
                            <div class="form-group">
                              <label for="pwd">Descripcion</label>
                              <textarea name="descripcion" id="descripcionP" placeholder="Describe tu proyecto ..." class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="email">Estado*</label>
                              
                              <select name="estado" id="estadoP"class="form-control">
                                        <option value="">--Selecciona un estado</option>
                                        <option value="Abierto">Abierto</option>
                                        <option value="Finalizado">Fnalizado</option>
                                        <option value="Cancelado">Cancelado</option>
                                    </select>
                                    <span class="help-block"></span>
                            </div>
                            
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                        <button type="button"  class="btn btn-success" onclick="segundoPaso()"id="btnSiguiemteNuevoProyeco"><span class="glyphicon glyphicon-arrow-right"></span> Siguiente</button>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
         <!--segundo paso-->
        <div class="modal fade" id="vNuevoProyectop2" tabindex="-1" role="dialog" aria-labelledby="titulo-modal5" aria-hidden="true">
            
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--encabezado de la emergente-->
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title" id="exampleModalLabel">Nuevo proyecto, paso 2 de 2</h2>
                    </div>
                    <!--contenido de la emergente-->
                    <div class="modal-body" style="padding:40px 50px;">
                        
                        <form  action="#" id="formProyectop2">
                            <div class="form-group">
                              <label for="nombres">Mienbros de tu equipo</label>
                              <table id="tablaEquipo"class="table tablet-striped table-bordered table-hover table-condense">
                                  <thead>
                                        <tr>

                                            <th>Correo electronico</th>
                                            <th>Rol</th>
                                            <th>Accion</th>
                                        </tr>
                                  </thead>>
                                  <tbody></tbody>
                              </table>
                              
                            </div>
                            <div class="form-group">
                                <label for="">Correo eletronico de tu integrante</label>
                                <input type="email" class="form-control" id="idequipo" placeholder="correoemplo@ejemplo.com" >
                            </div>   
                            <div class="form-group">
                                    <label class="control-label col-md-3">Rol</label>
                                    <select name="rol" class="form-control" id="rolMiembro">
                                        <option value="">--Selecciona un rol--</option>
                                        <option value="sMaster">Scrum master</option>
                                        <option value="owner">Product owner</option>
                                        <option value="desarrollo">Equipo de desarrollo</option>
                                    </select>
                                    <span class="help-block"></span>
                                    
                            </div>
                            <div class="form-grup">
                                <button type="button" id="1" value=""class="btn btn-primary"onclick="agregarEquipo()"><span class="glyphicon glyphicon-plus"></span> Agregar a tu equipo</button>
                            </div>     
                           
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnAtrasPro" class="btn btn-primary" name="btnAddTeam" onclick="primerPaso()"><span class="glyphicon glyphicon-arrow-left"></span> Atras</button>
                        <button type="button"  class="btn btn-success"  onclick="limpiar()"id="btnSiguiemteNuevoProyeco"><span class="glyphicon glyphicon-ok"></span> Aceptar</button>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        
        
    </div>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.js"></script>
         
         <script type="text/javascript">
            
            //datepicker
            $('.datepicker').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd",
            todayHighlight: true,
            orientation: "top auto",
            todayBtn: true,
            todayHighlight: true,  
            });
            function agregarEquipo(){
                var proyecto =$('#nombrePro').val();
                var correo=$('#idequipo').val();
                var rol =$('#rolMiembro').val();
                $.ajax({
                    url:'<?php echo base_url('index.php/proyecto/ajax_agregarEquipo'); ?>',
                    type:"POST",
                        data:"proyecto="+proyecto+"&integrante="+correo+"&rol="+rol,
                        dataType:"JSON",

                        success: function(data)
                        {
                            //var mitabla= $('#tablaEquipo').DataTable();
                            //mitabla.ajax.reload();
                            if(data.status) //if success close modal and reload ajax table
                            {
                                /* $('#tablaEquipo').DataTable({ 
                                    // Load data for the table's content from an Ajax source
                                    "ajax": {
                                    "processing": true, //Feature control the processing indicator.
                                    "serverSide": true,
                                    "url":"",
                                    "type":"POST",
                                    
                                    
                                    },
                                    "aoColumnDefs":[
                                     {"Data":'Correo electronico'},
                                     {"Data":'Rol'}
                                    ]

                                });*/
                            if(! $.fn.DataTable.isDataTable('#tablaEquipo'))
                            {
                                 
                                 table = $('#tablaEquipo').DataTable({ 
 
                                    

                                // Load data for the table's content from an Ajax source
                                "ajax": {
                                    "retrieve": true,
                                    "processing": true, //Feature control the processing indicator.
                                    "serverSide": true,
                                    "searching":true,
                                    "method": "POST",
                                    "url": "<?php echo base_url('index.php/proyecto/ajax_listarEquipo'); ?>",
                                    "data": function(f){
                                        return "proyecto="+proyecto;
                                    }
                                },

                                //Set column definition initialisation properties.
                                "columns": [
                                {"data":"Correo electronico"},
                                {"data":"Rol"},
                                {"data":"Accion"}
                                ]

                                });   
                            }   
                              else{
                                    table.ajax.reload();
                                      //table = $('#tablaEquipo').DataTable({ 
                                      //});
                                }  
                        }

                    }
                });

            }
            function eliminar_integrante(id){
                if(confirm('Esta seguro que desea eliminar este integrante?'))
                {
                    // ajax delete data to database
                    $.ajax({
                        url : "<?php echo base_url('index.php/usuarios/ajax_eliminarIntegrante')?>/"+id,
                        type: "POST",
                        dataType: "JSON",
                        success: function(data)
                        {
                            //if success reload ajax table
                            $('#modal_form').modal('hide');
                            table.ajax.reload();
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error deleting data');
                        }
                    });

                }
            }    
        function segundoPaso(){
            //capturamos datos
            //y se guada el proyecto
            var nombreProyecto= $('#nombrePro').val();
            var inicioProyecto= $('#fechaInicioP').val();
            var finProyecto= $('#fechaFinP').val();
            var descripcionProyecto= $('#descripcionP').val();
            var estadoProyecto= $('#estadoP').val();
            console.log(estadoProyecto);
            $.ajax({
                url:'<?php echo base_url('index.php/proyecto/ajax_agregarProyecto'); ?>',
                type:"POST",
                    data:"nombre="+nombreProyecto+"&descripcion="+descripcionProyecto+"&inicio="+inicioProyecto+"&fin="+finProyecto+"&estado="+estadoProyecto,
                    dataType:"JSON",
                    
                    success: function(data)
                    {
                        if(data.status) //if success close modal and reload ajax table
                        {
                            var proyecto =$('#nombrePro').val();
                
                             $.ajax({
                                    url:'<?php echo base_url('index.php/proyecto/ajax_agregarEquipoA'); ?>',
                                    type:"POST",
                                    data:"proyecto="+proyecto,
                                    dataType:"JSON",

                                    success: function(data)
                                    {
                                        if(data.status) //if success close modal and reload ajax table
                                        {
                                             reloadTablaProyectos();
                                             $('#vNuevoProyecto').modal('hide');
                                             $('#vNuevoProyectop2').modal('show');
                                            // console.log("si me devuelve estado true para cerrar la ventana");
                                        }

                                    }
                            });
                        }
                      
                    }
            });
            
        }
        
        function primerPaso(){
            //capturamos datos
            //y se guada el proyecto
            
            $('#vNuevoProyectop2').modal('hide');
            $('#vNuevoProyecto').modal('show');
            
        }
        
        </script>


        <!-- End proyecto -->




        <!----start-header----->
        <div class="header">
            <div class="wrap">
                <div class="top-header">
                    <div class="logo">
                        <a href="index.php"><h1><span>MI GESTOR DE PROYECTOS SCRUM</span></h1></a>
                    </div>
                    <div class="top-nav-right">
                        <div class="top-nav-right-sesion">
                            <img class="center" src='http://localhost/MGPS/imagenes/<?=$this->session->userdata('foto')?>' style='width:30px; height:30px'/>
                            <!--<div class="buttonSesion" data-target="#vRegistro" class="btn btn-primary " data-toggle="modal"><span><a href="#">Iniciar sesión</a></span></div>-->
                            
                            <ul class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user fa-fw"><?=$this->session->userdata('nombres')?> <?=$this->session->userdata('apellidos')?></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="htpp://elperofildelusuario.com"><i class="fa fa-user fa-fw"></i>Perfil</a></li>
                                    <li><a href="javascript:void(0)" id="cerrarSesion"><i class="fa fa-sing-out fa-fw"></i>Cerrar sesion</a></li>
                                </ul>
                            </ul>
                        
                        </div>
                    </div>
                </div>

                <!---start-top-nav---->
                <div class="top-nav">
                    <div class="top-nav-left">
                        <div id="nav">
                            <ul>
                                
                                <li data-target="#vNuevoProyecto" data-toggle="modal"><a>Nuevo proyecto</a></li>
                                <li><?php echo anchor('controllerPlantilla/caracteristicas', 'Característica'); ?></li>
                                

                            </ul>
                        </div>
                        <script>
                            var navigation = responsiveNav("#nav");
                        </script>
                    </div>
                    <div class="top-nav-right">
                        <div class="search">
                            <form id="formBuscar" method="GET" action="<?= base_url() ?>index.php/usuario/searchUsuario">
                                <input type="text" id="txtBuscar" name="txtBuscar" value="" placeholder="Buscar ..." />
                                <input type="submit" value="" />
                                <div class="clear"></div>
                            </form>
                            <?php
                            $result = array();
                            if ($result) {
                                foreach ($result->result() as $row) {
                                    echo "<a href='" . $row->nombre . "'target='_blank'>" . $row->nombre . "</a><br />";
                                }
                            }
                            ?>
                        </div>
                        
                    </div>
                    <div class="clear"> </div>
                </div>
                <!---End-top-nav---->
            </div>

        </div>
        <!----End-header----->
        
        
        <script>
        $('#cerrarSesion').on("click",function(event){
            event.preventDefault();
             $.ajax({
                url:'<?php echo base_url('index.php/Usuarios/cerrar'); ?>',
                type:"POST",
                success: function()
                {
                  window.location.href="http://localhost/MGPS/index.php";

                }
            });
        });
        </script>