@extends('layouts.app-menu')
@section('contend')
    <div class="card">
             <div class="card-header">
                <h3 class="card-title">Listado de Estados</h3>
                <button class="btn btn-success BotonModal" 
                        data-toggle="modal" 
                        data-target="#modal-lg"
                        id="EstadoRegistro"> 
                        <i class="fas fa-list"></i>
                       Nuevo Estado
                </button>
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
                     Opiones
                    </th>
                  </thead>
                  <tbody>

                  @foreach($estados as $row)
                  <tr role="row" class="odd">
                    
                    <td>{{$row->nombre}}</td>
                    
                    <td>
                      <button class="btn btn-success btn-xs EstadosEditar"
                                data-toggle="modal" 
                                data-target="#modal-lg"
                                id="{{$row->id}}">
                          <i class="fas fa-edit"></i>
                      </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                  
                </table>
              </div></div>
              </div>

     
<script type="text/javascript">
              $(document).ready(function(){

                
                 $("#EstadoRegistro").click(function(){
                            
                            var urls       =  "<?php echo url('Formularios/EstadosRegistro')  ?>";
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
                  $(".EstadosEditar").click(function(){
                            var id         =  $(this).attr('id');
                            var urls       =  "<?php echo url('Formularios/EstadosEditar');  ?>";
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
 