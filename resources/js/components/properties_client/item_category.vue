<template>
  <div>
    <li><a href="#">{{ category.description}} <span>{{ category.count}}</span></a></li> 
  </div>
</template>
<script>
export default {
    props: ['category']
}
</script>