<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css">
     <link rel="stylesheet" href="http://localhost/MiGestorScrum/css/style.css"  type="text/css" /> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.css">
</head>

<html lang="en">
    <div class="col-md-offset-1" >
        
        <br>
        
        <button type="button" data-target="#vNuevoProyecto" class="btn btn-primary " data-toggle="modal" data-formato="Ingresar" ><span class="glyphicon glyphicon-plus"></span> Nuevo proyecto</button>
        
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
                        
                        <form  action="#" id="formRegistro">
                            <div class="form-group">
                              <label for="nombres">Nombre del proyecto*</label>
                              <input type="text" class="form-control" id="nombrePro" placeholder="Nombre del proyecto">
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
                        
                        <form  action="#" id="formRegistro">
                            <div class="form-group">
                              <label for="nombres">Mienbros de tu equipo</label>
                              <table id="tablaEquipo"class="table tablet-striped table-bordered table-hover table-condense">
                                  <thead>
                                        <tr>

                                            <th>Correo electronico</th>
                                            <th>Rol</th>
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
                                <button type="button" class="btn btn-primary"onclick="agregarEquipo()"><span class="glyphicon glyphicon-plus"></span> Agregar a tu equipo</button>
                            </div>     
                           
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="primerPaso()"><span class="glyphicon glyphicon-arrow-left"></span> Atras</button>
                        <button type="button"  class="btn btn-success" data-dismiss="modal" id="btnSiguiemteNuevoProyeco"><span class="glyphicon glyphicon-ok"></span> Aceptar</button>
                        
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
                            if(data.status) //if success close modal and reload ajax table
                            {
                                 $('#tablaEquipo').DataTable({ 
                                    // Load data for the table's content from an Ajax source
                                    "ajax": {
                                    "processing": true, //Feature control the processing indicator.
                                    "serverSide": true,
                                    "url":"<?php echo base_url('index.php/proyecto/ajax_listarEquipo'); ?>",
                                    "type":"POST",
                                    
                                    
                                    },
                                    "aoColumnDefs":[
                                     {"Data":'Correo electronico'},
                                     {"Data":'Rol'}
                                    ]

                                });
                            }

                        }
                });

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
                             $('#vNuevoProyecto').modal('hide');
                             $('#vNuevoProyectop2').modal('show');
                            // console.log("si me devuelve estado true para cerrar la ventana");
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

</html>