@extends('layouts.app-menu')
@section('contend')
<style type="text/css">

</style>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de mis Pagos</h3>

              </div>
    <div class="card-body">
         

         
         <div class="row">
          <div class="col-sm-12 card-body table-responsive p-0">
           
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info"  style=" min-width: 850px; font-size: 14px;">
                  <thead>
                  <tr role="row">
                    
                    <th width="15%">
                     Folio
                    </th>
                    <th width="20%">
                     F. de Pago
                    </th>
                    <th width="20%">
                     F. Pago Aprobado
                    </th>
                    <th width="20%">
                     Tipo de Pago
                    </th>
                    
                    <th width="20%" >
                     <center>Opiones</center>
                    </th>
                  </thead>
                  <tbody>
                 
                @foreach($pagoMembresia as $row)
                  <tr role="row" class="odd" >
                    <td>
                     F {{$row->id}}
                    </td>
                    <td>
                      {{$row->created_at}} 🟢
                    </td>
                    <td>
                      {{  $row->confirmed_at 
                        ? $row->confirmed_at." 🟢"
                        : "Sin Confirmar 🟡"
                      }}
                    </td>
                    <td>
                      {{$row->forma_pago}}
                    </td>
                    <td>
                      <center>
                      <button class="btn btn-success btn-xs VerComproPago"
                              
                              data-toggle="modal" 
                              data-target="#modal-lg"
                              id="{{$row->id}}"
                              type="button">
                        <i class="fa fa-image"></i>
                      </button>
                     
                      </center>  
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
 
              </div>
            </div>
      </div>
              
              <!-- /.card-body -->
</div>
<script type="text/javascript">
              $(document).ready(function(){

                
                 $(".VerComproPago").click(function(){
                            
                            var urls       =  "<?php echo url('Formularios/ImgPago')  ?>";
                            var id         =  $(this).attr('id');
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
 