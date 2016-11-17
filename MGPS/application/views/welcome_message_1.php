<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
</head>

<html lang="en">
    <div class = "col-md-3 col-md-offset-9" >
        
        <br>
        
        <button type="button" data-target="#vIngresar" class="btn btn-primary " data-toggle="modal" data-formato="Ingresar">Ingresar</button>
        <button  type="button" data-target="#vRegistro" class="btn btn-primary " data-toggle="modal" data-formato="Registro">Registrarse</button>
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
                              <input type="text" class="form-control" id="nombres" placeholder="Nombres">
                            </div>
                            <div class="form-group">
                              <label for="">Apellidos*</label>
                              <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
                            </div>
                            <div class="form-group">
                              <label for="email">Correo electronico*</label>
                              <input type="email" class="form-control" id="email" placeholder="ejemplo@tucorreo.com">
                            </div>
                            <div class="form-group">
                              <label for="pwd">Contraseña*</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                              <label for="email">Apodo</label>
                              <input type="email" class="form-control" id="apodo" placeholder="Apodo(alias)">
                            </div>
                            <div id="kv-avatar-errors-1" class="center-block" style="width:600px;display:none"></div>
                                <form class="text-center" action="/avatar_upload.php" method="post" enctype="multipart/form-data">
                                    <div class="kv-avatar center-block" style="width:200px">
                                        <input id="avatar-1" name="avatar-1" type="file" class="file-loading">
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
                        <form role="form" id="fIngreso">
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
               
                var nombres = $('#nombres').val();
                var apellidos = $('#apellidos').val();
                var email = $('#email').val();
                var contrasena = $('#pwd').val();
                var apodo = $('#apodo').val();
                $.ajax({
                    url: '<?php echo base_url('index.php/usuarios/ajax_agregar'); ?>',
                    type:"POST",
                    data:"email="+email+"&nombres="+nombres+"&apellidos="+apellidos+"&pwd="+contrasena+"&apodo="+apodo,
                    dataType:"JSON",
                    
                    success: function(data)
                    {
                        if(data.status) //if success close modal and reload ajax table
                        {
                             $('#vRegistro').modal('hide');
                             console.log("si me devuelve estado true para cerrar la ventana");
                        }
                      
                    }
                });
            }
            function ingresar(){
                var correo =$('#correo').val();
                var pass =$('#contrasena').val();
                $.ajax({
                    url:'<?php echo base_url('index.php/usuarios/ajax_ingresar'); ?>',
                    data:{correo:correo, pwd:pass},
                    dataType:"JSON",
                    success: function(data)
                    {
                        if((data.correo=="si")){
                            
                            if(data.correcto=="si"){
                                console.log("datos correctos, lo dejamos infgresar")
                            }
                            else{
                                console.log("contaseña incorrecta");
                            }
                            
                        }
                        else{
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
                layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
                allowedFileExtensions: ["jpg", "png", "gif"]
            });
            function limpiar(){
               // $('#vRegistro')[0].reset(); // reset form on modals
                document.getElementById('nombres').value = "";
                document.getElementById('kv-avatar-errors-1').value = "";
                
                $('.help-block').empty(); // clear error string
                $('#vRegistro').modal('hide');
            }
    </script>
    
        
</html>