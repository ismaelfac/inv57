<div class="flat-item">
        <div class="flat-item-image">
            <span class="for-sale">{{ ($prop['for_sale'] ? 'EN VENTA' : 'ARRIENDO') }}</span>
            <a href="{{ route('/', $prop['id_property']) }}"> <img src="{{ (empty($prop['galleries'][0][0]['url']))? 'website/images/flat/1.jpg' : $prop['galleries'][0][0]['url'] }}"
            alt="" />
            <div class="flat-link">
                <a href="{{ route('/', $prop['id_property']) }}">Mas Detalles</a>
            </div>
            <ul class="flat-desc">
                <li>
                    <img src="website/images/icons/4.png" alt="">
                    <span>{{ $prop['built_area'] }} {{ $prop['unit_area_label'] }}</span>
                </li>
                <li>
                    <img src="website/images/icons/5.png" alt="">
                    <span>{{ $prop['bedrooms'] }}</span>
                </li>
                <li>
                    <img src="website/images/icons/6.png" alt="">
                    <span> {{ $prop['bathrooms'] }}</span>
                </li>
            </ul>
        </div>
        <div class="flat-item-info">
            <div class="flat-title-price">
                <h5><a href="{{ route('/', $prop['id_property']) }}">{{ $prop['title'] }}</a></h5><br>
                <span class="price">$ {{ ($prop['for_sale'] ? $prop['sale_price'] : $prop['rent_price'] )}} {{$prop['iso_currency'] }}</span>
            </div>
            <p><img src="website/images/icons/location.png" alt="">{{ $prop['city_label'] }}, {{ $prop['region_label'] }}, {{ $prop['country_label'] }}</p>
        </div>
</div>
    