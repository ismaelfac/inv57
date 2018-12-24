
  <div class="form-row">
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Codigo</span>
        </div>
        {!! Form::text('id', null,['class' => 'form-control', 'id' => 'validationDefaultUsername','placeholder' => 'Codigo'])!!}
      </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Tipo</span>
        </div>
        {!! Form::select('property_type_id',$propertiesType->pluck('name'), null, ['class' => 'custom-select mr-sm-2', 'placeholder' => 'Tipo de propiedad']) !!}
      </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Gestión</span>
        </div>
        {!! Form::select('management_property',['1' => 'Arriendo','2' => 'Venta','3' => 'Proyecto','4' => 'Arriendo/Venta'], $property->pluck('for_sale'), ['class' => 'custom-select mr-sm-2', 'placeholder' => 'Gestion de la propiedad']) !!}
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Titulo</span>
        </div>
        {!! Form::text('title', null,['class' => 'form-control', 'id' => 'validationDefaultUsername','placeholder' => 'Titulo'])!!}
      </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
         <div class="input-group-append">
            <span class="input-group-text" id="inputGroupPrepend2">Matricula</span>
        </div>
        {!! Form::text('registration', null,['class' => 'form-control', 'id' => 'validationDefaultUsername','placeholder' => 'Matricula de la Propiedad'])!!}
       </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Estado</span>
        </div>
        {!! Form::select('state_property',['Activo', 'Suspendido', 'Inanctivo'],$property->pluck('state_property'), ['class' => 'custom-select mr-sm-2', 'placeholder' => 'Estrato propiedad']) !!}
      </div>
    </div>
  </div>
  <div class="form-row mb-1">
   <div class="col-md-6">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner mt-5">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{ old('main',$property->galleries[0]->url) }}" alt="First slide">
                </div>
                
            </div>
        </div>
  </div>
  <div class="col-md-6">
        <ul class="list-group">
            <li class="list-group-item">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa fa-bed"></i></button>
                        </div>
                        {!! Form::selectRange('bedrooms',0,20, $property->pluck('bedrooms'), ['class' => 'form-control']) !!}
                        
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa fa-bath"></i></button>
                        </div>
                        {!! Form::selectRange('bathrooms',0,20, $property->pluck('bathrooms'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa fa-car"></i></button>
                        </div>
                           {!! Form::selectRange('garages',0,10, $property->pluck('garages'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa fa-building"></i></button>
                        </div>
                            {!! Form::selectRange('floor',0,50, $property->pluck('floor'), ['class' => 'form-control']) !!}
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <div class="input-group mr-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Area Cons</span>
                        </div>
                         {!! Form::text('area', $property->area,['class' => 'form-control', 'id' => 'validationDefaultUsername','placeholder' => 'Area Construida'])!!}
                        <span class="input-group-text">mts2</span>
                    </div>
                     <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Area Lote</span>
                        </div>
                         {!! Form::text('lote', $property->built_area,['class' => 'form-control', 'id' => 'validationDefaultUsername','placeholder' => 'Lote'])!!}
                        <span class="input-group-text">mts2</span>
                    </div>  
                </div>
            </li>
            <li class="list-group-item">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <div class="input-group mr-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Cannon</span>
                        </div>
                         {!! Form::text('cannon', $property->rent_price,['class' => 'form-control', 'id' => 'validationDefaultUsername','placeholder' => 'Cannon'])!!}
                        <span class="input-group-text">.00</span>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Admon</span>
                        </div>
                         {!! Form::text('admon', null,['class' => 'form-control', 'id' => 'validationDefaultUsername','placeholder' => 'Admon'])!!}
                          <span class="input-group-text">.00</span>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Venta</span>
                    </div>
                    {!! Form::text('sale_price', $property->sale_price,['class' => 'form-control', 'id' => 'validationDefaultUsername','laceholder' => 'sale_price'])!!}
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
  
