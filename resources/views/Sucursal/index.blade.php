@extends('layouts.app-menu')
@section('contend')
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de Sucursales</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
         
         	
             
              
             	<div id="example1_filter card-body table-responsive p-0" >
               
             		<button class="btn btn-success" 
                        data-toggle="modal" 
                        data-target="#modal-lg"
                        id="SucursalRegistro"> 
                        <i class="fas fa-store-alt"></i>
                        Nuevo
                </button>
             
                <label >
                 <input type="search" class="form-control" placeholder="" aria-controls="Buscar Tienda">
             		</label>
              
             	</div>
             
         
         <div class="row">
         	<div class="col-sm-12 card-body table-responsive p-0">
         		<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info" style="min-width:750px;">
                  <thead>
                  <tr role="row">
                  	<th >
                  	 #
                  	</th>
                  	<th >
                  	 Nombre
                  	</th>
                  	<th >
                  	 Dirección
                  	</th>
                  	<th >
                  	 Ciudad
                  	</th>
                  	<th >
                  	 Opiones
                  	</th>
                  </thead>
                  <tbody>

                 @foreach($sucursales as $row) 
                  <tr role="row" class="odd">
                    
                    <td>{{$row->no_sucursal}}</td>
                    <td>{{$row->nombre}}</td>
                    <td>{{$row->calle .' #'. $row->no_exterior}}</td>
                    <td>{{$row->id_ciudad}}</td>
                    <td>
                      <button class="btn btn-success btn-xs">Editar</button>
                      <button class="btn btn-info btn-xs">Empleados</button>
                      <button class="btn bg-purple btn-xs">Clientes</button>
                        
                  @endforeach   
                    </td>
                  </tr>
                </tbody>
                  
                </table>
              </div></div>
              </div>
              
              <!-- /.card-body -->
  </div>

<div class="modal fade show" id="modal-lg"  aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" id="RespuestaModal">
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>      
<script type="text/javascript">
              $(document).ready(function(){

                
                 $("#SucursalRegistro").click(function(){
                            
                            var urls       =  "<?php echo url('Formularios/SucursalRegistro')  ?>";
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
               });
</script>
@endsection
 