<template>
 <div id="page-content" class="page-wrapper">
        <search-form @created="searchProperty"></search-form>
            <!-- BLOG AREA START -->
            <div class="blog-area pt-110">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <template>
                            <div class="row">
                                <property-list :properties="properties"></property-list>                                                      
                                <!-- pagination-area -->
                                <div class="col-xs-12">
                                    <!--pagination -->
                                </div>
                            </div>
                            </template>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- BLOG AREA END -->
</div>
</template>

<script>
import PropertyList from './list_property'
import detailsProperty from './details_property'
const axios = require('axios');
export default {
    components: {
        'property-list': PropertyList,
        'details-property' : detailsProperty
    },
    created: function(){
        this.getProperties();
        EventBus.$on('details_property', function(index){
            this.editingProperty(index);
            console.log("properties" +index)
        }.bind(this));
    },
    methods: {
        searchProperty(property) {
            this.properties.push(property);
        },
        alertProperty(property) {
            alert(property.description)
        },
        create_property(){
            this.created = true
        },
        editingProperty(index){       
            this.editing_property = true
        },
        getProperties() {
            return axios.get('getProperties/6')
                        .then(response => (this.properties = response.data.data, this.pagination.totalRows = response.data.total))
                        .catch(error => console.log(error));
        }        
    },
    data() { 
        return {
            user: true,
            btncol:false,
            properties: [],
            pagination: {
                totalRows: [],
                current_page: 1,
                per_page: 15,
                last_page: 2,
                from: 1,
                to: 2,
                page: 1
            },
            editing_property: false,
            created: false,
        }
    }  
}
</script>