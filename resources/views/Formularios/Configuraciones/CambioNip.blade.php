<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-user"></i> Actualizar NIP </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
  <form method="post" action="{{url('Configuraciones/CambioNip')}}">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              
              <div class="form-group">
                    <label >NIP Nuevo:</label>
                    <input type="password" 
                     class="form-control" 
                     placeholder="****" 
                     name="NipNew" 
                     autocomplete="off"
                     maxlength="4"
                     id="NipNew"
                     inputmode="numeric">
              </div>
              <div class="form-group">
                    <label >Repite NIP: </label>
                    <input type="password" 
                     class="form-control" 
                     placeholder="****" 
                     name="NipRepite" 
                     autocomplete="off"
                     maxlength="4"
                     id="NipRepite"
                     inputmode="numeric">
              </div>
              

               <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                          <i class="fas fa-save"></i> 
                          Actualizar NIP
                 </button>
                </center>

            </div>
 </div>
 </form>
             <script type="text/javascript">
              $(document).ready(function(){
                $('#NipNew').on('input', function () { 
                   this.value = this.value.replace(/[^0-9]/g,'');
                });
                $('#NipRepite').on('input', function () { 
                   this.value = this.value.replace(/[^0-9]/g,'');
                });
              });
              
            </script>