<div class="modal-header bg-info">
              <h4 class="modal-title"> <i class="fa fa-list"></i> Registro de Promotor Marca </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
</div>
<form action="{{url('PromotorMarca/Registro')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}         
 <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 
            <div class="modal-body">

              <div class="form-group">
                    <label >Nombre de Marca</label>
                    <input type="text" class="form-control" id="NombreMarca" placeholder="Nombre Marca" name="NombreMarca" autocomplete="off">
              </div>
              <div class="form-group">
                    <label >Canal</label>
                    <select name="IdCanal" class="form-control">
                      <option value="0">----</option>
                    @foreach($canales as $row)

                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                    <label >Imagen Fondo Promotor Marca</label>
                    <input type="file" name="ImagenFondoMarca" class="form-control" type="file"/>
              </div>
              <div class="form-group">
                    <label >Imagen Icono Promotor Marca</label>
                    <input type="file" name="ImagenIconoMarca" class="form-control" type="file"/>
              </div>
              <div class="form-group">    
                <center>    
                 <button class="btn boton-modal-large" 
                         type="submit">
                          <i class="fas fa-save"></i> 
                          Registrar Marca
                 </button>
                </center>
              </div>

            </div>
 </div>
 </form>