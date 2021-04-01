@extends('layouts.app-menu')
@section('contend')
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
  font-size: 14px;
  text-align: left;
  margin-top: 15px;
 }
 .small-box{
  height: 100px;
 }
}
</style>
  <div class="alert bg-navy alert-dismissible">
                 
                  <h5><i class="icon fas fa-tools"></i>Mis datos</h5>
                 
  </div>
<div class="row">


<div class="col-lg-2 col-4">
            
                <a class="btn btn-app bg-success"
                   data-toggle="modal" 
                   data-target="#modal-lg"
                   id="CambioTelefono">
                  <i class="fas fa-phone"></i> Telefono
                </a>
</div>
<div class="col-lg-2 col-4">  
                <a class="btn btn-app bg-info"
                   data-toggle="modal" 
                   data-target="#modal-lg"
                   id="CambioEmail">
                  <i class="fas fa-at"></i> E-mail
                </a>
</div>              

<div class="col-lg-2 col-4">  
                <a class="btn btn-app bg-danger"
                   data-toggle="modal" 
                   data-target="#modal-lg"
                   id="CambioNip">
                  <i class="fas fa-unlock-alt"></i> Nip
                </a>
</div>
           

           
           

</div>
  <div class="alert bg-navy alert-dismissible">
                 
                  <h5><i class="icon fas fa-tools"></i>Aplicación</h5>
                 
  </div>
<div class="row">


<div class="col-lg-2 col-4">
            
                <a class="btn btn-app bg-purple"
                   data-toggle="modal" 
                   data-target="#modal-lg"
                   id="CartaPredefinida">
                  <i class="fas fa-envelope-open-text"></i> Tipo Carta
                </a>
</div>

<div class="col-lg-2 col-4">
            
                <a class="btn btn-app bg-danger"
                   data-toggle="modal" 
                   data-target="#modal-lg"
                   id="CambioSucursal">
                  <i class="fas fa-store-alt"></i> Sucursal
                </a>
</div>

           

           
           

</div>

<script type="text/javascript">
              $(document).ready(function(){

                
                 $("#CambioTelefono").click(function(){
                            
                            var urls       =  "<?php echo url('Formularios/CambioTelefono')  ?>";
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
                 $("#CambioEmail").click(function(){
                            
                            var urls       =  "<?php echo url('Formularios/CambioEmail')  ?>";
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