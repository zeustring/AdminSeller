<!DOCTYPE html>
<html>
<head>
<meta name="mobile-web-app-capable" content="yes">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" sizes="196x196" href="{{url('imagen/favicon-master.png')}}"/>
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{url('imagen/favicon.ico')}}" sizes="16x16 32x32">

  <title>AdminSeller</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
  .Telcel{
     color: #0054ef;
    font-size: 16px;
  }
  .azteca{
    color: #3f876f;
    font-size: 16px;
  }
  .Realme{
    color: orange;
    font-size: 16px;
  }
  .Elektra{
    color: #d81b60;
    font-size: 16px;
  }
  .Administrativo{
    color: #14afc7;
    font-size: 16px;
  }
    .cu{
    margin-right: 15px;
    margin-left: 7px;
  }
  #RespuestaCliente{
    background: #f9bad1;
    font-size: 13px;
    padding: 10px;
    color:#6d0000;
    border: solid 1px black;
    border-radius: 4px;
    display: none;
  }
  .BotonModal{
    float: right;
  }
  .card-title{
    margin-top: 10px;
  }
   .boton-modal-large{
    width: 80%;
    background: #505069;
    color: #efefef;
  }
  .boton-modal-large:hover{
    text-shadow: 1px 1px 2px #3a3a4e;
    color: #1f1f31;
    border:solid 1px #1f1f31;
    box-shadow: 1px 1px 4px #1f1f31;
  }
  .nav-link img{
    width: 90px;
    margin-top: -7px;
  }
  .texto-user{
    color: #b0b2b5;
    font-size: 12px;
  }
  .texto-user label{
    margin-bottom: -10px;
    margin-left: 10px;
  }
  .imagen-usuario img{
    position: relative;
    width: 80px;
    border-radius: 6px;
    margin-top: 5px;
  }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand  navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
                <a class="nav-link" href="{{url('dashboard')}}">
                  <img src="{{url('imagen/logo-adminseller.png')}}">
                </a>
      </li>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link"
           data-toggle="modal" 
           data-target="#modal-lg"
           id="SearchCliente">
          <i class="far fa-user"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          
      
      </li>
   

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
 

    <!-- Sidebar -->
    <div class="sidebar" style="margin-top:-15px;  padding: 0;">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="height:120px; width: 100%;">
        <div class="imagen-usuario" >
          <center>
          <img src="{{ url('imagen/img-perfil/'.Auth::user()->no_empleado.'-perfil.png')}}" style="margin-top: 20px; margin-left: 10px;">
          </center>
        </div>
        <br>
        <div class="texto-user"  >
          <div style="width:120%;
                      height: 100%;
                      background: #101010bf;
                      z-index: -2;
                      margin: 0;
                      padding: 0;
                      left: -0px;
                      position: absolute;">
                        
                      </div>
           <img src="{{ url(Auth::user()->promotorMarca->img_fondo)}}" 
                 style="width: 130%;
                        position: absolute;
                        filter: blur(3px) saturate(150%);
                        z-index: -3;
                        left: -0px;
                        margin-top: 0px;">
          <label style="margin-top: 15px;">
            @if(Auth::user()->promotorMarca->id == 5)
            <b class="azteca">
            @else
          <b class="{{Auth::user()->promotorMarca->nombre}}">
            @endif
            <img src="{{ url(Auth::user()->promotorMarca->img_icono)}}" 
                 style="width: 25px;
                        margin-right: 2px;
                        margin-top: -5px;">
                 {{Auth::user()->promotorMarca->nombre}} </b>
           </label><br>
          <label style="color: white;">
                                 {{Auth::user()->sucursal->no_sucursal}}
                                 {{Auth::user()->sucursal->nombre}}
          </label><br>
          <label style="color: white;">{{Auth::user()->jerarquia->nombre}}</label><br>
          <label style="color: white;">{{Auth::user()->nombre}}</label><br>
          <label style="color: white;">{{Auth::user()->no_empleado}}</label><br>
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           </li>



           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item has-treeview">
            <a href="{{url('MisClientes')}}" class="nav-link ">
             <i class="far fa-circle nav-icon"></i>
              <p>
                Mi Lista
               
              </p>
            </a>
           </li>
              <li class="nav-item">
                <a href="{{url('Pendientes')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendientes</p>
                </a>
              </li>
             
          
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="{{url('Cartas')}}" class="nav-link ">
              <i class="nav-icon fas fa-envelope-open-text"></i>
              <p>
                Cartas
               
              </p>
            </a>
           </li>
        @if(Auth::user()->id_jerarquia >= 3)

           <li class="nav-item has-treeview">
            <a href="{{url('Membresia')}}" class="nav-link ">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Membresia
               
              </p>
            </a>
           </li>
        @endif
        @if(Auth::user()->id_jerarquia <= 2)

          <li class="nav-item has-treeview">
            <a href="{{url('Empleados')}}" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Empleados
               
              </p>
            </a>
           </li>
          
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Membresias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Membresias Activas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Membresias Inactivas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendiente de Autorización</p>
                </a>
              </li>
          
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('PromotorMarca')}}" class="nav-link ">
              <i class="nav-icon fas fa-project-diagram"></i>
              <p>
                Promotor Marca
              </p>
            </a>
           </li>
           <li class="nav-item has-treeview">
            <a href="{{url('Sucursales')}}" class="nav-link ">
              <i class="nav-icon fas fa-store-alt"></i>
              <p>
                Sucursales
               
              </p>
            </a>
           </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Entidades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{url('Entidades/Colonias')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Colonias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('Entidades/Ciudades')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ciudades</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('Entidades/Estados')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estados</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item has-treeview">
            <a href="{{url('Configuraciones')}}" class="nav-link ">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Configuraciones
               
              </p>
            </a>
           </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  <?php $membresia =  \App\Membresia::where('id_empleado','=',Auth::user()->id)->first(); ?>
@if($membresia->empleado->jerarquia->id > 2)
    @if($membresia->id_estatus == 2) 
         <div class="card-header" style="background: #3b285f; color: #EEE;">
               <center>
                Tu <b>Membresia</b> se encuentra actualmente <br>
                   <b class="text-warning"> 😭💔 {{$membresia->estatus->nombre}} 💔😭 </b><br><br>
                   <a href="{{url('Membresia/FormasPago')}}" class="btn btn-warning btn-xs">
                   💵 Pagar Membresia 💵</a>
                </center>
              </div> 
         @endif
@endif
      @yield('contend')
    </section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 2.1
    </div>
    <strong>Copyright &copy; 2021 AdminSeller </strong> powered by zeustring
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<div class="modal fade show" id="modal-lg"  aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" id="RespuestaModal">
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>

<script type="text/javascript">
              $(document).ready(function(){

                
                 $("#SearchCliente").click(function(){
                            $("#RespuestaModal").css('display','none');
                            var urls       =  "<?php echo url('Formularios/SearchCliente')  ?>";

                             $.ajax({
                                      type: "GET",
                                      url: urls,
                                      dataType: "html",
                                      
                                      error: function(){
                                            alert("error petición actualize o cantacte al programador");
                                      },
                                      success: function(data){
                                        $("#RespuestaModal").css('display','block');
                                       $("#RespuestaModal").html(data);
                                }
                          });
                  });
               });

    
</script>
<!-- jQuery -->
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('dist/js/demo.js')}}"></script>
<script src="{{url('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
</body>
</html>
