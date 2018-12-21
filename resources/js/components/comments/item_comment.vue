<template>
<div>
    <article class="recent-post-item">    
        <div class="recent-post-image">
            <a :href="comment.id"><img :src="comment.img" alt=""></a>
        </div>
        <div class="recent-post-info">
            <div class="recent-post-title-time">
                <h5><a :href="comment.id">{{ comment.title}}</a></h5>
                <p>{{ comment.date}}</p>
            </div>
            <p>{{ comment.description}}</p>
        </div>
    </article>                              
</div>
</template>
<script>
export default {
    props: ['comment'],
    methods: {
        getPic(index) {
            return '../assets/' + this.pics[index] + '.png';
        }
    }
}
</script>