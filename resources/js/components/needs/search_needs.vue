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
                                    <select class="selectpicker" v-model="selected_person" title="Soy" data-placeholder="true" data-hide-disabled="true" data-live-search="true">
                                        <option v-for="option_person in person_type" v-bind:id="option_person.id">
                                                {{ option_person.value }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="find-home-item custom-select">                  
                                    <select class="selectpicker" v-model="selected_destination" title="Busco" data-placeholder="true" data-hide-disabled="true" data-live-search="true">
                                        <option v-for="option in prop_type" v-bind:id="option.id">
                                                {{ option.value }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="find-home-item custom-select">                  
                                    <select class="selectpicker" v-model="selected_prop_type" title="Para"  data-placeholder="Estatus" data-hide-disabled="true" data-live-search="true">
                                        <option v-for="option_destination in destination" v-bind:id="option_destination.id">
                                                {{ option_destination.value }}
                                        </option>
                                    </select>
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
                destination: [
                    { id: '1', value:'Alquiler' },
                    { id: '2', value:'Venta'},
                    { id: '3', value:'Proyecto'}
                ],
                selected_destination: null,
                prop_type: [
                    { id: '1', value:'Casa Conjunto' },
                    { id: '2', value:'Casa Comercial'}
                ],
                selected_prop_type: null,
                person_type: [
                    {id: '1', value: 'Propietario'},
                    {id: '2', value: 'Consumidor'},
                    {id: '3', value: 'Marca'},
                    {id: '4', value: 'Inversionista'}
                ],
                selected_person: [],
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