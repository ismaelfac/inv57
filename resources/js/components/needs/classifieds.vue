<template>
    <aside class="widget widget-recent-post mb-50">
    <div class="row">
        <div class="col-md-3 col-sm-12 pull-left">
            <div class="input-group input-group-sm"><a href="" class="btn btn-success btn-block" v-on:click.prevent="new_classifieds">
            Promocionar mi Inmueble</a></div>                
        </div>
        <div class="col-md-4 col-sm-12 pull-right">
                <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="basic-addon1">Ordenar por</span>
                    <v-select v-model="recommended.selected" :options="recommended.options"></v-select>
                </div>
        </div>
        <!-- AGENTS DETAILS ABOUT START -->
            <div class="agents-details-about pt-115">
                <div class="container">
                    <list-classifields :classifields="classifields"></list-classifields>
                </div>
            </div>
            
        <!-- AGENTS DETAILS ABOUT END -->
    <modal 
        ref="modal_inv" 
        :need-header="modalInfo.is_header" 
        :need-footer="modalInfo.is_footer"
        :size="'large'">
                <div slot="title">
                    {{ modalInfo.title }}
                </div>
                <div slot="body">
                    <template v-if="modalInfo.item_form  === '1'">
                        <crud-classifieds></crud-classifieds>
                    </template>
                    <template v-else-if="modalInfo.item_form === '2'">
                        <tender></tender>
                    </template>
                    <template v-else-if="modalInfo.item_form === '3'">
                        <wizard></wizard>
                    </template>
                </div>
                <div slot="footer">
                    {{ modalInfo.footer}}
                </div>
    </modal>
    </div>
    </aside>
    
</template>
<script>
import wizard from '../forms/wizard'
import list_classifields from './list_classifields'
export default {
    components:{
        'list-classifields': list_classifields,
        'modal': require('vue2-bootstrap-modal'),
        'wizard': wizard
    },
    data() {
        return {
            modalInfo:{
                is_header: false,
                is_footer: false,
                title: '',
                item_form: null,
                footer: ''
            },
            recommended: {
                selected: 'Recomendados',
                options: [
                    {label:'Valoración y Recomendado', value:'1'},
                    {label:'Precio y Recomendados', value:'2'},
                    {label:'Solo Valoración', value:'3'},
                    {label:'Solo Precio', value:'4'},
                    {label:'Solo Localidad', value:'5'}
                ]
            },
            classifields: [
                    {
                        id_property: '1',
                        country_id: 'Barranquilla',
                        id_property_type: '2',
                        real_property: {
                            for_sale: '1',
                            for_rent: '0'
                        },
                        sale_price: '450000000',
                        rent_price: '0',
                        bedrooms: '2',
                        bathrooms: '2',
                        garages: '1',
                        floor: '0',
                        stratum: '2',
                        title: 'Casa Comercial',
                        area: '450',
                        user: '72288959',
                        comments:[
                            {
                            id: 1,
                            img: 'https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg',
                            title: 'Commentario 1',
                            date: '12/04/2018',
                            description: 'Descripcion del inmueble'
                            },
                            {
                            id: 2,
                            img: 'https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg',
                            title: 'Commentario 2',
                            date: '12/04/2018',
                            description: 'Descripcion del inmueble'
                            }
                        ],
                        tender:{
                            pot: '',
                            price_rent: '1800000',
                            price_sol: '',
                            admon: '340000'
                        }
                    },
                    {
                        id_property: '2',
                        country_id: 'Soledad',
                        id_property_type: '2',
                        real_property: {
                            for_sale: '1',
                            for_rent: '0'
                        },
                        sale_price: '450000000',
                        rent_price: '0',
                        bedrooms: '2',
                        bathrooms: '2',
                        garages: '1',
                        floor: '0',
                        stratum: '2',
                        title: 'Madinson',
                        area: '450',
                        user: '72288959',
                        comments:[
                            {
                            id: 1,
                            img: 'https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg',
                            title: 'Commentario 1',
                            date: '12/04/2018',
                            description: 'Descripcion del inmueble'
                            },
                            {
                            id: 2,
                            img: 'https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg',
                            title: 'Commentario 2',
                            date: '12/04/2018',
                            description: 'Descripcion del inmueble'
                            }
                        ],
                        tender:{
                            pot: '123',
                            price_sol: '250000000',
                            price_rent: '',
                            admon: ''
                        }
                    }
            ]           
        }
    },
    methods: {
        new_classifieds() {
            this.modalInfo = {
                is_header: true,
                is_footer: true,
                item_form: '1',
                title: 'Nuevo Clasificado',
                footer: 'Inversiones.com'
            }
            this.$refs.modal_inv.open()
        },
        consult_advisor() {
            alert("consultar asesor")
        },
        new_comment() {
            alert("nuevo commentario")
        }
    }
}
</script>
<style lang="css">

</style>
