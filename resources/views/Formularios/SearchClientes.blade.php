
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

  <select class="form-control" id="TipoBusqueda">
    <option>Cliente Único</option>
    <option>Nombre</option>
    <option>Dirección</option>
  </select>
</div>
 <form method="post" action="{{url('Clientes/Search')}}">
  {{ csrf_field() }}          
 
              <label >Cliente Único</label>
                <div class="row form-group">
                   
                  <div class="cu">
                    <input type="text" class="form-control validanumericos"   style="width: 65px; margin-left: 5px;"  name="cu1" id="cu1" maxlength="4" onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu2.focus()" autocomplete="off">
                  </div>
                  <div class="cu" >
                    <input type="text" class="form-control validanumericos"   style="width: 65px;" name="cu2" id="cu2" maxlength="4" onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu3.focus()" autocomplete="off">
                  </div>
                  <div class="cu" >
                    <input type="text" class="form-control validanumericos"   style="width: 65px;" name="cu3" id="cu3" maxlength="4" onkeyup="if (this.value.length == this.getAttribute('maxlength')) cu4.focus()" autocomplete="off">
                  </div>
                  <div class="col-1" >
                    <input type="text" class="form-control validanumericos"   style="width: 70px;" name="cu4" id="cu4" maxlength="5" autocomplete="off">
                  </div>
                  
                </div>
               
              </div>
               <div class="form-group" >
                <center>     <button class="btn bg-purple" style=" width: 80%;">Buscar Cliente</button></center>
                <br>
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

     
   });
 </script>
