<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-user"></i> Registro de Empleado </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
  <form method="post" action="{{url('Empleados/Registro')}}">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              <div class="form-group">
                    <label >No Empleado</label>
                    <input type="num" class="form-control" id="NoEmpleado" placeholder="No Empleado"  name="NoEmpleado" autocomplete="off">
              </div>
              <div class="form-group">
                    <label >Nombre de Empleado</label>
                    <input type="text" class="form-control" id="NombreEmpleado" placeholder="Nombre de Empleado" name="NombreEmpleado" autocomplete="off">
              </div>
              <div class="form-group">
                    <label >Apellido Paterno</label>
                    <input type="num" class="form-control" id="ApellidoPa" placeholder="Apellido Paterno" name="ApellidoPa" autocomplete="off">
              </div>
              <div class="form-group">
                    <label >Apellido Materno</label>
                    <input type="num" class="form-control" id="ApellidoMa" placeholder="Apellido Materno" name="ApellidoMa" autocomplete="off">
              </div>
              <div class="form-group">
                    <label >Telefono</label>
                    <input type="num" class="form-control" id="Tel" placeholder="Telefono" name="Tel" autocomplete="off">
              </div>
              <div class="form-group">
                    <label >E-mail</label>
                    <input type="text" class="form-control" id="Email" placeholder="correo@server.com" name="Email" autocomplete="off">
              </div>
              <div class="form-group">
                    <label >Canal</label>
                    <select name="IdCanal" class="form-control " id="IdCanal">
                      <option value="0">------</option>
                      @foreach($canales as $row)
                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endforeach

                    </select>
              </div>
               <div class="form-group">
                    <label >Promotor Marca</label>
                    <select name="IdPromotorMarca" class="form-control " id="IdPromotorMarca">
                      <option value="0">------</option>
                      @foreach($promotorMarca as $row)
                         @if($row->id == 1)
                           <option value="{{$row->id}}">Elektra</option>
                         @else
                         <option value="{{$row->id}}">{{$row->nombre}}</option>
                         @endif
                      @endforeach

                    </select>
              </div>
              <div class="form-group">
                    <label >Sucursal</label>
                    <select name="IdSucursal" class="form-control " id="IdSucursal">
                    	<option value="0">------</option>
                    	@foreach($sucursales as $row)
                    	<option value="{{$row->id}}">{{$row->no_sucursal}} {{$row->nombre}}</option>
                    	@endforeach

                    </select>
              </div>
              <div class="form-group">
                    <label >Jerarquia</label>
                    <select name="IdJerarquia" class="form-control " id="IdJerarquia">
                      <option value="0">------</option>
                      @foreach($jerarquias as $row)
                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endforeach

                    </select>
              </div>
              

               <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                          <i class="fas fa-save"></i> 
                          Registrar Empleado
                 </button>
                </center>

            </div>
 </div>
 </form>