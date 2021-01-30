               <div class="col-9" >
                    <select class="form-control" name="IdCiudad" id="OtrasColonias">
                      @foreach($ciudades as $row)
                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endforeach
                    </select>
                </div>
 <script type="text/javascript">
   $(document).ready(function(){
      
      $("#OtrasColonias").change(function(){
      var idCiudad = $(this).val();
      var urls     =  "<?php echo url('Formularios/OtrasColonias')  ?>";

                             $.ajax({
                                      type: "GET",
                                      url: urls+'/'+idCiudad,
                                      dataType: "html",
                                      
                                      error: function(){
                                            alert("error petición actualize o cantacte al programador");
                                      },
                                      success: function(data){
                                       $("#RespuestaColonias").html(data);
                                }
                          });
      });
   });
 </script>