<template>
    <!-- FIND HOME AREA START -->
    <section id="page-content" class="page-wrapper">
        <search-form></search-form> 
        <div class="blog-area pt-20 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <google-maps></google-maps>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <aside class="widget widget-categories mb-80">
                            <h5>Busqueda Avanzada</h5>
                            <advanced :filters="filters"></advanced>
                        </aside>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="elements-tab-1">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home_1" v-on:click.prevent="getProperties()"  data-toggle="tab">{{ propertiesTab}}</a></li>
                                <li><a href="#profile_1"  data-toggle="tab">Blog</a></li>
                                <li><a href="#messages_1"  data-toggle="tab">Clasificados</a></li>
                                <li><a href="#settings_1"  data-toggle="tab">Settings</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content mt-20">
                                <div class="tab-pane fade in active" id="home_1">
                                    <template v-if="!editing_property">
                                        <div class="row">
                                            <property-list :properties="properties"></property-list>                                                      
                                            <!-- pagination-area -->
                                            <div class="col-xs-12">
                                                <pagination :pagination="pagination"></pagination>
                                            </div>
                                        </div>
                                    </template>
                                    <template v-else>
                                            <details-property :property="property"></details-property>
                                    </template>
                                </div> 
                                <div class="tab-pane fade" id="profile_1">
                                    <blog></blog>    
                                </div>
                                <div class="tab-pane fade" id="messages_1">
                                    <classifieds></classifieds>
                                </div>
                                <div class="tab-pane fade" id="settings_1">
                                <div class="row">
                                            <property-list :properties="properties"></property-list>                                                      
                                            <!-- pagination-area -->
                                            <div class="col-xs-12">
                                                <pagination :pagination="pagination"></pagination>
                                            </div>
                                        </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import SearchForm from './search_needs'
import PropertyList from '../property/list_property'
import PropertyCategory from '../property/category_property'
import Comments from '../comments/comments'
import pagination from '../generals/pagination'
import blog from './blog'
import google_maps from '../forms/google_maps_api'
import classifieds from './classifieds.vue'
import advanced from './advanced.vue'
import detailsProperty from '../property/details_property'
export default {
    components: {
        'search-form': SearchForm,
        'property-list': PropertyList,
        'property-category': PropertyCategory,
        'property-comments': Comments,
        'pagination' :pagination,
        'blog': blog,
        'google-maps': google_maps,
        'classifieds': classifieds,
        'advanced': advanced,
        'details-property' : detailsProperty
    },
    created: function(){
        EventBus.$on('details_property', function(index){
            this.editingProperty(index);
            console.log("properties" +index)
        }.bind(this));
    },
    methods: {
        alertProperty(property) {
            alert(property.description)
        },
        create_property(){
            this.created = true
        },
        editingProperty(index){    
            this.property = {
                        id_property: index,
                        editing_property: true,
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
                        title: 'Madinson',
                        area: '450',
                        user: '1140830970'
                    },
            this.editing_property = true
        },
        getProperties(){
            console.log("properties ok!")
            this.properties
        }
    },
    data() { 
        return {
            propertiesTab: 'Propiedades Recientes',
            user: true,
            editing_property: false,
            created: false,
            filters:[],
            properties: [
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
                        title: 'Madinson',
                        area: '450',
                        user: '72288959'
                    },
                    {
                        id_property: '2',
                        country_id: 'Barranquilla',
                        id_property_type: '2',
                        real_property: {
                            for_sale: '0',
                            for_rent: '1'
                        },
                        sale_price: '450000000',
                        rent_price: '0',
                        bedrooms: '2',
                        bathrooms: '2',
                        garages: '1',
                        floor: '0',
                        stratum: '2',
                        title: 'Madinson',
                        area: '750',
                        user: '1140830970s'
                    },
                    {
                        id_property: '3',
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
                        title: 'Madinson',
                        area: '80'
                    },
                    {
                        id_property: '4',
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
                        title: 'Madinson',
                        area: '130'
                    },
                    {
                        id_property: '5',
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
                        title: 'Madinson',
                        area: '130'
                    },
                    {
                        id_property: '6',
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
                        title: 'Madinson',
                        area: '130'
                    },
                    {
                        id_property: '7',
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
                        title: 'Madinson',
                        area: '130'
                    },
                    {
                        id_property: '8',
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
                        title: 'Madinson',
                        area: '130'
                    },
                    {
                        id_property: '9',
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
                        title: 'Madinson',
                        area: '130'
                    },
                    {
                        id_property: '10',
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
                        title: 'Madinson',
                        area: '130'
                    },
                    {
                        id_property: '11',
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
                        title: 'Madinson',
                        area: '130'
                    },
                    {
                        id_property: '12',
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
                        title: 'Madinson',
                        area: '130'
                    },
                    {
                        id_property: '13',
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
                        title: 'Madinson',
                        area: '130'
                    },
                    {
                        id_property: '14',
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
                        title: 'Madinson',
                        area: '130'
                    }                  
                ],
            pagination: {
                total: 14,
                current_page: 1,
                per_page: 15,
                last_page: 2,
                from: 1,
                to: 2,
                page: 1
            }
        }
    }  
}
</script>