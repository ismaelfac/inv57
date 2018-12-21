<template>
<div>
  <gmap-map
    v-bind:center="center"
    v-bind:zoom="12"
    v-bind:map-type-id="mapTypeId">
    <gmap-marker
      v-for="(item, index) in markers"
      v-bind:key="index"
      v-bind:position="item.position"
      v-on:click="center=item.position"/>
  </gmap-map>
</div>
</template>

<script>
export default {
  data() {
    return {
      center: { lat: 10.9838039, lng: -74.8880581 },
      mapTypeId: "terrain",
      markers: [ 
        { position: { lat: 10.9897382, lng: -74.8121738 } }
      ]
    };
  }
};
</script>

<style lang="scss" scoped>
.vue-map-container {
  height: 250px;
  max-width: 1024px;
  width: 100%;
}
</style>