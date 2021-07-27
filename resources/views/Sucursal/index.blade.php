@extends('layouts.app-menu')
@section('contend')
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de Sucursales</h3>
                  <button class="btn btn-success BotonModal" 
                        data-toggle="modal" 
                        data-target="#modal-lg"
                        id="SucursalRegistro"> 
                        <i class="fas fa-store-alt"></i>
                        Nuevo
                </button>
              </div>
              
              <div class="card-body">
         
             
         
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
                  	 Opiones
                  	</th>
                  </thead>
                  <tbody>

                 @foreach($sucursales as $row) 
                  <tr role="row" class="odd">
                    
                    <td>{{$row->no_sucursal}}</td>
                    <td>{{$row->nombre}}</td>
                    <td>
                        {{$row->calle .' #'. $row->no_exterior}}
                        Col. {{$row->colonia->nombre}}
                        {{$row->ciudad->nombre}}
                    </td>
                    <td>
                      <button class="btn btn-success btn-xs SucursalEditar"
                               data-toggle="modal" 
                               data-target="#modal-lg"
                               id="{{$row->id}}">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button class="btn btn-info btn-xs">
                        <i class="fas fa-users"></i>
                      </button>
                        
                  @endforeach   
                    </td>
                  </tr>
                </tbody>
                  
                </table>
              </div></div>
              </div>
              
              <!-- /.card-body -->
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
                  $(".SucursalEditar").click(function(){
                             var id         =  $(this).attr('id');
                            var urls       =  "<?php echo url('Formularios/SucursalEditar')  ?>";
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
 