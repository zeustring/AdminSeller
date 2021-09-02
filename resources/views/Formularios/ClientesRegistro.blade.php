<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-user"></i> Registro de Cliente </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>

  <form method="post" action="{{url('Clientes/Registro')}}">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">
              <label >Cliente Unico</label>
                <div class="row form-group">
                   
                  <div class="cu">
                    <input type="text"
                           class="form-control validanumericos"
                           style="width: 65px; margin-left: 5px;"
                           name="cu1"
                           id="cu1"
                           maxlength="4"
                           onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu2.focus()" autocomplete="off"
                           inputmode="numeric">
                  </div>
                  <div class="cu">
                  <input type="text"
                           class="form-control validanumericos"
                           style="width: 65px;"
                           name="cu2"
                           id="cu2"
                           maxlength="4"
                           onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu3.focus()" autocomplete="off"
                           inputmode="numeric">
                  </div>
                  <div class="cu">
                  <input type="text"
                           class="form-control validanumericos"
                           style="width: 65px;"
                           name="cu3"
                           id="cu3"
                           maxlength="4"
                           onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu4.focus()" autocomplete="off"
                           inputmode="numeric">
                  </div>
                  <div class="cu">
                  <input type="text"
                           class="form-control validanumericos"
                           style="width: 65px;"
                           name="cu4"
                           id="cu4"
                           maxlength="6"
                           autocomplete="off"
                           inputmode="numeric">
                  </div>
                </div>
                <div class="form-group">
                  <div id="RespuestaCliente"></div>
                  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                </div>
              <div class="form-group">
                    <label >Nombre</label>
                    <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="Nombre" maxlength="20" autocomplete="off" required>
              </div>
              <div class="form-group">
                    <label >Apellido Paterno</label>
                    <input type="num" class="form-control" id="ApellidoPa" placeholder="Apellido Paterno" name="ApellidoPa" maxlength="20" autocomplete="off" >
              </div>
              <div class="form-group">
                    <label >Apellido Materno</label>
                    <input type="num" class="form-control" id="ApellidoMa" placeholder="Apellido Materno" name="ApellidoMa" maxlength="20" autocomplete="off" >
              </div>
              <div class="form-group">
                    <label >Calle</label>
                    <input type="text" class="form-control" id="Calle" placeholder="Calle" name="Calle" maxlength="35" autocomplete="off" required>
              </div>
              <div class="form-group">
                    <label >No Externo</label>
                    <input type="text" class="form-control" id="NoExterno" placeholder="No Externo" name="NoExterno" maxlength="10" autocomplete="off">
              </div>
              <div class="form-group">
                    <label >No Interno</label>
                    <input type="text" class="form-control" id="NoInterno" placeholder="No Interno" name="NoInterno" maxlength="10" autocomplete="off" >
              </div>

              <label >Ciudad/Municipio</label>
              <div class="form-group row" id="RespuestaCiudad">
                    
               <div class="col-9" >
                    <input type="text" class="form-control" value="{{$ciudad->nombre}}" disabled=""> 
                    <input type="hidden" class="form-control" name="IdCiudad" value="{{$ciudad->id}}">
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
                      <option value="0">----------</option>
                      @foreach($colonia as $row)
                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endforeach
                    </select>
                </div>
              </div>              
              <div class="form-group">
                    <label >Telefono</label>
                    <input type="num" class="form-control" id="Tel" placeholder="Telefono" name="Tel" autocomplete="off"
                    inputmode="numeric">
              </div>
              <div class="form-group">
                    <label >E-mail</label>
                    <input type="email" class="form-control" id="Email" placeholder="correo@server.com" name="Email" autocomplete="off">
              </div>
              
               <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                          <i class="fas fa-save"></i> 
                          Registrar Cliente
                 </button>
                </center>

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
       $('#Tel').on('input', function () { 
                   this.value = this.value.replace(/[^0-9]/g,'');
        });
       $('#cu1').on('input', function () { 
                   this.value = this.value.replace(/[^0-9]/g,'');
        });
       $('#cu2').on('input', function () { 
                   this.value = this.value.replace(/[^0-9]/g,'');
        });
       $('#cu3').on('input', function () { 
                   this.value = this.value.replace(/[^0-9]/g,'');
        });
       $('#cu4').on('input', function () { 
                   this.value = this.value.replace(/[^0-9]/g,'');
        });
   });
 </script>
             