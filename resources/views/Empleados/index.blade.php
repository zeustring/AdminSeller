@extends('layouts.app-menu')
@section('contend')

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de Empleados</h3>
                <button class="btn btn-success BotonModal" 
                        data-toggle="modal" 
                        data-target="#modal-lg"
                        id="EmpleadoRegistro"> 
                        <i class="fas fa-users"></i>
                        Nuevo
                </button>
              </div>

             
         
         <div class="row">
         	<div class="col-sm-12 card-body table-responsive p-0">
         		<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info" style="max-width:1100px; min-width: 1000px;">
                  <thead>
                  <tr role="row">
                  	<th > 
                  	 #
                  	</th>
                  	<th >
                  	 Nombre
                  	</th>
                  	<th >
                  	 Sucursal
                  	</th>
                    <th >
                     Canal
                    </th>
                  	<th >
                     Marca
                    </th>
                  	<th >
                  	 Opiones
                  	</th>
                  </thead>
                  <tbody>

                 @foreach($empleados as $row) 
                  <tr role="row" class="odd">
                    
                    <td>{{$row->no_empleado}}</td>
                    <td>{{$row->nombre}} {{$row->apellido_pa}} {{$row->apellido_ma}}</td>
                    <td>{{$row->sucursal->no_sucursal}} {{$row->sucursal->nombre}}</td>
                    <td>{{$row->canal->nombre}} </td>
                     <td>{{$row->promotorMarca->nombre}}</td>
                    <td>
                      <center>
                        <button class="btn btn-success btn-xs EditarEmpleado"
                                data-toggle="modal" 
                                data-target="#modal-lg"
                                id="{{$row->id}}">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-info btn-xs">
                          <i class="fas fa-eye"></i>
                        </button>
                        
                      </center>
                  @endforeach   
                    </td>
                  </tr>
                </tbody>
                  
                </table>
              </div>
            </div>

          
              
              <!-- /.card-body -->
  </div>

      
<script type="text/javascript">
              $(document).ready(function(){

                
                 $("#EmpleadoRegistro").click(function(){
                            
                            var urls       =  "<?php echo url('Formularios/EmpleadoRegistro');  ?>";
                              $("#RespuestaModal").css('display','none');
                             $.ajax({
                                      type: "GET",
                                      url: urls,
                                      dataType: "html",
                                      
                                      error: function(){
                                            alert("error petición actualize o cantacte al programador");
                                      },
                                      success: function(data){
                                       $("#RespuestaModal").css('display','block');
                                       $("#RespuestaModal").html(data);
                                }
                          });
                  });
                 $(".EditarEmpleado").click(function(){
                            var id         =  $(this).attr('id');
                            var urls       =  "<?php echo url('Formularios/EmpleadoEditar');  ?>";
                              $("#RespuestaModal").css('display','none');
                             $.ajax({
                                      type: "GET",
                                      url: urls+'/'+id,
                                      dataType: "html",
                                      
                                      error: function(){
                                            alert("error petición actualize o cantacte al programador");
                                      },
                                      success: function(data){
                                       $("#RespuestaModal").css('display','block');
                                       $("#RespuestaModal").html(data);
                                }
                          });
                  });
               });
</script>
@endsection
 