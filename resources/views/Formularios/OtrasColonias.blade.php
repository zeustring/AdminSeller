               <div class="col-9" >
                    <select class="form-control" name="IdColonia">
                      @foreach($colonias as $row)
                      <option value="{{$row->id}}">{{$row->nombre}}</option>
                      @endforeach
                    </select>
                </div>
