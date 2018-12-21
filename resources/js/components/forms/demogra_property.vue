<template>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Pais</span>
                <v-select label="description" value="id" v-model="country.selected" :options="country.options" v-on:change.prevent="getDepartament()"></v-select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Departamento / Estado</span>
                <v-select label="description" value="id" v-model="departament.selected" :options="departament.options"></v-select>
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Ciudad</span>
                <v-select v-model="municipality.selected" :options="municipality.options"></v-select>
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Localidad</span>
                <v-select v-model="locations.selected" :options="locations.options"></v-select>
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Codigo Postal</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Dirección</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-12 mt-10">
            <div class="panel panel-default">
                <div class="panel-heading">Ubicación en Mapa</div>
                    <div class="panel-body">
                        <google-maps></google-maps>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</template>

<script>
import VueNumeric from 'vue-numeric'
import vueSlider from 'vue-slider-component'
import google_maps from '../forms/google_maps_api'
export default {
    components: {
        VueNumeric,
        'vueSlider': vueSlider,
        'google-maps': google_maps
    },
    data() {
        return {
            country: {
                selected: 'Seleccione el Pais',
                options: []
            },
            departament: {
                selected: null,
                options: []
            },
            municipality: {
                selected: null,
                options: [
                    {label: 'Barranquilla', value: '12'},
                    {label: 'Soledad', value: '23'},
                    {label: 'Puerto Colombia', value: '10'}
                ]
            },
            locations:{
                selected: null,
                options: [
                    {label: 'Norte Centro Historico', value: '01'},
                    {label: 'Riomar', value: '02'},
                    {label: 'Metropolitana', value: '03'}
                ]
            }
        };
    },
    props: ['properties'],
    computed: {
        
    },
    mounted() {
            let that = this;
            axios.get('getCountry')
            .then(function (response) {
                that.country.options = response.data;
                console.log(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
    },
    methods: {
        getDepartament(){
            let that = this;
            let country = that.country.selected.id;
            console.log(country);
            axios.get('getDepartament/'+country)
            .then(function (response) {
                that.departament.options = response.data;
                console.log(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    }
}
</script>