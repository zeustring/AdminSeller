<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-store-alt"></i> Registro de Sucursal </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
  <form method="post" action="{{url('Sucursales/Registro')}}">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              <div class="form-group">
                    <label >No Sucursal</label>
                    <input type="num" class="form-control" id="NoSucursal" placeholder="No Sucursal"  name="NoSucursal">
              </div>
              <div class="form-group">
                    <label >Nombre de Sucursal</label>
                    <input type="text" class="form-control" id="NombreSucursal" placeholder="Nombre de Sucursal" name="NombreSucursal">
              </div>
              <div class="form-group">
                    <label >Calle</label>
                    <input type="text" class="form-control" id="Calle" placeholder="Calle" name="Calle">
              </div>
              <div class="form-group">
                    <label >Numero Exterior</label>
                    <input type="num" class="form-control" id="Numero" placeholder="Numero Externo" name="NoExterior">
              </div>
              <div class="form-group">
                    <label >Referencias</label>
                    <input type="text" class="form-control" id="Referencias" placeholder="Referencias" name="Referencias">
              </div>
              <div class="form-group" id="SelectEstado">
                    <label >Estado</label>
                    <select name="IdEstado" class="form-control " id="IdEstado">
                    	<option value="0">------</option>
                    	@foreach($estados as $row)
                    	<option value="{{$row->id}}">{{$row->nombre}}</option>
                    	@endforeach

                    </select>
              </div>
              <div class="form-group" id="SelectEstado">
                    <label >Ciudad</label>
                    <select name="IdCiudad" class="form-control " id="IdCiudad">
                      <option value="0">------</option>
                      @foreach($ciudades as $row)
                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endforeach

                    </select>
              </div>
              <div class="form-group" id="SelectEstado">
                    <label >Colonias</label>
                    <select name="IdColonia" class="form-control " id="Colonia">
                      <option value="0">------</option>
                      @foreach($colonias as $row)
                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endforeach

                    </select>
              </div>

              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Registrar</button>


            </div>
 </div>
 </form>