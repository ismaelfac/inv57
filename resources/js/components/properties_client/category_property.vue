<template>
    <div>
        <ul class="widget-categories-list">
            <item-category v-for="category in categories" :key="category.id"
                :categories="categories" :category="category"></item-category>
        </ul>
    </div>
</template>
<script>
import itemCategory from './item_category'
export default {
    components: {
        'item-category': itemCategory
    },
    props: ['categories']
}
</script>