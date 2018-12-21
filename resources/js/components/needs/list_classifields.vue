<template>
<div>
    <item-classifields v-for="(property, index) in classifields" :key="property.id"
                         :classifields="classifields" :property="property" :index="index">
    </item-classifields>
</div>
</template>
<script>
import item_classifields from './item_classifields'
export default{
    components:{
        'item-classifields': item_classifields
    },
    data() {
        return{
            
        }
    },
    props:['classifields'],
    methods:{
        
    }
}
</script>