<template>
<div>
<div class="row image-classifieds">
                        <div class="col-md-4 col-sm-12">
                             <div class="flat-item">
                                <div class="flat-item-image">
                                    <span class="for-sale" v-if="property.tender.price_rent">En Arriendo</span>
                                    <span class="for-sale" v-else>En Venta</span>
                                    <a href="#"><img src="https://us.media.fashionnetwork.com/m/d3d5/0bf2/af7a/aaa5/2dab/b384/9e08/1be6/7ff6/5c9a/650x1019.60/5c9a.jpg" alt=""></a>
                                    <div class="flat-link">
                                        <a href="" v-on:click.prevent="details_property(property.id_property)">Mas Detalles</a>    
                                    </div>
                                    <ul class="flat-desc">
                                        <li><img src="images/icons/4.png" alt=""><span>{{ property.area }}</span></li>
                                        <li><img src="images/icons/5.png" alt=""><span>{{ property.bedrooms }}</span></li>
                                        <li><img src="images/icons/6.png" alt=""><span>{{ property.bathrooms }}</span></li>
                                        <li><img src="images/icons/13.png" alt=""><span>{{ property.garages }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="row">
                                <div class="col-md-8 col-sm-4" style="border-right: 1px solid #cccccc;">
                                    <div class="agent-details-desc-info">
                                        <div class="agent-details-name">
                                            <h3>{{ property.title }}</h3>
                                            <scores></scores>
                                        <div class="agent-details-brief">
                                            <p><span data-placement="top" data-toggle="tooltip" data-original-title="Graphics Designer of HasTech" class="tooltip-content">{{ property.country_id}}</span> is a Specialist Real Estate Borker with</p>
                                        </div>
                                            <comments :comments="property.comments"></comments>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-8">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Costo de la Propiedad</div>
                                        <div class="">
                                            <ul class="list-group list-tender">
                                                <li class="list-group-item"><a href="http://panoramaurbano.barranquilla.gov.co:7890/PanoramaUrbano/" target="_blank" class="btn btn-success btn-block">POT</a></li>
                                                <li class="list-group-item" v-if="property.tender.price_rent">Administración<span class="badge">${{ property.tender.price_rent }}</span></li>
                                                <li class="list-group-item" v-if="property.tender.admon">Cannon<span class="badge">${{ property.tender.admon }}</span></li>
                                                <li class="list-group-item" v-if="property.tender.price_sol">Venta<span class="badge">${{ property.tender.price_sol }}</span></li>
                                            </ul>
                                        </div>
                                        <div class="panel-footer"><a href="#" class="btn btn-success btn-block" aria-hidden="true" v-on:click.prevent="tender()">Ofertar</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
     <modal 
        ref="modal_inv" 
        :need-header="modalInfo.is_header" 
        :need-footer="modalInfo.is_footer"
        :size="'large'">
                <div slot="title">
                    {{ modalInfo.title }}
                </div>
                <div slot="body">
                    <template v-if="modalInfo.item_form === '2'">
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
</template>
<script>
import wizard from '../forms/wizard'
import scores from '../generals/scores'
import crud_classfields from '../forms/crud_classifieds'
import tender from '../forms/crud_tender'
import comments from '../comments/comments'
export default{
    components:{
        'crud-classifieds': crud_classfields,
        'tender': tender,
        'comments': comments,
        'scores': scores,
        'modal': require('vue2-bootstrap-modal'),
        'wizard': wizard
    },
    data() {
        return{
            modalInfo:{
                is_header: false,
                is_footer: false,
                title: '',
                item_form: null,
                footer: ''
            },
        }
    },
    props:['property'],
    methods:{
        tender() {
            this.modalInfo = {
                is_header: true,
                is_footer: true,
                item_form: '2',
                title: 'Oferta al Inmueble',
                footer: 'Inversiones.com'
            }
            this.$refs.modal_inv.open()
        },
        details_property(id){
            this.modalInfo = {
                is_header: false,
                is_footer: false,
                item_form: '3',
                footer: id
            }
            this.$refs.modal_inv.open()
        },
    }
}

</script>
<style lang="scss">
.list-tender {
    height: 180px;
    overflow: scroll;
}
</style>