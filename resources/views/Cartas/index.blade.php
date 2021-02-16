@extends('layouts.app-menu')
@section('contend')

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Mis Cartas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
         
          
          
             
         
         <div class="row">
          <div class="col-sm-12 card-body table-responsive p-0">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info" style="max-width:1150px; min-width: 1150px; font-size: 14px;">
                  <thead>
                  <tr role="row">
                    <th width="10%">
                     <button class="btn bg-purple btn-xs">
                       Generar <i class="fa fa-save"></i>
                     </button>
                    </th>
                    <th width="15%">
                     CU
                    </th>
                    <th width="20%">
                     Nombre
                    </th>
                    <th width="35%">
                     Dirección
                    </th>
                    <th width="5%">
                      <center>
                     Monto
                     </center>
                    </th>
                    <th width="10%">
                      <center>
                     Carta
                     </center>
                    </th>
                    <th width="5%" >
                     <center>Opiones</center>
                    </th>
                  </thead>
                  <tbody>

                 @foreach($cartas as $row) 
                  <tr role="row" class="odd" >
                    <td>
                      <center>
                        <input type="checkbox" name="pint" >
                      </center>
                    </td>
                    <td>{{$row->cu1}}-{{$row->cu2}}-{{$row->cu3}}-{{$row->cu4}}</td>
                    <td>{{$row->nombre}} {{$row->apellido_pa}} {{$row->apellido_ma}}</td>
                    <td>  {{$row->calle}} 
                         #{{$row->no_ext}}
                          {{$row->no_int}}.
                          Col. {{$row->colonia}}
                          
                    </td>
                    <td>
                      <center>
                        ${{$row->monto}}
                      </center> 
                    </td>
                    <td>
                      <center>
                        Elektra
                      </center> 
                    </td>
                    <td>
                      <center>
                      <button class="btn btn-success btn-xs EditarCarta"
                              
                              data-toggle="modal" 
                              data-target="#modal-lg"
                              id="{{$row->id}}">
                        <i class="fa fa-edit"></i>
                      </button>
                      <button class="btn btn-danger btn-xs" >
                        <i class="fa fa-trash"></i>
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


                  $(".EditarCarta").click(function(){
                            var id         =  $(this).attr('id');
                            var urls       =  "<?php echo url('Formularios/EditarCarta')  ?>";
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


</script>
@endsection
 