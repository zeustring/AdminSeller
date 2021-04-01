<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-user"></i> Actualizar E-mail </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
  <form method="post" action="{{url('Configuraciones/CambioEmail')}}">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              
              <div class="form-group">
                    <label >E-mail Anterior:</label>
                    <input type="email" class="form-control" id="Email" placeholder="E-mail" name="Email" autocomplete="off" value="{{Auth::user()->email}}" disabled="">
              </div>
              <div class="form-group">
                    <label >E-mail Nuevo: </label>
                    <input type="email" class="form-control" id="Email" placeholder="E-mail" name="Email" autocomplete="off">
              </div>
              

               <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                          <i class="fas fa-save"></i> 
                          Actualizar Email
                 </button>
                </center>

            </div>
 </div>
 </form>