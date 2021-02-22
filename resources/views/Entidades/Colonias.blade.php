@extends('layouts.app-menu')
@section('contend')
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de Colonias</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
         
          
             
              
              <div id="col-sm-12 card-body table-responsive p-0" >
               
                <button class="btn btn-success" 
                        data-toggle="modal" 
                        data-target="#modal-lg"
                        id="Colonia"> 
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

                  @foreach($colonias as $row)
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
     
<script type="text/javascript">
              $(document).ready(function(){

                
                 $("#Colonia").click(function(){
                            
                            var urls       =  "<?php echo url('Formularios/Colonias')  ?>";
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
 