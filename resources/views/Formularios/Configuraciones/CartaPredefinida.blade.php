<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-user"></i> Carta Predefinida </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
  <form method="post" action="{{url('Configuraciones/TipoCarta')}}">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              
              <div class="form-group">
                   <select class="form-control" name="TipoCarta">
                    

                     @foreach($TipoCartas as $row)
                     <option value="{{$row->id}}">{{$row->nombre}}</option>
                     @endforeach
                   </select> 
              </div>

              

               <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                          <i class="fas fa-save"></i> 
                          Actualizar Carta
                 </button>
                </center>

            </div>
 </div>
 </form>
            