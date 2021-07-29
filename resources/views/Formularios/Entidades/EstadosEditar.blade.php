<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-list"></i> Editar Estado </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<form action="{{url('Entidades/Estados/Editar')}}" method="POST">
{{csrf_field()}}         
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
  <input type="hidden" value="{{$estado->id}}" name="IdEstado">          
            <div class="modal-body">

              <div class="form-group">
                    <label >Nombre Estado</label>
                    <input type="text" class="form-control" id="Estado" placeholder="Nombre Estado" name="nombre" autocomplete="off" value="{{$estado->nombre}}">
              </div>
              <div class="form-group">    
                <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                          <i class="fas fa-save"></i> 
                          Guardar Cambios
                 </button>
                </center>
              </div>

            </div>
 </div>
 </form>