
              <input type="hidden" name="TipoBusqueda" value="3" > 
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
                    <label >Calle</label>
                    <input type="text" class="form-control" id="Calle" placeholder="Calle" name="Calle" maxlength="35" autocomplete="off">
              </div>
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

                                       $("#RespuestaCiudad").css('display','block');
                                       $("#RespuestaCiudad").html(data);
                                }
                          });
      });
     
   });
 </script>