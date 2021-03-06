@extends('layouts.app')
@section('body')
            <script type="text/javascript">
              $(document).ready(function(){
                $('#no_empleado').on('input', function () { 
                   this.value = this.value.replace(/[^0-9]/g,'');
                });
                $('#nip').on('input', function () { 
                   this.value = this.value.replace(/[^0-9]/g,'');
                });
              });
              
            </script>
    <div class="login-box">
      <center>
         <img src="{{url('imagen/logo-adminseller-login.png')}}" width="250" style="margin-top: 100px;margin-bottom: 50px;">
         </center>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Formulario de entrada</p>

          <form action="{{url('loginApp')}}" method="post">
			  
            <div class="input-group mb-3">
			          {{ csrf_field()}}
              <input type="text"
                     class="form-control"
                     placeholder="No Empleado"
                     name="no_empleado" 
                     autocomplete="off"
                     maxlength="6" 
                     id="no_empleado"
                     inputmode="numeric">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="password" 
                     class="form-control" 
                     placeholder="NIP" 
                     name="password" 
                     autocomplete="off"
                     maxlength="4"
                     id="nip"
                     inputmode="numeric">

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
    <img src="{{url('imagen/powered.png')}}" width="150" style="margin-top: 80px">
         </center>
@endsection