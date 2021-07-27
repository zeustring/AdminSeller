<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-user"></i> Registro de Empleado </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
  <form method="post" action="{{url('Empleados/Editar')}}">
  {{ csrf_field() }} 
  <input type="hidden" name="IdEmpleado" value="{{$empleado->id}}">         
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              <div class="form-group">
                    <label >No Empleado</label>
                    <input type="num" class="form-control" id="NoEmpleado" placeholder="No Empleado"  name="NoEmpleado" autocomplete="off" value="{{$empleado->no_empleado}}">
              </div>
              <div class="form-group">
                    <label >Nombre de Empleado</label>
                    <input type="text" class="form-control" id="NombreEmpleado" placeholder="Nombre de Empleado" name="NombreEmpleado" autocomplete="off" value="{{$empleado->nombre}}">
              </div>
              <div class="form-group">
                    <label >Apellido Paterno</label>
                    <input type="num" class="form-control" id="ApellidoPa" placeholder="Apellido Paterno" name="ApellidoPa" autocomplete="off" value="{{$empleado->apellido_pa}}">
              </div>
              <div class="form-group">
                    <label >Apellido Materno</label>
                    <input type="num" class="form-control" id="ApellidoMa" placeholder="Apellido Materno" name="ApellidoMa" autocomplete="off" value="{{$empleado->apellido_ma}}">
              </div>
              <div class="form-group">
                    <label >Telefono</label>
                    <input type="num" class="form-control" id="Tel" placeholder="Telefono" name="Tel" autocomplete="off" value="{{$empleado->tel}}">
              </div>
              <div class="form-group">
                    <label >E-mail</label>
                    <input type="text" class="form-control" id="Email" placeholder="correo@server.com" name="Email" autocomplete="off" value="{{$empleado->email}}">
              </div>
              <div class="form-group">
                    <label >Canal</label>
                    <select name="IdCanal" class="form-control " id="IdCanal">
                      <option value="{{$empleado->id_canal}}">{{$empleado->canal->nombre}}</option>
                      @foreach($canales as $row)
                       @if($row->id == $empleado->id_canal)
                       @else
                         <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endif
                      @endforeach

                    </select>
              </div>

              <div class="form-group">
                    <label >Sucursal</label>
                    <select name="IdSucursal" class="form-control " id="IdSucursal">
                    	<option value="{{$empleado->id_sucursal}}">
                          {{$empleado->sucursal->no_sucursal}}
                          {{$empleado->sucursal->nombre}}
                      </option>
                    	@foreach($sucursales as $row)
                      @if($row->id == $empleado->id_sucursal)
                      @else
                    	   <option value="{{$row->id}}">{{$row->no_sucursal}} {{$row->nombre}}</option>
                      @endif
                    	@endforeach

                    </select>
              </div>
              <div class="form-group">
                    <label >Marca Promotor</label>
                    <select name="IdPromotorMarca" class="form-control " id="IdPromotorMarca">
                      <option value="{{$empleado->id_promotor_marca}}">
                          {{$empleado->promotorMarca->nombre}}
                      </option>
                      @foreach($promotorMarca as $row)
                       @if($row->id == $empleado->id_promotor_marca)
                       @else
                         <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endif
                      @endforeach

                    </select>
              </div>
              <div class="form-group">
                    <label >Jerarquia</label>
                    <select name="IdJerarquia" class="form-control " id="IdJerarquia">
                     <option value="{{$empleado->id_jerarquia}}">{{$empleado->jerarquia->nombre}}</option>
                      @foreach($jerarquias as $row)
                      @if($row->id == $empleado->id_jerarquia)
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
                          Editar Empleado
                 </button>
                </center>

            </div>
 </div>
 </form>