@extends('layouts.app-menu')
@section('contend')
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de Ciudades</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
         
          
             
              
              <div id="example1_filter card-body table-responsive p-0" >
               
                <button class="btn btn-success" 
                        data-toggle="modal" 
                        data-target="#modal-lg"
                        id="Ciudad"> 
                        <i class="fas fa-list"></i>
                      Nuevo
                </button>
                
              
                <label >
                 <input type="search" class="form-control" placeholder="Buscar" aria-controls="Buscar Tienda" style="width: 200px;">
                </label>
              
              </div>
             
         
         <div class="row">
          <div class="col-sm-12 card-body table-responsive p-0">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info" style="min-width:750px;">
                  <thead>
                  <tr role="row">
                    <th >
                     Nombre
                    </th>
                    <th >
                     Tiendas
                    </th>
                    <th >
                     Empleados
                    </th>
                    <th >
                     Opiones
                    </th>
                  </thead>
                  <tbody>

                  @foreach($ciudades as $row)
                  <tr role="row" class="odd">
                    
                    <td>{{$row->nombre}}</td>
                    <td>2</td>
                    <td>1</td>
                    <td>
                      <button class="btn btn-success btn-xs">Editar</button>
                        
                      
                    </td>
                  </tr>
                  @endforeach
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

                
                 $("#Ciudad").click(function(){
                            
                            var urls       =  "<?php echo url('Formularios/Ciudades')  ?>";

                             $.ajax({
                                      type: "GET",
                                      url: urls,
                                      dataType: "html",
                                      
                                      error: function(){
                                            alert("error petición actualize o cantacte al programador");
                                      },
                                      success: function(data){
                                       $("#RespuestaModal").html(data);
                                }
                          });
                  });
               });
</script>
@endsection
 