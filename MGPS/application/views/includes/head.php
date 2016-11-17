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
        <link href="<?php echo base_url('css/style.css');?>" rel="stylesheet" type="text/css"  media="all" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,600,400' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url('css/owl.carousel.css');?>" rel="stylesheet" type="text/css" media="all" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/3.3.5/css/bootstrap.min.css" />-->
        <script src="<?php echo base_url('js/jquery-1.10.2.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/responsive-nav.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/owl.carousel.js');?>" type="text/javascript"></script>
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
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="http://localhost/MGPS/css/fileinput.css" media="all" rel="stylesheet" type="text/css" /> 
        <script src="http://localhost/MGPS/js/fileinput.js" type="text/javascript"></script>
        <link rel="stylesheet" href="http://localhost/MGPS/css/style.css"  type="text/css" /> <!-- Revisar -->
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
        <div>
            <div class="modal fade" id="vRegistro" tabindex="-1" role="dialog" aria-labelledby="titulo-modal5" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <!--encabezado de la emergente-->
                        <div class="modal-header" style="padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title" id="exampleModalLabel">Registro de usuarios</h2>
                        </div>
                        <!--contenido de la emergente-->
                        <div class="modal-body" style="padding:40px 50px;">

                            <form  action="#" id="formRegistro">
                                <div class="form-group">
                                    <label for="nombres">Nombres*</label>
                                    <input type="text" name="nombres"class="form-control" id="nombres" placeholder="Nombres">
                                </div>
                                <div class="form-group">
                                    <label for="">Apellidos*</label>
                                    <input type="text" name="apellidos"class="form-control" id="apellidos" placeholder="Apellidos">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electronico*</label>
                                    <input type="email" name="correo"class="form-control" id="email" placeholder="ejemplo@tucorreo.com">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Contraseña*</label>
                                    <input type="password" name="contrasena"class="form-control" id="pwd" placeholder="Contraseña">
                                </div>
                                <div class="form-group">
                                    <label for="email">Apodo</label>
                                    <input type="email" name="apodo"class="form-control" id="apodo" placeholder="Apodo(alias)">
                                </div>
                                <div id="kv-avatar-errors-1" class="center-block" style="width:600px;display:none"></div>
                                
                                    <div class="kv-avatar center-block" style="width:200px">
                                        <input id="avatar-1" name="foto_usuario" type="file" class="file-loading">
                                    </div>
                                    <!-- include other inputs if needed and include a form submit (save) button -->
                                </form>
                                <!--div class="form-group" id="buscarFoto" >
                                    <label>Selecciona tu foto(opcional)</label>
                                    <input id="file-3" type="file" multiple=true>
                                </div-->
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" onclick="limpiar()">Cancelar</button>
                            <button type="button"  class="btn btn-primary" onclick="guardar()"id="btnRegistrar">Enviar</button>

                        </div>

                    </div>

                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="vIngresar" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4><span class="glyphicon glyphicon-lock"></span> Iniciar sesión</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                            <form role="form" id="formIngreso">
                                <div class="form-group">
                                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Correo electrónico</label>
                                    <input type="text" class="form-control" id="correo" placeholder="Correo electrónico">
                                </div>
                                <div class="form-group">
                                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
                                    <input type="password" class="form-control" id="contrasena" placeholder="Contraseña">
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" checked>Recordarme</label>
                                </div>
                                <button type="button" class="btn btn-primary btn-block" onclick="ingresar()"><span class="glyphicon glyphicon-off"></span> Ingresar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                            <p>No eres miembro? <a href="#">Registrate</a></p>
                            <p>Olvidaste tu<a href="#"> contraseña?</a></p>
                        </div>
                    </div>

                </div>
            </div>



            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

            <script type=text/javascript>
                function guardar(){
               
                var datos=new FormData($('#formRegistro')[0]);
                $.ajax({
                    url: '<?php echo base_url('index.php/usuarios/ajax_agregar'); ?>',
                    type:"POST",
                    data:datos,
                    cache:false,
                    contentType:false,
                    processData:false,
                    dataType:"JSON",
                    
                    success: function(data)
                    {
                        if(data.status) //if success close modal and reload ajax table
                        {
                             $('#vRegistro').modal('hide');
                             console.log("si me devuelve estado true para cerrar la ventana");
                             $('#formRegistro')[0].reset();
                            
                        }
                      
                    }
                });
            }
                                    function ingresar() {
                                        var correo = $('#correo').val();
                                        var pass = $('#contrasena').val();
                                        $.ajax({
                                            url: '<?php echo base_url('index.php/usuarios/ajax_ingresar'); ?>',
                                            data: {correo: correo, pwd: pass},
                                            dataType: "JSON",
                                            success: function (data)
                                            {
                                                if ((data.correo == "si")) {

                                                    if (data.correcto == "si") {
                                                        $('#vIngresar').modal('hide');
                                                        //var PostData= $('#correo').val();
                                                        location.href = "index.php/Usuarios/";
                                                        console.log("datos correctos, lo dejamos infgresar");
                                                        
                                                    } else {
                                                        console.log("contaseña incorrecta");
                                                    }

                                                } else {
                                                    console.log("correo incorrecto");
                                                }
                                            }
                                        });
                                    }
                                    //para el preview y estilo de la funcion foto
                                    $("#file-3").fileinput({
                                        showUpload: false,
                                        showCaption: false,
                                        browseClass: "btn btn-primary btn-lg",
                                        fileType: "any",
                                        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
                                    });
                                    //subir foto mas pro
                                    var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' +
                                            'onclick="alert(\'Call your custom code here.\')">' +
                                            '<i class="glyphicon glyphicon-tag"></i>' +
                                            '</button>';
                                    $("#avatar-1").fileinput({
                                        overwriteInitial: true,
                                        maxFileSize: 1500,
                                        showClose: false,
                                        showCaption: false,
                                        browseLabel: '',
                                        removeLabel: '',
                                        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
                                        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                                        removeTitle: 'Cancel or reset changes',
                                        elErrorContainer: '#kv-avatar-errors-1',
                                        msgErrorClass: 'alert alert-block alert-danger',
                                        defaultPreviewContent: '<img src="http://localhost/MGPS/img/avatar.png" alt="Your Avatar" style="width:160px">',
                                        layoutTemplates: {main2: '{preview} ' + btnCust + ' {remove} {browse}'},
                                        allowedFileExtensions: ["jpg", "png", "gif"]
                                    });
                                    function limpiar() {
                                        // $('#vRegistro')[0].reset(); // reset form on modals
                                        document.getElementById('nombres').value = "";
                                        document.getElementById('kv-avatar-errors-1').value = "";

                                        $('.help-block').empty(); // clear error string
                                        $('#vRegistro').modal('hide');
                                    }
            </script>


            <!-- END VENTANA MODAL -->




            <!----start-header----->
            <div class="header">
                <div class="wrap">
                    <div class="top-header">
                        <div class="logo">
                            <a href="<?php echo base_url('index.php');?>"><h1><span>MI GESTOR DE PROYECTOS SCRUM</span></h1></a>
                        </div>
                        <div class="top-nav-right">
                            <div class="top-nav-right-sesion">
                                <!--<div class="buttonSesion" data-target="#vRegistro" class="btn btn-primary " data-toggle="modal"><span><a href="#">Iniciar sesión</a></span></div>-->
                                <button type="button" data-target="#vIngresar" class="btn btn-primary " data-toggle="modal" data-formato="Ingresar">Ingresar</button>
                                <button  type="button" data-target="#vRegistro" class="btn btn-primary " data-toggle="modal" data-formato="Registro">Registrarse</button>
                            </div>
                        </div>
                    </div>

                    <!---start-top-nav---->
                    <div class="top-nav">
                        <div class="top-nav-left">
                            <div id="nav">
                                <ul>
                                    <li class="current_page_item"><?php echo anchor('../index.php', 'Inicio'); ?></li>
                                    <li><?php echo anchor('controllerPlantilla/caracteristicas', 'Características'); ?></li>
                                    <li><?php echo anchor('controllerPlantilla/guia', 'Guía'); ?></li>
                                    <li><?php echo anchor('controllerPlantilla/quienesSomos', 'Acerca de'); ?></li>
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