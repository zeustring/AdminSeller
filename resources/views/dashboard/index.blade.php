@extends('layouts.app-menu')
@section('contend')
  <div class="alert alert-info alert-dismissible">
                 
                  <h5><i class="icon fas fa-tachometer-alt"></i> Mi Dashboard</h5>
                 
  </div>
<div class="row">
<style type="text/css">
  @media (max-width: 650px) {
  .inner h3{
   position: relative;
   text-align: left;
   margin-left: 0px;
   margin-top: 5px;
   font-size: 25px;
  }
  .fass {
    display: block;
    color: #FFF;
    font-size: 50px;
    float: right;
    position: relative;
    margin-top: 10px;
    margin-right: 5px;
    
  }
 .inner p{
  position: absolute;
  font-size: 13px;
  text-align: left;
  margin-top: 10px;
 }
 .small-box{
  height: 100px;
 }
}
</style>

<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                 <div class="icono">
                <i class="fass fas fa-envelope"></i>
              </div>
                <h3>{{$cartasCount}}</h3>

                <p>Mis Cartas</p>
              </div>
              
              
            </div>
</div>
<div class="col-lg-3 col-6">             
           
             <div class="small-box bg-warning">
              <div class="inner">
                <div class="icono">
                <i class="fass fas fa-users"></i>
              </div>
                <h3>{{$clientesCount}}</h3>

                <p>Mis Clientes</p>
              </div>
              
             
            </div>
</div>
</div>
  <div class="alert bg-maroon alert-dismissible">
                 
                  <h5><i class="icon fas fa-tachometer-alt"></i>Dashboard de Sucursal</h5>
                 
  </div>
<div class="row">
<div class="col-lg-3 col-6">             
           
             <div class="small-box bg-navy">
              <div class="inner">
              <div class="icono">
                <i class="fass fas fa-envelope"></i>
              </div>
                <h3>{{$cartasSucursalCount}}</h3>
                <i></i>
                <p>Cartas de Sucursal</p>
              </div>

             
             
            </div>
</div>
<div class="col-lg-3 col-6">             
           
             <div class="small-box bg-orange">
              <div class="inner">
                <div class="icono">
                <i class="fass fas fa-users"></i>
              </div>
                <h3>{{$clientesSucursalCount}}</h3>

                <p>Clientes Sucursal</p>
              </div>
              
             
            </div>
</div>
</div>

      

@endsection