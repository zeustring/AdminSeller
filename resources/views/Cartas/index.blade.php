@extends('layouts.app-menu')
@section('contend')

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Mis Cartas</h3>
                @if($membresia->id_estatus == 2)
                 <button class="btn btn-success BotonModal disabled"> 
                        <i class="fas fa-list"></i>
                        Reporte
                </button>
                @else
                  <button class="btn btn-success BotonModal" 
                        data-toggle="modal" 
                        data-target="#modal-lg"
                        id="ReporteCartas"> 
                        <i class="fas fa-list"></i>
                        Reporte
                </button>
                @endif

              </div>
              <!-- /.card-header -->
              <div class="card-body">
         
      <style type="text/css">

</style>
         
         <div class="row">
          <div class="col-sm-12 card-body table-responsive p-0">
            <form id="cartas" action="{{url('Cartas/GenerarCartas')}}" method="post">
              {{ csrf_field() }} 
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info" style="max-width:1150px; min-width: 1200px; font-size: 14px;">
                  <thead>
                  <tr role="row">
                    <th width="10%">
                     @if($membresia->id_estatus == 2)
                     <button class="btn bg-purple btn-xs GenerarCartas disabled" type="button">
                       Generar <i class="fa fa-save"></i>
                     </button>
                     @else
                     <button class="btn bg-purple btn-xs GenerarCartas" type="submit">
                       Generar <i class="fa fa-save"></i>
                     </button>

                     @endif
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
                    <th width="15%">
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
                        @if($membresia->id_estatus == 2)
                        <input type="checkbox"  name="carta[]" class="form-control" style="width: 20px; margin-top: -10px; " disabled>
                        @else
                        <input type="checkbox" value="{{$row->id}}" name="carta[]" class="form-control" style="width: 20px; margin-top: -10px; ">
                        @endif
                      </center>
                    </td>
                    <td>{{$row->cliente->cu1}}-
                        {{$row->cliente->cu2}}-
                        {{$row->cliente->cu3}}-
                        {{$row->cliente->cu4}}</td>
                    <td>{{$row->cliente->nombre}} 
                        {{$row->cliente->apellido_pa}} 
                        {{$row->cliente->apellido_ma}}</td>
                    <td>{{$row->cliente->calle}} 
                        #{{$row->cliente->no_ext}}
                        {{$row->cliente->no_int}}.
                        Col. {{$row->cliente->colonia->nombre}}
                        {{$row->cliente->ciudad->nombre}}
                          
                    </td>
                    <td>
                      <center>
                        ${{$row->monto}}
                      </center> 
                    </td>
                    <td>
                      <center>
                        {{$row->tipoCarta->nombre}}
                      </center> 
                    </td>
                    <td>
                      <center>
                      <button class="btn btn-success btn-xs EditarCarta"
                              
                              data-toggle="modal" 
                              data-target="#modal-lg"
                              id="{{$row->id}}"
                              type="button">
                        <i class="fa fa-edit"></i>
                      </button>
                      <a  href="{{url('Cartas/Eliminar/'.$row->id)}}" class="btn btn-danger btn-xs" >
                        <i class="fa fa-trash"></i>
                      </a>
                      </center>  
                  @endforeach  
                  
                    </td>
                  </tr>
                </tbody>
                  
                </table>
                </form> 
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

                   
});


</script>
@endsection
 