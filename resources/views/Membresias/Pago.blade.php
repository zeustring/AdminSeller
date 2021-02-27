@extends('layouts.app-menu')
@section('contend')
<style type="text/css">
 .forma-pago{
  
  margin: 0px;
  padding: 0px;

 } 
 .forma-pago ul{
  position: relative;
  width: 100%;
  margin: 0px;
  padding: 0px;

 }
 .forma-pago li{
  float: left;
  list-style: none;
  margin-left: 12px;
  margin-top: 20px;
  margin-bottom: 20px;
  background:#3b285f;
  width: 170px;
  height: 170px;
   text-align: center;
   box-shadow: 1px 1px 1px black;
   border-radius: 4px;
   border:solid 1px black;
   color: #FFF;

 }
 .forma-pago .azteca{
  width: 150px;
 }
 .forma-pago .codi{
  width: 100px;
  margin-top: -10px;
 }
 .forma-pago ul li label{
  color: #ffc107;
  font-size: 12px;
 }
</style>
 <div class="card">

              <div class="card-header">
                <h3 class="card-title">Pago de Membresia</h3>
               
              </div>

              
                
                <div class="forma-pago">
                  <ul>
                    <a href="">
                    <li> 
                       Codigo QR <i class="fas fa-qrcode"></i><br>
                      Banco Azteca <br>
                      <label>(Sin Comisión Extra)</label> 
                      <img src="{{url('imagen/banco-azteca.png')}}" class="azteca">
                    </li>
                    </a>
                    <a href="">
                    <li> 
                       Deposito <br> 
                      Banco Azteca <br>
                      <label>(Sin Comisión Extra)</label>  
                      <img src="{{url('imagen/banco-azteca.png')}}" class="azteca">
                    </li>
                    </a>
                    <a href="">
                    <li> 
                       Codigo QR <i class="fas fa-qrcode"></i><br>
                      Codi  <br>
                      <label>(Sin Comisión Extra)</label> 
                      <img src="{{url('imagen/codi.png')}}" class="codi">
                    </li>
                    </a>

                  </ul>
                </div>
          
           
              
              <!-- /.card-body -->
  </div>
      
      

@endsection