
<div class="form-row mb-1">
    <div class="col-md-6" id="slider">
        <div id="myCarousel" class="carousel slide">
            <!-- main slider carousel items -->
            <div class="carousel-inner">
                @foreach($galleries as $gallery)
                    <div data-slide-number="{{ $gallery->position }}" class="item carousel-item">
                        <img src="{{ $gallery->url }}" class="img-fluid">
                    </div>
                @endforeach
            </div>
            <!-- main slider carousel nav controls -->
            <ul class="carousel-indicators list-inline">
                @foreach($galleries as $gallery)
                <li class="list-inline-item active">
                    <a id="carousel-selector-0" class="selected" data-slide-to="{{ $gallery->position }}" data-target="#myCarousel">
                        <img src="{{ $gallery->url }}" class="img-fluid">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <ul class="list-group">
            {!! Form::open(['route' => ['galleries.store']]) !!}
                <li class="list-group-item">
                    <div class="input-group">
                        {!! Form::file('image', ['class' => 'form-control']) !!}
                    </div>     
                </li>
                <li class="list-group-item">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Descripción</span>
                        </div>
                        <input type="text" class="form-control" name="description" id="validationDefaultUsername" placeholder="Descripción Imagen" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">Posición</span>
                        </div>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="position">
                            <option selected>Posición de la Imagen...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                </li>
                <li class="list-group-item">
                    <button type="submit" class="btn btn-outline-success btn-sm">Cargar Imagen</button>
                </li>
            {!! Form::close() !!}
        </ul>
    </div>
</div>