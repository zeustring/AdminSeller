@extends('layouts.app-menu')
@section('contend')
@if($membresia->id_estatus == 2)
         <div class="card-header" style="background: #3b285f; color: #EEE;">
               <center>
                Tu <b>Membresia</b> se encuentra actualmente <br>
                   <b class="text-warning"> 😭💔 {{$membresia->estatus->nombre}} 💔😭 </b><br><br>
                   <a href="" class="btn btn-warning btn-xs">
                   💵 Pagar Membresia 💵</a>
                </center>
              </div> 
@endif
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Busqueda de Clientes</h3>
                @if($membresia->id_estatus == 2)
                 <button class="btn btn-success BotonModal disabled"> 
                        <i class="fas fa-users"></i>
                        Nuevo
                </button>
                @else
                  <button class="btn btn-success BotonModal" 
                        data-toggle="modal" 
                        data-target="#modal-lg"
                        id="MisClientesRegistro"> 
                        <i class="fas fa-users"></i>
                        Nuevo
                </button>
                @endif
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

                 @foreach($SearchCliente as $row) 
                  <tr role="row" class="odd" >
                    <td>{{$row->cu1}}-{{$row->cu2}}-{{$row->cu3}}-{{$row->cu4}}</td>
                    <td>{{$row->nombre}} {{$row->apellido_pa}} {{$row->apellido_ma}}</td>
                    <td>  {{$row->calle}} 
                         #{{$row->no_ext}}
                          {{$row->no_int}}.
                          Col. {{$row->colonia->nombre}},
                          {{$row->ciudad->nombre}}
                    </td>
                    <td>
                      <center>
                        {{$row->estatus->nombre}}
                      </center> 
                    </td>

                    <td>
                      <center>
                      <button class="btn bg-purple btn-xs CartaCliente" 
                              style="font-size: 15px;"
                              data-toggle="modal" 
                              data-target="#modal-lg"
                              id="{{$row->id}}"
                              >
                        <i class="fas fa-envelope-open-text"></i>
                      </button>
                      <button class="btn btn-success btn-xs EditarCliente"
                              style="font-size: 15px;"
                              data-toggle="modal" 
                              data-target="#modal-lg"
                              id="{{$row->id}}">
                        <i class="fa fa-edit"></i>
                      </button>
                      
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

     
<script type="text/javascript">
              $(document).ready(function(){

                
                 $("#MisClientesRegistro").click(function(){
                            
                            var urls       =  "<?php echo url('Formularios/ClientesRegistro')  ?>";
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
                  $(".EditarCliente").click(function(){
                            var id         =  $(this).attr('id');
                            var urls       =  "<?php echo url('Formularios/EditarCliente')  ?>";
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
                  $(".CartaCliente").click(function(){
                            var id         =  $(this).attr('id');
                            var urls       =  "<?php echo url('Formularios/CartaCliente')  ?>";
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
 