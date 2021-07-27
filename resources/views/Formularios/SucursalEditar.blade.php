<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-store-alt"></i> Editar Sucursal </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
  <form method="post" action="{{url('Sucursales/Editar')}}">
  {{ csrf_field() }}  
  <input type="hidden" name="IdSucursal" value="{{$sucursal->id}}">        
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              <div class="form-group">
                    <label >No Sucursal</label>
                    <input type="num" class="form-control" id="NoSucursal" placeholder="No Sucursal"  name="NoSucursal" autocomplete="off" value="{{$sucursal->no_sucursal}}">
              </div>
              <div class="form-group">
                    <label >Nombre de Sucursal</label>
                    <input type="text" class="form-control" id="NombreSucursal" placeholder="Nombre de Sucursal" name="NombreSucursal" autocomplete="off" value="{{$sucursal->nombre}}">
              </div>
              <div class="form-group">
                    <label >Calle</label>
                    <input type="text" class="form-control" id="Calle" placeholder="Calle" name="Calle" autocomplete="off" value="{{$sucursal->calle}}">
              </div>
              <div class="form-group">
                    <label >Numero Exterior</label>
                    <input type="num" class="form-control" id="Numero" placeholder="Numero Externo" name="NoExterior" value="{{$sucursal->no_exterior}}">
              </div>
              <div class="form-group">
                    <label >Referencias</label>
                    <input type="text" class="form-control" id="Referencias" placeholder="Referencias" name="Referencias" autocomplete="off" value="{{$sucursal->referencias}}">
              </div>
              <div class="form-group" id="SelectEstado">
                    <label >Estado</label>
                    <select name="IdEstado" class="form-control " id="IdEstado">
                    	<option value="{{$sucursal->id_estado}}">{{$sucursal->estado->nombre}}</option>
                    	@foreach($estados as $row)
                      @if($row->id == $sucursal->id_estado)
                      @else
                    	    <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endif
                    	@endforeach

                    </select>
              </div>
              <div class="form-group" id="SelectEstado">
                    <label >Ciudad</label>
                    <select name="IdCiudad" class="form-control " id="IdCiudad">
                      <option value="{{$sucursal->id_ciudad}}">{{$sucursal->ciudad->nombre}}</option>
                      @foreach($ciudades as $row)
                      @if($row->id == $sucursal->id_ciudad)
                      @else
                          <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endif
                      @endforeach

                    </select>
              </div>
              <div class="form-group" id="SelectEstado">
                    <label >Colonias</label>
                    <select name="IdColonia" class="form-control " id="Colonia">
                     <option value="{{$sucursal->id_colonia}}">{{$sucursal->colonia->nombre}}</option>
                      @foreach($colonias as $row)
                      @if($row->id == $sucursal->id_colonia)
                      @else
                          <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endif
                      @endforeach

                    </select>
              </div>

                <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                          <i class="fas fa-save"></i> 
                          Editar Sucursal
                 </button>
                </center>


            </div>
 </div>
 </form>