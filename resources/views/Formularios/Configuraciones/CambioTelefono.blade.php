<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-user"></i> Actualizar Telefono </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
  <form method="post" action="{{url('Configuraciones/CambioTelefono')}}">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              
              <div class="form-group">
                    <label >Telefono Anterior:</label>
                    <input type="num" class="form-control" id="Tel" placeholder="Telefono" name="Tel" autocomplete="off" value="{{Auth::user()->tel}}" disabled="">
              </div>
              <div class="form-group">
                    <label >Telefono Nuevo: </label>
                    <input type="num" class="form-control" id="Tel" placeholder="Telefono" name="Tel" autocomplete="off">
              </div>
              

               <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                          <i class="fas fa-save"></i> 
                          Actualizar Telefono
                 </button>
                </center>

            </div>
 </div>
 </form>