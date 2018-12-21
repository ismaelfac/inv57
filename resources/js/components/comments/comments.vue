<template>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <a href="" class="btn btn-success btn-block" @click.prevent="new_comment()">Comentar</a>
    </div>
    <div class="col-md-12 col-xs-12 comment">
        <item-comment v-for="comment in comments" :key="comment.id"
                    :comments="comments" :comment="comment"></item-comment>                                  
    </div>
</div>
</template>
<script>
import itemcomment from './item_comment'
export default {
    components: {
        'item-comment': itemcomment
    },
    props:['comments'],
    methods: {
        new_comment() {
            alert('Nuevo comentario')
        }
    }
}
</script>
<style lang="scss">
.comment {
    height: 163px;
    overflow: scroll;
    padding: 15px;
}
</style>
