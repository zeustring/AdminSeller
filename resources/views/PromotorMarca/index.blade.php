@extends('layouts.app-menu')
@section('contend')

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de Promotores Marca</h3>
                <button class="btn btn-success BotonModal" 
                        data-toggle="modal" 
                        data-target="#modal-lg"
                        id="PromotorMarcaRegistro"> 
                        <i class="fas fa-users"></i>
                        Nuevo
                </button>
              </div>

             
         
         <div class="row">
          <div class="col-sm-12 card-body table-responsive p-0">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info" >
                  <thead>
                  <tr role="row">
                    <th >
                     Nombre
                    </th>
                    <th >
                     Canal
                    </th>
                    <th >
                     Opiones
                    </th>
                  </thead>
                  <tbody>

                 @foreach($PromotorMarca as $row) 
                  <tr role="row" class="odd">
                    
                    <td>
                        <img src="{{$row->img_icono}}" 
                             style="width: 25px;
                                    margin-right: 2px;
                                    margin-top: -5px;">
                 @if($row->id == 5)
                  <b class="azteca">
                 @else
                  <b class="{{$row->nombre}}">
                 @endif
                  {{$row->nombre}}
                 </b>
                    </td>
                    <td>{{$row->canal->nombre}}</td>
                   
                    <td>
                      <center>
                        <button class="btn btn-success btn-xs PromotorMarcaEditar"
                                data-toggle="modal" 
                                data-target="#modal-lg"
                                id="{{$row->id}}">
                          <i class="fas fa-edit"></i>
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

                
                 $("#PromotorMarcaRegistro").click(function(){
                            
                            var urls       =  "<?php echo url('Formularios/PromotorMarcaRegistro');  ?>";
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
                 $(".PromotorMarcaEditar").click(function(){
                            var id         =  $(this).attr('id');
                            var urls       =  "<?php echo url('Formularios/PromotorMarcaEditar');  ?>";
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
 