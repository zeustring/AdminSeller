
<style type="text/css">
  .cu{
    margin-right: 15px;
    margin-left: 7px;
  }
 
</style>
<div class="modal-header bg-purple">
              <h4 class="modal-title"> <i class="fa fa-globe-americas"></i> Regional de Clientes </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
  <div class="modal-body">
<label>Tipo de Busqueda:</label>
<div class="form-group">

  <select class="form-control" id="SelectTipoBusqueda" style="max-width: 400px; background: #505069; color: #efefef">
    <option value="BusquedaClienteUnico">Cliente Único</option>
    <option value="BusquedaNombre">Nombre</option>
    <option value="BusquedaDireccion">Dirección</option>
  </select>
</div>
 <form method="post" action="{{url('Clientes/Search')}}">
  {{ csrf_field() }}          
              <div id="RespuestaTipoBusqueda">
              <label >Cliente Único</label>
                <div class="row form-group">
                  <input type="hidden" name="TipoBusqueda" value="1" > 
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
               </div>
              
               <div class="form-group" >
                <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                         <i class="fas fa-search"></i>
                         Buscar Cliente
                 </button>
                </center>
                <br>
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

      $("#SelectTipoBusqueda").change(function(){
         var busqueda  =  $(this).val();
         

               var urls       =  "<?php echo url('Formularios/SelectTipoBusqueda')  ?>";
                             $("#RespuestaTipoBusqueda").css('display','none');
                             $.ajax({
                                      type: "GET",
                                      url: urls+'/'+busqueda,
                                      dataType: "html",
                                      
                                      error: function(){
                                            alert("error petición actualize o cantacte al programador");
                                      },
                                      success: function(data){

                                       $("#RespuestaTipoBusqueda").css('display','block');
                                       $("#RespuestaTipoBusqueda").html(data);
                                }
                          });
      });
   });
 </script>
