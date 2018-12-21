<template>
    <div class="col-md-12 mt-10">
            <div class="panel panel-default">
                <div class="panel-heading">Especificaciones</div>
                    <div class="panel-body">
                        <div class="col-md-12 mt-10">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon" id="basic-addon1">Internas</span>
                                <v-select multiple label="description" value="id" v-model="internal.selected" :options="internal.options"></v-select>
                            </div>
                        </div>
                        <div class="col-md-12 mt-10">
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon" id="basic-addon1">Externas</span>
                                <v-select multiple label="description" value="id" v-model="external.selected" :options="external.options"></v-select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
</template>
<script>
export default{
    props:['property'],
    data(){
        return{
            internal: {
                selected: 'Seleccione uno a varios items',
                options: ['Adosado','Aire Acondicionado','Alarma']
            },
            external: {
                selected: 'Seleccione uno a varios items',
                options: ['Acceso Pavimentado','Arboles Frutales','Area Social']
            }
        };
    }
}
<script>