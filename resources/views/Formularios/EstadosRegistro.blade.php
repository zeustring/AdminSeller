<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-list"></i> Registro de Estado </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<form action="{{url('Entidades/Estados/Registro')}}" method="POST">
{{csrf_field()}}         
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              <div class="form-group">
                    <label >Nombre Estado</label>
                    <input type="text" class="form-control" id="Estado" placeholder="Nombre Estado" name="nombre">
              </div>
              <div class="form-group">
                    <button class="btn btn-success aling-right">
                     <i class="fa fa-save"></i>
                     Registrar
                    </button>
              </div>

            </div>
 </div>
 </form>