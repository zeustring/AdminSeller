<div class="modal-header bg-warning">
              <h4 class="modal-title"> <i class="fa fa-envelope-open-text"></i> Pendientes </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<style type="text/css">
  .labels label{
    color: #1f2d3d;
    margin-bottom: -20px;
    position: relative;
    font-size: 15px;
  }
  .datos{
    font-size: 13px;
    color: #03e5fb;
  }
</style>
  <form method="post" action="{{url('Pendientes/Registro')}}">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body labels" style="background: #947106; color: #fff">
              
                <div class="form-group">
                  <center>
                    <b style="font-size: 20px;">
                      Cliente Unico <br>{{$cliente->cu1}}-{{$cliente->cu2}}-{{$cliente->cu3}}-{{$cliente->cu4}}</b>
                  </center> 
                </div>
                
                 
              <input type="hidden" name="IdCliente" value="{{$cliente->id}}">
              <div class="form-group">
                    <label >Nombre : </label><br>
                    {{$cliente->nombre}} {{$cliente->apellido_pa}} {{$cliente->apellido_ma}}
              </div>
              <div class="form-group">
                    <label >Domicilio : </label><br>
                    <label class="text-info datos">
                            Calle/Numero :
                    </label> {{$cliente->calle}} 
                            #{{$cliente->no_ext}}
                               @if($cliente->no_int != "")
                                  Int {{$cliente->no_int}}
                               @endif <br>
                    <label class="text-info datos">
                            Colonia :
                    </label>
                            {{$cliente->colonia->nombre}} <br>
                    <label class="text-info datos">
                            Ciudad :
                    </label>
                            {{$cliente->ciudad->nombre}} <br>
                    

              </div>
             <div class="form-group">
                <label>Telefono : </label><br>
                <input type="num" name="Tel" id="Tel" class="form-control col-8" value="{{$cliente->tel}}" autocomplete="off" inputmode="numeric">
              </div>
              <div class="form-group">
                <label>E-mail : </label><br>
                <input type="text" name="Email" class="form-control col-8"  value="{{$cliente->email}}" autocomplete="off">
              </div>
              
              <label>Fecha de Pendiente : </label>
              <div class="form-group row">
                <br>
                 <div class="col-8" >
                   <input type="date" name="FechaPendiente" class="form-control" id="InputFecha">
                     
                 </div>
                 <div>
                     <button class="btn btn-danger"
                             type="button"
                             id="SinFecha"
                             style="display:block">
                           <i class="fas fa-stopwatch"></i>
                            Sin Fecha
                     </button>
                     <button class="btn btn-success"
                             type="button"
                             id="ConFecha"
                             style="display:none">
                           <i class="fas fa-stopwatch"></i>
                            Con Fecha
                     </button>
                 </div>
              </div>
              <div class="form-group">
                <label>Tipo de Pendiente : </label><br>
                <select class="form-control" name="IdTipoPendiente">
                   <option value="0">------</option>
                @foreach($TipoPendiente as $row)
                   <option value="{{$row->id}}">{{$row->nombre}}</option>

                @endforeach
                  
                </select>
              </div>
              <div class="form-group">
                <label>Comentarios : </label><br>
                <textarea class="form-control" autocomplete="off" name="Comentarios"></textarea>
              </div>
              <center>
              <button class="btn boton-modal-large"
                      type="submit"
                      style="background:#503c00;">
                      <i class="fa fa-save"></i>
                      Guardar Pendiente
              </button>
              </center>

            </div>
 </div>
 </form>
<script type="text/javascript">
   $(document).ready(function(){
    $('#Tel').on('input', function () { 
                   this.value = this.value.replace(/[^0-9]/g,'');
        });
    $('#SinFecha').click(function(){
        $('#InputFecha').val('');
        $('#InputFecha').prop('disabled', true);
        $('#InputFecha').css({'background':'#4c3a04', 'color':'#947106'});
        $('#SinFecha').css('display','none');
        $('#ConFecha').css('display','block');
    });
    $('#ConFecha').click(function(){
        $('#InputFecha').val('');
        $('#InputFecha').prop('disabled', false);
        $('#InputFecha').css({'background':'#fff', 'color':'#666'});
        $('#ConFecha').css('display','none');
        $('#SinFecha').css('display','block');
        
    });
   });
</script>    