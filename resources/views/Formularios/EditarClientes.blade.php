<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-user"></i> Editar Cliente </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<style type="text/css">
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
</style>
  <form method="post" action="{{url('Clientes/Editar')}}">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">
              <label >Cliente Unico</label>
                <div class="row form-group">
                   
                  <div class="cu">
                    <input type="text" class="form-control validanumericos"   style="width: 65px;"  name="cu1" id="cu1" maxlength="4" onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu2.focus()" value="{{$cliente->cu1}}">
                  </div>
                  <div class="cu" >
                    <input type="text" class="form-control validanumericos"   style="width: 65px;" name="cu2" id="cu2" maxlength="4" onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu3.focus()" value="{{$cliente->cu2}}">
                  </div>
                  <div class="cu" >
                    <input type="text" class="form-control validanumericos"   style="width: 65px;" name="cu3" id="cu3" maxlength="4" onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu4.focus()" value="{{$cliente->cu3}}">
                  </div>
                  <div class="col-1" >
                    <input type="text" class="form-control validanumericos"   style="width: 70px;" name="cu4" id="cu4" maxlength="5" value="{{$cliente->cu4}}">
                  </div>
                </div>
                
                  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                  <input type="hidden" name="ID" value="{{$cliente->id}}">
              <div class="form-group">
                    <label >Nombre</label>
                    <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="Nombre" maxlength="20" value="{{$cliente->nombre}}">
              </div>
              <div class="form-group">
                    <label >Apellido Paterno</label>
                    <input type="num" class="form-control" id="ApellidoPa" placeholder="Apellido Paterno" name="ApellidoPa" maxlength="20" value="{{$cliente->apellido_pa}}">
              </div>
              <div class="form-group">
                    <label >Apellido Materno</label>
                    <input type="num" class="form-control" id="ApellidoMa" placeholder="Apellido Materno" name="ApellidoMa" maxlength="20" value="{{$cliente->apellido_ma}}">
              </div>
              <div class="form-group">
                    <label >Calle</label>
                    <input type="text" class="form-control" id="Calle" placeholder="Calle" name="Calle" maxlength="35" value="{{$cliente->calle}}">
              </div>
              <div class="form-group">
                    <label >No Externo</label>
                    <input type="text" class="form-control" id="NoExterno" placeholder="No Externo" name="NoExterno" maxlength="10" value="{{$cliente->no_ext}}">
              </div>
              <div class="form-group">
                    <label >No Interno</label>
                    <input type="text" class="form-control" id="NoInterno" placeholder="No Interno" name="NoInterno" maxlength="10" value="{{$cliente->no_int}}">
              </div>
                <label >Ciudad/Delegación</label>
              <div class="form-group row" id="RespuestaCiudad">
                    
               <div class="col-9" >
                    <input type="text" class="form-control" value="{{$cliente->ciudad_nombre}}" disabled=""> 
                    <input type="hidden" class="form-control" name="IdCiudad" value="{{$cliente->ciudad_id}}">
                </div>
                <div > 
                  <button class="btn btn-warning"
                          type="button" 
                          id="OtraCiudad" 
                          style="width: 65px; padding: 7px; font-size: 15px; margin-left: -5px; ">
                          <i class="fa fa-list"></i> Otra
                  </button>
                </div>
              </div>
              <label >Colonia</label>
              <div class="form-group row" id="RespuestaColonias">
                    
               <div class="col-9" >
                    <select class="form-control" name="IdColonia">
                      <option value="{{$cliente->colonias_id}}">{{$cliente->colonias_nombre}}</option>
                      @foreach($colonias as $row)
                        <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endforeach


                    </select>
                </div>
              </div>               
              <div class="form-group">
                    <label >Telefono</label>
                    <input type="num" class="form-control" id="Tel" placeholder="Telefono" name="Tel" value="">
              </div>
              <div class="form-group">
                    <label >E-mail</label>
                    <input type="email" class="form-control" id="Email" placeholder="correo@server.com" name="Email" >
              </div>
              

              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Registrar</button>


            </div>
 </div>
 </form>

 <script type="text/javascript">
   $(document).ready(function(){
    var ele = document.querySelectorAll('.validanumericos')[0];
  ele.onkeypress = function(e) {
     if(isNaN(this.value+String.fromCharCode(e.charCode)))
        return false;
  }
  ele.onpaste = function(e){
     e.preventDefault();
  }
      $("#OtraCiudad").click(function(){
          var urls       =  "<?php echo url('Formularios/OtraCiudad')  ?>";

                             $.ajax({
                                      type: "GET",
                                      url: urls,
                                      dataType: "html",
                                      
                                      error: function(){
                                            alert("error petición actualize o cantacte al programador");
                                      },
                                      success: function(data){

                                       $("#RespuestaCiudad").html(data);
                                }
                          });
      });
      $("#Nombre").click(function(){
        
        var cu1     = $("#cu1").val();
        var cu2     = $("#cu2").val();
        var cu3     = $("#cu3").val();
        var cu4     = $("#cu4").val();
        var token   = $("#token").val();
                            
        var urls       =  "<?php echo url('MisClientes/ConfirmarRegistro')  ?>";
                              $.ajax({
                                      type: "post",
                                      url: urls,
                                      data:'_token='+token+'&cu1='+cu1+'&cu2='+cu2+'&cu3='+cu3+'&cu4='+cu4,
                                      dataType: "html",
                                      
                                      error: function(){
                                            alert("error petición actualize o cantacte al programador");
                                      },
                                      success: function(data){
                                      if(data == "1")
                                       {
                                        $("#RespuestaCliente").css('display','none');
                                       }else{
                                        $("#RespuestaCliente").css('display','block');
                                        $("#RespuestaCliente").html(data);

                                       }
                                       
                                }
                          });
      });
   });
 </script>
