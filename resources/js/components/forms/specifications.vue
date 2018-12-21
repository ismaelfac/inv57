<template>
     <div class="panel-body">
                            <div class="col-md-6 mt-10">
                                <div class="input-group input-group-sm">
                                    <div class="find-home-item">
                                        <div class="price_filter">
                                            <div class="input-group" >
                                                <span class="input-group-addon" id="basic-addon1" style="width: 35%"><img src="images/icons/4.png" alt="">Area Privada</span>
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%">
                                                <vueSlider ref="slider" :formatter="specifications.private_area.formatter" v-model="specifications.private_area.value" :max="specifications.private_area.max" :lazy="true">
                                                </vueSlider></span>
                                                <input class="form-control" type="label" v-model="specifications.private_area.value" style="background: rgba(31, 34, 62, 0.8) none repeat scroll 0 0;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-10">
                                <div class="input-group input-group-sm">
                                    <div class="find-home-item">
                                        <div class="price_filter">
                                            <div class="input-group" >
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%"><img src="images/icons/4.png" alt="">Area Construida</span>
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%">
                                                <vueSlider ref="slider" :formatter="specifications.built_area.formatter" v-model="specifications.built_area.value" :max="specifications.built_area.max" :lazy="true">
                                                </vueSlider></span>
                                                <input class="form-control" type="label" v-model="specifications.built_area.value" style="background: rgba(31, 34, 62, 0.8) none repeat scroll 0 0;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-10">
                                <div class="input-group input-group-sm">
                                    <div class="find-home-item">
                                        <div class="price_filter">
                                            <div class="input-group" >
                                                <span class="input-group-addon" id="basic-addon1" style="width: 35%"><img src="images/icons/4.png" alt=""> Area Total</span>
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%">
                                                <vueSlider ref="slider" :formatter="specifications.total_area.formatter" v-model="specifications.total_area.value" :max="specifications.total_area.max" :lazy="true">
                                                </vueSlider></span>
                                                <input class="form-control" type="label" v-model="specifications.total_area.value" style="background: rgba(31, 34, 62, 0.8) none repeat scroll 0 0;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-10">
                                <div class="input-group input-group-sm">
                                    <div class="find-home-item">
                                        <div class="price_filter">
                                            <div class="input-group" >
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%"><img src="images/icons/5.png" alt=""> Habitaciones</span>
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%">
                                                <vueSlider ref="slider" :formatter="specifications.bedrooms.formatter" v-model="specifications.bedrooms.value" :max="specifications.bedrooms.max" :lazy="true">
                                                </vueSlider></span>
                                                <input class="form-control" type="label" v-model="specifications.bedrooms.value" style="background: rgba(31, 34, 62, 0.8) none repeat scroll 0 0;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-sm">
                                    <div class="find-home-item">
                                        <div class="price_filter">
                                            <div class="input-group" >
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%"><img src="images/icons/6.png" alt=""> Baños</span>
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%">
                                                <vueSlider ref="slider" :formatter="specifications.bathrooms.formatter" v-model="specifications.bathrooms.value" :max="specifications.bathrooms.max" :lazy="true">
                                                </vueSlider></span>
                                                <input class="form-control" type="label" v-model="specifications.bathrooms.value" style="background: rgba(31, 34, 62, 0.8) none repeat scroll 0 0;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-sm">
                                    <div class="find-home-item">
                                        <div class="price_filter">
                                            <div class="input-group" >
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%"><img src="images/icons/13.png" alt=""> Garaje</span>
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%">
                                                <vueSlider ref="slider" :formatter="specifications.garage.formatter" v-model="specifications.garage.value" :max="specifications.garage.max" :lazy="true">
                                                </vueSlider></span>
                                                <input class="form-control" type="label" v-model="specifications.garage.value" style="background: rgba(31, 34, 62, 0.8) none repeat scroll 0 0;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group input-group-sm">
                                    <div class="find-home-item">
                                        <div class="price_filter">
                                            <div class="input-group" >
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%"><img src="images/icons/12.png" alt=""> Piso</span>
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%">
                                                <vueSlider ref="slider" :formatter="specifications.floor.formatter" v-model="specifications.floor.value" :max="specifications.floor.max" :lazy="true">
                                                </vueSlider></span>
                                                <input class="form-control" type="label" v-model="specifications.floor.value" style="background: rgba(31, 34, 62, 0.8) none repeat scroll 0 0;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group input-group-sm">
                                    <div class="find-home-item">
                                        <div class="price_filter">
                                            <div class="input-group" >
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%"><img src="images/icons/down-arrow.png" alt="">  Estrato</span>
                                                <span class="input-group-addon" id="basic-addon1" style="width: 40%">
                                                <vueSlider ref="slider" :formatter="specifications.stratum.formatter" v-model="specifications.stratum.value" :max="specifications.stratum.max" :lazy="true">
                                                </vueSlider></span>
                                                <input class="form-control" type="label" v-model="specifications.stratum.value" style="background: rgba(31, 34, 62, 0.8) none repeat scroll 0 0;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group input-group-sm">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon" id="basic-addon1" style="width: 50%">Elevador</span>
                                        <span class="input-group-addon" id="basic-addon1" style="width: 50%">
                                        <toggle-button v-model="specifications.opt_elevator" color="#95c41f" :sync="true" :labels="{checked: 'Si', unchecked: 'No'}"/>
                                        </span>
                                    </div>    
                                </div>
                            </div>
                        </div>
</template>
<script>
import VueNumeric from 'vue-numeric'
import vueSlider from 'vue-slider-component'
export default {
    components:{
        VueNumeric,
        'vueSlider': vueSlider
    },
    data() {
        return {
            editing: false,
            specifications:{
                private_area: {
                    value: 80,
                    min: 0,
                    max: 2500,
                    width: "100%",
                    formatter: "{value} mts2"
                },
                built_area: {
                    value: 80,
                    min: 0,
                    max: 2500,
                    width: "100%",
                    formatter: "{value} mts2"
                },
                total_area: {
                    value: 80,
                    min: 0,
                    max: 2500,
                    width: "100%",
                    formatter: "{value} mts2"
                },
                bedrooms:{
                    value: 1,
                    min: 0,
                    max: 12,
                    width: "100%",
                    formatter: "{value}"
                },
                bathrooms: {
                    value: 1,
                    min: 0,
                    max: 12,
                    width: "100%",
                    formatter: "{value}"
                },
                garage: {
                    value: 1,
                    min: 0,
                    max: 12,
                    width: "100%",
                    formatter: "{value}"
                },
                floor: {
                    value: 1,
                    min: 0,
                    max: 80,
                    width: "100%",
                    formatter: "{value}"
                },
                stratum: {
                    value: 4,
                    min: 0,
                    max: 6,
                    width: "100%",
                    formatter: "{value}"
                },
                opt_elevator: false
            }
        };
    },
}
</script>
