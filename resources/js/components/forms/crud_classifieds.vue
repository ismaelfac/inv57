<template>
    <form @submit.prevent="createClassifields">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="basic-addon1">Titulo del Clasificado</span>
                    <input type="text" class="form-control" placeholder="Nombre para la propiedad" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-12 mt-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Especificaciones</div>
                       <specifications></specifications>
                    </div>
                </div>   
            </div>
        </div>
    </form>
</template>
<script>
import specifications from './specifications'
export default {
    components: {
        'specifications': specifications
    },
    data(){
        return{

        }
    },
    methods: {
        createClassifields() {
            this.classifields.push({
                
            });
        }
    }
}
</script>
