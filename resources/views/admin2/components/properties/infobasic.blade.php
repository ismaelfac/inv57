
  <div class="form-row">
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Codigo</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Codigo" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Tipo</span>
        </div>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="property_type">
            <option selected>Tipo de Propiedad...</option>
             @foreach($propertiesType as $propertyType)
                <option value="{{ $propertyType->id }}">{{ $propertyType->name }}</option>
             @endforeach
        </select>
      </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Gestión</span>
        </div>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="for">
            <option selected>Gestion sobre la propiedad...</option>
            <option value="1">Arriendo</option>
            <option value="2">Venta</option>
            <option value="3">Proyecto</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Titulo</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Titulo de la propiedad" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
         <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Matricula</button>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Matricula de la propiedad" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Estado</span>
        </div>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="state_property">
            <option selected>Estado de la propiedad...</option>
            <option value="1">Activo</option>
            <option value="2">Suspendido</option>
            <option value="3">Inactivo</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-row mb-1">
   <div class="col-md-6">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.wasi.co/inmuebles/b15905120181029122950.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://images.wasi.co/inmuebles/b15905220181029122955.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://images.wasi.co/inmuebles/b15905320181029122958.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
  </div>
  <div class="col-md-6">
        <ul class="list-group">
            <li class="list-group-item">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa fa-user"></i></button>
                        </div>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="state_property">
                            <option selected>Habitaciones...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3">4</option>
                            <option value="3">5</option>
                            <option value="3">6</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa fa-user"></i></button>
                        </div>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="state_property">
                            <option selected>Baños...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3">4</option>
                            <option value="3">5</option>
                            <option value="3">6</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa fa-user"></i></button>
                        </div>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="state_property">
                            <option selected>Garajes...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa fa-user"></i></button>
                        </div>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="state_property">
                            <option selected>Piso ...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <div class="input-group mr-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Area Cons</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Area Construida" aria-label="Area" aria-describedby="basic-addon1">
                    </div>
                     <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Area Lote</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Area Lote" aria-label="Area" aria-describedby="basic-addon1">
                    </div>  
                </div>
            </li>
            <li class="list-group-item">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <div class="input-group mr-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Cannon</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Cannon" aria-label="cannon" aria-describedby="basic-addon1">
                        <span class="input-group-text">.00</span>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Admon</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Admon" aria-label="cannon" aria-describedby="basic-addon1">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Venta</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Venta" aria-label="cannon" aria-describedby="basic-addon1">
                    <span class="input-group-text">.00</span>
                </div>
            </li>
            <li class="list-group-item">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">Fecha Disponible</span>
                    </div>
                    {!! Form::date('date_dis', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                </div>
            </li>
            <li class="list-group-item">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">Fecha Consignación</span>
                    </div>
                    {!! Form::date('date_consig', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                </div>
            </li>
        </ul>
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Observaciones</span>
        </div>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
  </div>
