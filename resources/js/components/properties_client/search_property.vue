<template>
<div class="find-home-area bg-blue call-to-bg plr-140 pt-60">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="section-title text-white">
                    <h3>Buscas Inmuebles?</h3>
                    <h2 class="h1">Inicia Aqui!</h2>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                <form @submit.prevent="create">
                    <div class="find-homes">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="find-home-item custom-select">                  
                                    <select class="selectpicker" v-model="selected_prop_type" title="Tipo Inmueble" data-placeholder="true" data-hide-disabled="true" data-live-search="true">
                                        <option v-for="option in prop_type" v-bind:id="option.id">
                                                {{ option.value }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="find-home-item custom-select">                  
                                    <select class="selectpicker" v-model="search_status" title="Objeto del Inmueble"  data-placeholder="Estatus" data-hide-disabled="true" data-live-search="true">
                                        <option v-for="option_destination in destination" v-bind:id="option_destination.id">
                                                {{ option_destination.value }}
                                        </option>
                                    </select>
                                </div> 
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="find-home-item  custom-select">                  
                                    <select class="selectpicker"  title="No. de Cuartos" data-hide-disabled="true">
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
                                    <select class="selectpicker"  title="No. de Baños" data-hide-disabled="true">
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
                            <div class="col-sm-9 col-xs-12">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="find-home-item">
                                            <!-- shop-filter -->
                                            <div class="shop-filter">
                                                <div class="price_filter">
                                                    <div class="price_slider_amount">
                                                        <vueSlider ref="slider" :formatter="min_max.formatter" v-model="min_max.value" :min="min_max.min" :max="min_max.max" :lazy="true" >
                                                        </vueSlider>
                                                        <div class="input-group" >
                                                            <span class="input-group-addon" id="basic-addon1" style="width: 50%">Rango de Area</span>
                                                            <input class="form-control" type="label" v-model="min_max.value" style="background: rgba(31, 34, 62, 0.8) none repeat scroll 0 0;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="find-home-item">
                                            <!-- shop-filter -->
                                            <div class="shop-filter">
                                                <div class="price_filter">
                                                    <div class="price_slider_amount">
                                                        <vueSlider ref="slider" :formatter="range_price.formatter" v-model="range_price.value" :min="range_price.min" :max="range_price.max" :lazy="true" >
                                                        </vueSlider>
                                                        <div class="input-group" >
                                                            <span class="input-group-addon" id="basic-addon1" style="width: 40%">Rango de Precios</span>
                                                            <input class="form-control" type="label" v-model="range_price.value" style="background: rgba(31, 34, 62, 0.8) none repeat scroll 0 0;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-3 col-xs-12">
                                <div class="find-home-item mb-0-xs">
                                    <button class="button-1 btn-block btn-hover-1" id="search_property_action">BUSCAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import vueSlider from 'vue-slider-component';
export default {
     components: { vueSlider },
    data() {
        return {
            search_status: '',
                min_max: {
                    value: [20,90],
                    min: 0,
                    max: 500,
                    width: "100%",
                    formatter: "${value}"
                },
                destination: [
                    { id: '1', value:'Alquiler' },
                    { id: '2', value:'Venta'},
                    { id: '3', value:'Proyecto'}
                ],
                prop_type: [
                    { id: '1', value:'Casa Conjunto' },
                    { id: '2', value:'Casa Comercial'}
                ],   
                selected_prop_type: null,
                range_price: {
                    value: [200000,900000],
                    min: 100000,
                    max: 10000000000,
                    width: "100%",
                    formatter: "${value}"
                }
        }
    },
    mounted() {
             
    },
    methods: {
        create() {
            this.$emit('created'), {
                prop_type: this.prop_type.id,
                search_status : this.search_status.id
            };
        }
    }
}
</script>
<style lang="css">
.price_slider_amount{
    width: 100%;
}
</style>