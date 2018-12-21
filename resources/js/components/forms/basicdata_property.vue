<template>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Titulo</span>
                <input type="text" class="form-control" placeholder="Nombre para la propiedad" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Estado de la publicación</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Tipo de Inmueble</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Tipo de Negocio</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Precio de Alquiler</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Precio de Venta</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Tiempo</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Valor Administración</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">Estaado de la Propiedad</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6 mt-10">
            <div class="input-group input-group-sm">
                <span class="input-group-addon" id="basic-addon1">No de Matricula</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
</template>
<script>
import VueNumeric from 'vue-numeric'
import vueSlider from 'vue-slider-component'
export default {
    components: {
        VueNumeric,
        'vueSlider': vueSlider
    },
    data() {
        return {
            editing: false,
            draft: '',
            price: '3400000',
                min_max: {
                    value: 120,
                    min: 0,
                    max: 500,
                    width: "100%",
                    formatter: "$ {value}"
                },
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
        };
    },
    props: ['property'],
    computed: {
        isActive() {
            return this.task.id == this.$route.params.id;
        }
    },
    methods: {
        toggleStatus() {
            this.task.pending = !this.task.pending;
        },
        select() {
            this.$router.push(
                this.isActive ? {name: 'tasks'} : {name:'task.details', params: {id: this.task.id}}
            );
        },
        details_property(id){
            console.log("item_property "+id)
            EventBus.$emit('details_property', id   )
        }
    }
}
</script>