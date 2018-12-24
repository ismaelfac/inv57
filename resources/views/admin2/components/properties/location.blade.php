<div class="form-row">
<div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Pais</span>
        </div>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="country">
            <option selected value="{{ old('country',$property->Country->id) }}">{{ old('country',$property->Country->description) }}</option>
             @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->description }}</option>
             @endforeach
        </select>
      </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Departamento</span>
        </div>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="departament">
            <option selected value="{{ old('departament',$property->Departament->id) }}">{{ old('departament',$property->Departament->description) }}</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Municipio</span>
        </div>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="municipality">
            <option selected value="{{ old('municipality',$property->Municipality->id) }}">{{ old('municipality',$property->Municipality->description) }}</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Barrio</span>
        </div>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="neighborhood">
            <option selected value="{{ old('neighborhood',$property->neighborhood->id) }}">{{ old('neighborhood',$property->neighborhood->description) }}</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Localidad</span>
        </div>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="location">
            <option selected value="{{ old('location',$property->location->id) }}">{{ old('location',$property->location->description) }}</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Estrato</span>
        </div>
        {!! Form::select('social_stratum',$property->SocialStratum->pluck('it_represents','id'), null, ['class' => 'custom-select mr-sm-2', 'placeholder' => 'Estrato propiedad']) !!}
      </div>
    </div>
  </div>
  <div class="form-row mb-1">
    <div class="form-group col-md-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Dirección</span>
        </div>
        <input type="text" name="address" value="{{ old('address',$property->address ) }}" class="form-control" id="validationDefaultUsername" placeholder="Dirección" aria-describedby="inputGroupPrepend2">
      </div>
    </div>
    <div class="form-group col-md-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Referencia</span>
        </div>
        <input type="text" class="form-control" value="{{ old('reference',$property->reference ) }}" id="validationDefaultUsername" placeholder="Referencia" aria-describedby="inputGroupPrepend2">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <div class="input-group">
        <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2">Observaciones</span></div>
        {!! Form::textarea('observations', old('observations',$property->observations ), ['id' => 'exampleFormControlTextarea1', 'class' => 'form-control', 'rows' => 4,'style' => 'resize:none']) !!}
        </div>
    </div>
  </div>
