<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-list"></i> Editar Colonias </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<form action="{{url('Entidades/Colonias/Editar')}}" method="POST">
{{csrf_field()}}     
<input type="hidden" name="IdColonia" value="{{$colonia->id}}">    
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              <div class="form-group">
                    <label >Nombre Colonia</label>
                    <input type="text" class="form-control" id="Colonia" placeholder="Nombre Colonia" name="Nombre" autocomplete="off" value="{{$colonia->nombre}}">
              </div>
              <div class="form-group">
                    <label >Ciudad</label>
                    <select name="IdCiudad" class="form-control">
                      <option value="{{$colonia->id_ciudad}}">{{$colonia->ciudad->nombre}}</option>
                    @foreach($ciudades as $row)
                      @if($colonia->id_ciudad == $row->id)
                      @else
                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endif
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                    <label >Estado</label>
                    <select name="IdEstado" class="form-control">
                      <option value="{{$colonia->id_estado}}">{{$colonia->estado->nombre}}</option>
                    @foreach($estados as $row)
                      @if($colonia->id_estado == $row->id)
                      @else
                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endif
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                          <i class="fas fa-save"></i> 
                          Editar Colonia
                 </button>
                </center>
              </div>

            </div>
 </div>
 </form>