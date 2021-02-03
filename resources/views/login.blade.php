@extends('layouts.app')
@section('body')
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Admin</b>Seller</a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Formulario de entrada</p>

          <form action="{{url('loginApp')}}" method="post">
			  
            <div class="input-group mb-3">
			{{ csrf_field()}}
              <input type="number" class="form-control" placeholder="No Empleado" name="no_empleado" autocomplete="off">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">

              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
              </div>
              <!-- /.col -->
            </div>
          </form>


          
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
@endsection