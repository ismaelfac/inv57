<div class="card text-center">
  <div class="card-header">Caracteristicas Internas</div>
  <div class="card-body">
    <ul class="nav">
        @foreach ($features_int as $feature_int )
            <li class="nav-item">
                <div class="form-check form-check-inline">
                    <label>
                         {!! Form::checkbox('internal[]', $feature_int->id, null) !!}{{ $feature_int->name }}
                    </label>
                </div>
            </li>
        @endforeach
    </ul>
  </div>
  <div class="card-header">Caracteristicas Externas</div>
  <div class="card-body">
  <ul class="nav">
         @foreach ($features_ext as $feature_ext )
            <li class="nav-item">
                <div class="form-check form-check-inline">
                    <label>
                         {!! Form::checkbox('external[]', $feature_ext->id, null) !!}{{ $feature_ext->name }}
                    </label>
                </div>
            </li>
            
        @endforeach
    </ul>
  </div>
</div>