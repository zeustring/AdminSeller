<div class="modal-header bg-purple">
              <h4 class="modal-title"> <i class="fa fa-envelope-open-text"></i> Pago Membresia </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<style type="text/css">
  .modal-body label{
    color: #e83434;
    margin-bottom: -5px;
    position: relative;
    font-size: 13px;
  }
  .form-group{
    margin-bottom: 0px;
  }
  .datos{
    font-size: 13px;
  }
  .text-center , .form-group{
    font-size: 13px;
  }
</style>
  <form method="post" action="{{url('Membresia/GuardarPago')}}"  enctype="multipart/form-data">
  {{ csrf_field() }}          
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  
            <div class="modal-body labels" style="background: #3b285f; color: #EEE">
              <center>
                    <img src="{{url('imagen/banco-azteca.png')}}" width="120">
                  </center>
                <div class="form-group">
                  <label>Beneficiario:</label>
                  <br>
                  Cristian Joel Hernández Hernández
                </div>
                <div class="form-group">
                 <label> Numero de Tarjeta:</label>
                 <br>
                  4027 6650 0318 9983
                </div>
                <div class="form-group">
                  <label>Numero de Cuenta:</label>
                  <br>
                  6606 0114 2932 37
                </div>
                <div class="form-group">
                  <label>Clave Interbancaria:</label>
                  <br>
                  1271 8000 1142 9323 75
                </div>
                <center>
                <label class="text-warning" style="font-size: 20px;">
                  $50.<label style="font-size: 12px;
                                    margin-top: 3px;
                                    position: absolute;"
                                    class="text-warning">00
                      </label><label class="text-warning" style="margin-left: 15px; font-size:18px"> MXN</label><br>
                  <label class="text-warning" style="font-size: 14px">Pago de Membresia</label>
                 </label>
                </center>
                <hr>
                <div class="text-center" >
                  <label class="text-warning">Instrucciones:</label><br>
                  Realiza el pago y toma una Foto/Captura del depósito 📸 <br>
                  Sube la imagen en el siguiente formulario 💾<br>
                  Tu membresia quedara activa de inmediato ✅<br>
                  Te avisaremos cuando se apruebe tu pago. ⏳<br>
                  <label class="text-warning" style="font-size: 12px">
                  (Cualquier intento de fraude o engaño amerita sanción) 🚫
                  </label>

                </div>
                <hr>
                 <div class="form-group">
                  <label>Comprobante de Pago:</label>
                   <input type="file" name="Pago" class="form-control">
                 </div>

              <center><br>
              <button class="btn boton-modal-large"
                      type="submit">
                      <i class="fa fa-save"></i>
                      Guardar Pago
              </button>
              </center>
             
            </div>
 </div>
 </form>
