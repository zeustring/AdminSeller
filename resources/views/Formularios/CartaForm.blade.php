<div class="modal-header bg-purple">
              <h4 class="modal-title"> <i class="fa fa-envelope-open-text"></i> Formulario de Carteo </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<style type="text/css">
  .labels label{
    color: #e83434;
    margin-bottom: -20px;
    position: relative;
    font-size: 15px;
  }
  .datos{
    font-size: 13px;
  }
</style>
  <form method="post" action="{{url('Cartas/Registro')}}">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body labels" style="background: #3b285f; color: #EEE">
              
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
              <div class="form-group datos">
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
              <div class="form-group datos">
                <label>Ultima Gestión : </label><br>
                    <label class="text-info">
                            Canal :
                    </label>
                            {{  $cliente->cartas
                              ? $cliente->cartas->empleado->canal->nombre
                              : "Sin Datos"}}<br>
                     <label class="text-info">
                            Sucursal :
                    </label>
                            {{  $cliente->cartas
                              ? $cliente->cartas->empleado->sucursal->no_sucursal." ".$cliente->cartas->empleado->sucursal->nombre
                              : "Sin Datos" }} 
                            <br>       
                    <label class="text-info">
                            Asesor :
                    </label>
                            {{   $cliente->cartas
                              ? $cliente->cartas->empleado->nombre." ".$cliente->cartas->empleado->apellido_pa
                              : "Sin Datos"}}
                            <br>
                    <label class="text-info">
                            Fecha :
                    </label>
                            {{   $cliente->cartas
                              ?  date('j/m/Y',strtotime($cliente->cartas->created_at))
                              : "Sin Datos" }}
              </div>
              <div class="form-group">
                <label>Tipo de Carta : </label><br>
                     {{$CartaPred->tipoCarta->canal->nombre}} / {{$CartaPred->tipoCarta->nombre}}

                  <button class="btn btn-warning"
                          type="button" 
                          id="OtraCiudad" 
                          style="width: 65px;
                                 padding: 3px;
                                 font-size: 13px;
                                 float: right ">
                          <i class="fa fa-list"></i> Otra
                  </button>
                
              </div>
              <div class="form-group">
                <center>
                <big><b>Capacidad Disponible</b></big>
                <br>
                <input type="text"
                       name="Monto"
                       autocomplete="off"
                       required
                       class="form-control"
                       style="width: 100px;
                              font-size: 22px;
                              text-align: center;
                              background: #505069;
                              color: #dcd9d9">
                </center>
              </div>
              <center>
              <button class="btn boton-modal-large"
                      type="submit">
                      <i class="fa fa-save"></i>
                      Guardar Carta
              </button>
              </center>

            </div>
 </div>
 </form>
