<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-list"></i> Registro de Colonias </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<form action="{{url('Entidades/Colonias/Registro')}}" method="POST">
{{csrf_field()}}         
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              <div class="form-group">
                    <label >Nombre Colonia</label>
                    <input type="text" class="form-control" id="Colonia" placeholder="Nombre Colonia" name="Colonia" autocomplete="off">
              </div>
              <div class="form-group">
                    <label >Ciudad</label>
                    <select name="IdCiudad" class="form-control">
                      <option value="0">----</option>
                    @foreach($ciudades as $row)

                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                    <label >Estado</label>
                    <select name="IdEstado" class="form-control">
                      <option value="0">----</option>
                    @foreach($estados as $row)

                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                          <i class="fas fa-save"></i> 
                          Registrar Colonia
                 </button>
                </center>
              </div>

            </div>
 </div>
 </form>