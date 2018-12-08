<form action="{{ url('/') }}">
    <div class="find-homes">
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <div class="find-home-item custom-select">                  
                    <select class="selectpicker" id="search_prop_type" title="Tipo Inmueble" data-placeholder="true" data-hide-disabled="true" data-live-search="true">
                        <optgroup disabled="disabled" label="disabled">
                            <option>Hidden</option>
                        </optgroup>
                        <optgroup label="Tipos Inmuebles">
                           
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="find-home-item custom-select">                  
                    <select class="selectpicker" id="search_status" name="search_status" data-placeholder="Estatus" data-hide-disabled="true" data-live-search="true">
                        <optgroup disabled="disabled" label="disabled">
                            <option>Objeto</option>
                        </optgroup>
                        <optgroup label="Area">
                        
                        </optgroup>
                        
                    </select>
                </div> 
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="find-home-item">
                    <input type="text" name="min-area" placeholder="Min area">
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="find-home-item">
                    <input type="text" name="max-area" placeholder="Max area">
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="find-home-item  custom-select">                  
                    <select class="selectpicker" title="No. de Cuartos" data-hide-disabled="true">
                        <optgroup  label="1">
                            <option label="1">1</option>
                            <option>2 </option>
                            <option>3 </option>
                            <option>4 </option>
                            <option>5 </option>
                        </optgroup>
                    </select>
                </div> 
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="find-home-item custom-select">                  
                    <select class="selectpicker" title="No. de Baños" data-hide-disabled="true">
                        <optgroup label="2">
                            <option>1 </option>
                            <option>2 </option>
                            <option>3 </option>
                            <option>4 </option>
                            <option>5 </option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-sm-7 col-xs-12">
                        <div class="find-home-item">
                            <!-- shop-filter -->
                            <div class="shop-filter">
                                <div class="price_filter">
                                    <div class="price_slider_amount">
                                        <input type="submit"  value="You range :"/> 
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-12">
                        <div class="find-home-item mb-0-xs">
                            <button class="button-1 btn-block btn-hover-1" id="search_property_action">BUSCAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>