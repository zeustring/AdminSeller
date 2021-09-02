@extends('layouts.app-menu')
@section('contend')

    <div class="card">

              <div class="card-header">
                <h3 class="card-title">Mis Pendientes</h3>
               
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
                    <th width="10%">
                      <center>
                    Pendiente
                     </center>
                    </th>
                    <th width="37%">
                       <center>
                    Comentarios
                     </center>
                    </th>
                    <th width="16%" >
                     <center>Opiones</center>
                    </th>
                  </thead>
                  <tbody>

                 @foreach($pendientes as $row) 
                  <tr role="row" class="odd" >
                    <td>{{$row->cliente->cu1}}-
                        {{$row->cliente->cu2}}-
                        {{$row->cliente->cu3}}-
                        {{$row->cliente->cu4}}
                    </td>
                    <td>{{$row->cliente->nombre}} 
                        {{$row->cliente->apellido_pa}}
                        {{$row->cliente->apellido_ma}}
                    </td>
                    
                    <td>
                      <center>
                        {{$row->tipo_pendiente->nombre}}
                      </center> 
                    </td>
                    <td>
                      {{$row->comentarios}}
                    </td>
                    <td>
                    <center>
                     
                      <!---
                      <button class="btn btn-warning btn-xs PendienteCliente"
                              style="font-size: 15px;"
                              data-toggle="modal" 
                              data-target="#modal-lg"
                              id="{{$row->id}}">
                         <i class="fas fa-edit"></i>
                      </button>

                      <button class="btn btn-info btn-xs PendienteCliente"
                              style="font-size: 15px;"
                              data-toggle="modal" 
                              data-target="#modal-lg"
                              id="{{$row->id}}">
                         <i class="fas fa-mail-bulk"></i>
                      </button>
                       -->
                      
                    
                      <a href="whatsapp://send?text=Hola Buen día    *{{$row->cliente->nombre}}*!%0ASoy *{{Auth::user()->nombre}} {{Auth::user()->apellido_pa}}* tu Asesor dedicado de 💥Elektra.%0ALe escribo por el motivo que tenemos promociones esclusibas para usted en Este *BUEN FIN* 👏🎉👏🎉👏%0ATenemos ofertas en Telefonía 📱, Electrónica 📺, Motos Italika 🏍️🛵 y muchas cosas más.%0ASi tienes dudas comunicate conmigo por:%0Allamada☎️%0AWhatsapp🟢%0AA este mismo número%0Asaludos !%0A%0A🏪Sucursal%0A*{{Auth::user()->sucursal->nombre}}*%0ACU:*{{$row->cliente->cu1}}-{{$row->cliente->cu2}}-{{$row->cliente->cu3}}-{{$row->cliente->cu4}}*%0AFolio:*{{Auth::user()->no_empleado}}*&phone=+52{{$row->cliente->tel}}"
                         class="btn btn-success btn-xs"
                              style="font-size: 15px;"
                            
                          >
                        <i class="fab fa-whatsapp"></i>
                      </a>
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
                   $(".PendienteCliente").click(function(){
                            var id         =  $(this).attr('id');
                            var urls       =  "<?php echo url('Formularios/PendienteCliente')  ?>";
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
 