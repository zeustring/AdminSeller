@extends('layouts.app')
@section('body')

<div class="register-box">
  <div class="register-logo">
    <b>Admin</b>Seller 
  </div>


  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registro de Nuevo Usuario</p>

      <form action="{{url('empleado/create')}}" method="post">
         {{ csrf_field() }}
        <div class="input-group mb-3">
          <input type="num" class="form-control" placeholder="Numero Empleado" name="no_empleado">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nombre" name="nombre">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellido_pa">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
           <input type="text" class="form-control" placeholder="Apellido Materno" name="apellido_ma">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Repite Contraseña" name="repite_password">
          <div class="input-group-append">
            <div class="input-group-text">
          
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select name="id_canal" class="form-control">
            <option value="1">Elektra</option>
            <option value="2">Banco Azteca</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
          
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <small><br>Version Beta 1.0</small>
    </div>
    <!-- /.form-box -->

  </div><!-- /.card -->

</div>
<!-- /.register-box -->

@endsection