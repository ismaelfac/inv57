<template>
<div class="pagination-area mb-60">
    <ul class="pagination-list text-center">
        <li v-if="pagination.current_page > 1">
            <a href="#" @click.prevent="changePage(pagination.current_page - 1)"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
        <li><a href="#" @click.prevent="changePage(pagination.page)">{{ pagination.page }}</a></li>
        <li v-if="pagination.current_page < pagination.last_page">
            <a href="#" @click.prevent="changePage(pagination.current_page + 1)"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
    </ul>
</div>
</template>
<script>
export default {
    props: ['pagination'],
    computed: {
        isActive: function() {

        },
        pagesNumber: function() {
            if(!this.pagination.to){
                return [];
            }
            let from = this.pagination.current_page -2; //TODO offset
            if(from < 1){
                from = 1;
            }
            let to = from + (2 * 2); //TODO
            if(to >= this.pagination.last_page){
                to = this.pagination.last_page;
            }
            let pagesArray = [];
            while(from <= to){
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },
    methods: {
        changePage: function(page){
            this.pagination.current_page = page;
            this.getData(page);
        },
        getData: function(page){
            let urlData = 'properties?page='+page;
            console.log("Page"+this.urlData)
        }
    }
}
</script>
<style lang="scss">

</style>