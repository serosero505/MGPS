
<?php $this->load->view('includes/headIniciado'); ?>
<!---start-content---->



<!---Start-content---->

<div class="wrap">
    <div class="about-desc">
        <div class="content">       
            <div class="about-data"> 



                <center>
                    
                </center>

                <div id="titulo">
                    <caption><h2><strong>Listado Proyectos</strong></h2></caption>
                </div>

                <div>

                    <table id="tablaProyectos"class="table tablet-striped table-bordered table-hover table-condense">
                        <thead>
                            <tr>
                                <th>Nombre del proyecto</th>
                                <th>Fecha inicio</th>
                                <th>Fecha fin</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Accion</th>
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
<script type="text/javascript">
    
    
    $(document).ready(function() {
        $('.datepicker').datepicker({
                autoclose: true,
                format: "yyyy-mm-dd",
                todayHighlight: true,
                orientation: "top auto",
                todayBtn: true 
                });
        tableProyectos = $('#tablaProyectos').DataTable({ 

       // Load data for the table's content from an Ajax source
       "ajax": {
            "retrieve": true,
            "processing": false, //Feature control the processing indicator.
            "serverSide": true,
            "searching":false,
            "method": "POST",
            "url": "<?php echo base_url('index.php/proyecto/ajax_listarProyectos'); ?>",

        },
        //Set column definition initialisation properties.
        "columns": [
            {"data":"Nombre"},
            {"data":"Finicio"},
            {"data":"Ffin"},
            {"data":"Rol"},
            {"data":"Estado"},
            {"data":"Accion"}
        ]
       });
    });
    function reloadTablaProyectos(){
        tableProyectos.ajax.reload(); 
    }
    function ver_proyecto(id){
    
        $('#formProyecto')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo base_url('index.php/proyecto/ajax_ver/')?>"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {

                $('[name="nombre"]').val(data.NOMBREPROYECTO);

                $('[name="fi"]').datepicker('update',data.FECHAINICIO);
                $('[name="ff"]').val(data.FECHAFIN);
                $('[name="descripcion"]').val(data.DESCRIPCIONPROYECTO);
                $('[name="estado"]').val(data.ESTADOPROYECTO);
                document.getElementById('nombreProVer').readOnly=true;
                document.getElementById('fechaInicioPV').readOnly=true;
                document.getElementById('fechaFinPV').readOnly=true;
                document.getElementById('descripcionPV').readOnly=true;
                document.getElementById('estadoPV').readOnly=true;
                $('#verProyecto').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Asi esta  tu proyecto'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
                
            }
        });
    }
    function gestionar_roles($idProyecto){
        $('#vNuevoProyectop2').modal('show');
        $('.modal-title').text('Gestion de roles');
        document.getElementById("1").value=$idProyecto;
        document.getElementById("btnAtrasPro").style.visibility = "hidden";
       // apenas cargue hay q cargar la tabla
       
        
    }
    function limpiar()
    {
        $('#tablaEquipo').innerHTML="";
            //table.clear();
            $('#vNuevoProyectop2').modal('hide');
        
        
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
    
    function agregarEquipo(){
                var proyecto =document.getElementById("1").value;
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
 </script>
<!---End-content---->
<?php $this->load->view('includes/footer'); ?>