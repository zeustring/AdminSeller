<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-user"></i> Registro de Cliente </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<style type="text/css">
  .cu{
    margin-right: 15px;
    margin-left: 7px;
  }
</style>
  <form method="post" action="{{url('Clientes/Registro')}}">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">
              <label >Cliente Unico</label>
                <div class="row form-group">
                   
                  <div class="cu">
                    <input type="text" class="form-control"   style="width: 65px;" maxlength="4" name="cu1" >
                  </div>
                  <div class="cu" >
                    <input type="text" class="form-control"   style="width: 65px;" maxlength="4" name="cu2">
                  </div>
                  <div class="cu" >
                    <input type="text" class="form-control"   style="width: 65px;" maxlength="4" name="cu3">
                  </div>
                  <div class="col-1" >
                    <input type="text" class="form-control"   style="width: 65px;" maxlength="5" name="cu4">
                  </div>
                </div>

              <div class="form-group">
                    <label >Nombre</label>
                    <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="Nombre">
              </div>
              <div class="form-group">
                    <label >Apellido Paterno</label>
                    <input type="num" class="form-control" id="ApellidoPa" placeholder="Apellido Paterno" name="ApellidoPa">
              </div>
              <div class="form-group">
                    <label >Apellido Materno</label>
                    <input type="num" class="form-control" id="ApellidoMa" placeholder="Apellido Materno" name="ApellidoMa">
              </div>
              <div class="form-group">
                    <label >Calle</label>
                    <input type="text" class="form-control" id="Calle" placeholder="Calle" name="Calle">
              </div>
              <div class="form-group">
                    <label >No Externo</label>
                    <input type="text" class="form-control" id="NoExterno" placeholder="No Externo" name="NoExterno">
              </div>
              <div class="form-group">
                    <label >No Interno</label>
                    <input type="text" class="form-control" id="NoInterno" placeholder="No Interno" name="NoInterno">
              </div>

              <label >Ciudad/Delegación</label>
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
                      @foreach($colonia as $row)
                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endforeach
                    </select>
                </div>
              </div>              
              <div class="form-group">
                    <label >Telefono</label>
                    <input type="num" class="form-control" id="Tel" placeholder="Telefono" name="Tel">
              </div>
              <div class="form-group">
                    <label >E-mail</label>
                    <input type="email" class="form-control" id="Email" placeholder="correo@server.com" name="Email">
              </div>
              

              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Registrar</button>


            </div>
 </div>
 </form>

 <script type="text/javascript">
   $(document).ready(function(){
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
      
   });
 </script>