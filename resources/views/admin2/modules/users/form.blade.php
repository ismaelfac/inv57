<div class="form-row">
    <div class="form-group col-md-6">
      <label class="sr-only" for="inlineFormInputGroupUsername2">Nombres Completos</label>
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            <div class="input-group-text">Nombres Completos</div>
            </div>
            <input type="text" name="name" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Nombres" value="{{ old('name', $user->name) }}">
        </div>
    </div>
    <div class="form-group col-md-6">
      <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            <div class="input-group-text">@</div>
            </div>
            <input type="text" name="email" class="form-control" id="inlineFormInputGroupUsername2" value="{{ old('email',$user->email) }}" placeholder="Email">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="inputPassword2" class="sr-only">Password</label>
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            <div class="input-group-text">Contraseña</div>
            </div>
            <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password" value="{{ old('password' )}}">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="inputPassword2" class="sr-only">Estado del Usuario</label>
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            </div>
                <input type="checkbox" name="is_active" checked data-toggle="toggle" data-on="<i class='fa fa-play'></i>Activar" data-off="<i class='fa fa-minus'></i> Inactivar" data-onstyle="success" data-offstyle="danger" value="{{ old('is_active',$user->is_active) }}">
            </div>
                <div id="console-event"></div>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card border-light mb-3">
        <div class="card-header">Roles</div>
        <div class="card-body">
            <div class="list-group">
                @foreach ($roles as $role )
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><small>{!! Form::checkbox('roles[]', $role->id, null) !!}</small> {{ $role->name}}</h5>
                    <small>({{ $role->special === 'no-access' ? 'Sin Acesso' : 'Acceso Total' }})</small>
                    </div>
                    <p class="mb-1">({{ $role->description ?: 'N/A' }})</p>
                </a>
                @endforeach
            </div>
        </div>
        </div>
    </div>