@extends('layouts.app-menu')
@section('contend')
<div style="color: #666; font-size: 30px; text-align: center;">Actualizar App mediante archivo zip
	 </div>
<form action="{{url('subir')}}" method="post" enctype='multipart/form-data' class="form-cotrol">
    {{csrf_field()}}
<div class="form-group">
                   
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                        <label class="custom-file-label" for="exampleInputFile"></label>
                      </div>
                      <div class="input-group-append">
                        <button class=" btn btn-success" type="submit">Cargar Archivo</button>
                      </div>
                    </div>
                  </div>
</form>

   
      

@endsection