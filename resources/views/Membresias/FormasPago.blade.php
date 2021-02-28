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
   box-shadow: 1px 1px 4px #3e3e3e;
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
 .forma-pago li:active{
  box-shadow: 2px 2px 6px black;
 }
</style>
 <div class="card">

              <div class="card-header">
                <h3 class="card-title">Pago de Membresia</h3>
               
              </div>

              
                
                <div class="forma-pago ">
                  <ul>
                    <a href="#"
                       data-toggle="modal" 
                       data-target="#modal-lg"

                      >
                    <li id="PagoAzteca"> 
                      Deposito <i class="fas fa-qrcode"></i><br>
                      Banco Azteca <br>
                      <label>(Sin Comisión Extra)</label> 
                      <img src="{{url('imagen/banco-azteca.png')}}" class="azteca">
                    </li>
                    </a>


                  </ul>
                </div>
          
           
              
              <!-- /.card-body -->
  </div>
     
<script type="text/javascript">
              $(document).ready(function(){

                  $("#PagoAzteca").click(function(){
                            var urls       =  "<?php echo url('Formularios/PagoAzteca')  ?>";
                            $("#RespuestaModal").css('display','none');
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
      

@endsection