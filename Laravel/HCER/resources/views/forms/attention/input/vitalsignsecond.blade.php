     
        <div class="form-group">
        <label for="breathingfrequency" class="col-lg-4 control-label">Frecuencia Respiratoria</label>
        <div class="col-lg-3">
        <input type="text" class="form-control" name="breathingfrequency" value="{{old('breathingfrequency')}}">
        </div>
        </div>

         <div class="form-group">
        <label for="temperature" class="col-lg-4 control-label">Temperatura</label>
        <div class="col-lg-3">
        <input type="text" class="form-control" name="temperature" value="{{old('temperature')}}">
        </div>
        <div class="col-lg-2">
        <label class="col-lg-0 control-label">/Oral</label>
      </div>
        </div>
            
         <div class="form-group">
        <label for="oxygensaturation" class="col-lg-4 control-label">Saturación de Oxigeno</label>
        <div class="col-lg-3">
        <input type="text" class="form-control" name="oxygensaturation" value="{{old('oxygensaturation')}}">
        </div>
        
        </div>

         <div class="form-group">
        <label for="size" class="col-lg-4 control-label">Estatura</label>
        <div class="col-lg-3">
        <input type="text" class="form-control" name="size" value="{{old('size')}}" id="campo_2" onchange="sumar(this.value);">
        </div>
         <div class="col-lg-2">
         <label class="col-lg-0 control-label">/Metros</label>
        </div>
        </div>

  <div class="form-group">
  
        <div class="col-lg-6">

         <select class="form-control" name="id_ims" id="select">
          <option  value=""></option>
          @foreach ($ims as $im)
      <option value="{{$im->id}}">{{$im->ims}}</option>
      

          @endforeach
        </select>
        
        </div>
        </div>


            
      