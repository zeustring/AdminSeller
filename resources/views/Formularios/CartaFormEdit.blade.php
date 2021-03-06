<div class="modal-header bg-purple">
              <h4 class="modal-title"> <i class="fa fa-envelope-open-text"></i> Formulario de Carteo </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<style type="text/css">
  .labels label{
    color: #e83434;
    margin-bottom: -15px;
    position: relative;
  }
</style>
  <form method="post" action="{{url('Cartas/Editar')}}">
  {{ csrf_field() }}  
  <input type="hidden" name="IdCarta" value="{{$carta->id}}">        
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body labels" style="background: #3b285f; color: #EEE">
              
                <div class="form-group">
                  <center>
                    <b style="font-size: 20px;">
                     
                      Cliente Unico
                      
                     <br>
                     
                        {{$carta->cliente->cu1}}-
                        {{$carta->cliente->cu2}}-
                        {{$carta->cliente->cu3}}-
                        {{$carta->cliente->cu4}}
                     </b>
                  </center> 
                </div>
                
                 
              
              <div class="form-group">
                    <label >Nombre:</label><br>
                            {{$carta->cliente->nombre}} 
                            {{$carta->cliente->apellido_pa}}
                            {{$carta->cliente->apellido_ma}}
                            
                    
              </div>
              
              <div class="form-group">
                <label>Tipo de Carta:</label><br>
                   {{$carta->canal->nombre}} / {{$carta->tipoCarta->nombre}} 

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
                       id="Monto" 
                       value="{{$carta->monto}}" 
                       autocomplete="off"
                       inputmode="numeric" 
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
              <script type="text/javascript">
              $(document).ready(function(){
               
                $('#Monto').on('input', function () { 
                   this.value = this.value.replace(/[^0-9]/g,'');
                });
              });
              
            </script>

