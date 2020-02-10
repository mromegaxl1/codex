<div class="panel-body">



    <div >
           <div class="form-group ">
              <label class="col-lg-3 control-label" for="name">Nombre</label>
              <div class="col-lg-9">
                  <input type="text"   name="name" class="form-control" value="{{ old('name',$itemedit->name) }}">
              </div>

          </div>

          <div class="form-group ">
              <label class="col-lg-2 control-label" for="description">Descripcion</label>
              <div class="col-lg-9">
                  <input type="text"  name="description" class="form-control" value="{{ old('description',$itemedit->description) }}">
               </div>

          </div>

          <div class="form-group ">
              <label class="col-lg-2 control-label" for="price">Precio</label>
              <div class="col-lg-9">
              <input type="number"  name="price" class="form-control" value="{{ old('price',$itemedit->price) }}">
               </div>

          </div>


          <div class="form-group ">
            <label class="col-lg-2 control-label" for="units">Unidades</label>
            <div class="col-lg-9">
            <input type="number"  name="units" class="form-control" value="{{ old('units',$itemedit->units) }}">
             </div>

        </div>


      </div>

  </div>
