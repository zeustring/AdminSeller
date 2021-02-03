@extends('layouts.app-menu')
@section('contend')

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Mis Clientes</h3>
                 <button class="btn btn-success BotonModal" 
                        data-toggle="modal" 
                        data-target="#modal-lg"
                        id="MisClientesRegistro"> 
                        <i class="fas fa-users"></i>
                        Nuevo
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
         
          
          
             
         
         <div class="row">
          <div class="col-sm-12 card-body table-responsive p-0">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info" style="max-width:1100px; min-width: 1000px; font-size: 14px;">
                  <thead>
                  <tr role="row">
                    <th width="17%">
                     CU
                    </th>
                    <th width="22%">
                     Nombre
                    </th>
                    <th width="42%">
                     Dirección
                    </th>
                    <th width="5%">
                      <center>
                     Estatus
                     </center>
                    </th>
                    <th width="16%" >
                     <center>Opiones</center>
                    </th>
                  </thead>
                  <tbody>

                 @foreach($MisClientes as $row) 
                  <tr role="row" class="odd" >
                    <td>{{$row->cu1}}-{{$row->cu2}}-{{$row->cu3}}-{{$row->cu4}}</td>
                    <td>{{$row->nombre}} {{$row->apellido_pa}} {{$row->apellido_ma}}</td>
                    <td>  {{$row->calle}} 
                         #{{$row->no_ext}}
                          {{$row->no_int}}.
                          Col. {{$row->colonia}},
                          {{$row->ciudad}}
                    </td>
                    <td>
                      <center>
                        {{$row->estatus}}
                      </center> 
                    </td>

                    <td>
                      <center>
                      <button class="btn bg-purple btn-xs" style="font-size: 15px;">
                        <i class="fas fa-envelope-open-text"></i>
                      </button>
                      <button class="btn btn-success btn-xs EditarCliente"
                              style="font-size: 15px;"
                              data-toggle="modal" 
                              data-target="#modal-lg"
                              id="{{$row->id}}">
                        <i class="fa fa-edit"></i>
                      </button>
                      <button class="btn btn-info btn-xs" style="font-size: 15px;">
                        <i class="fa fa-eye"></i>
                      </button>
                      </center>  
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

                
                 $("#MisClientesRegistro").click(function(){
                            
                            var urls       =  "<?php echo url('Formularios/ClientesRegistro')  ?>";

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
                  $(".EditarCliente").click(function(){
                            var id         =  $(this).attr('id');
                            var urls       =  "<?php echo url('Formularios/EditarCliente')  ?>";

                             $.ajax({
                                      type: "GET",
                                      url: urls+'/'+id,
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
 