<template>
    <div class="row">
        <!-- blog-item -->
        <div class="col-md-4 col-sm-4 col-xs-12">
            <article class="blog-item bg-gray">
                <div class="blog-image">
                    <a href="single-blog.html"><img src="images/blog/1.jpg" alt=""></a>
                </div>
                <div class="blog-info">
                    <div class="post-title-time">
                        <h5><a href="single-blog.html">Maridland de Villa</a></h5>
                        <p>July 30, 2016 / 10 am</p>
                    </div>
                    <p>Lorem must explain to you how all this mistaolt denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                    <a class="read-more" href="single-blog.html">Leer Mas..</a>
                </div>
            </article>
        </div>
        <!-- blog-item -->
        <div class="col-md-4 col-sm-4 col-xs-12">
            <article class="blog-item bg-gray">
                <div class="blog-image">
                    <a href="single-blog.html"><img src="images/blog/2.jpg" alt=""></a>
                </div>
                <div class="blog-info">
                    <div class="post-title-time">
                        <h5><a href="single-blog.html">Latest Design House</a></h5>
                        <p>July 30, 2016 / 10 am</p>
                    </div>
                    <p>Lorem must explain to you how all this mistaolt denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                    <a class="read-more" href="single-blog.html">Leer Mas..</a>
                </div>
            </article>
        </div>
        <!-- blog-item -->
        <div class="col-md-4 col-sm-4 col-xs-12">
            <article class="blog-item bg-gray">
                <div class="blog-image">
                    <a href="single-blog.html"><img src="images/blog/3.jpg" alt=""></a>
                </div>
                <div class="blog-info">
                    <div class="post-title-time">
                        <h5><a href="single-blog.html">Duplex Villa House</a></h5>
                        <p>July 30, 2016 / 10 am</p>
                    </div>
                    <p>Lorem must explain to you how all this mistaolt denouncing pleasure and praising pain wasnad I will give you a complete pain was praising</p>
                    <a class="read-more" href="single-blog.html">Leer Mas..</a>
                </div>
            </article>
        </div>
        <!-- blog-item -->
    </div>
</template>
<script>
import details_blog from './detailsblog_property'
export default {
    components: {
        details_blog
    },
    props: ['detailsBlog']
}
</script>