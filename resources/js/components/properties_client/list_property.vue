<template >
    <div>
        <item-image v-for="(property, index) in properties" :key="property.id"
                :properties="properties" :property="property" :index="index" :btncol="btncol">
        </item-image>
    </div>
</template>

<script>
import ItemImage from './item_property'

export default {
    components: {
        'item-image': ItemImage
    },
    props:['properties','btncol','gallery'],
    computed: {
    	
    },
    mounted() {
        
    },
    methods: {
        
    }
}
</script>