<template>
  <b-card no-body>
    <b-tabs card>
      <b-tab title="Principal" active>
        <infobasica :property="property"></infobasica>
      </b-tab>
      <b-tab title="Caracteristicas">Caracteristicas</b-tab>
      <b-tab title="Propietario">Propietario</b-tab>
      <b-tab title="Historial de Precios">Historial de Precios</b-tab>
      <b-tab title="Ofertantes">Ofertantes</b-tab>
    </b-tabs>
  </b-card>
</template>
<script>
import infobasica from "./admin/infobasica.vue";
export default {
  components: {
    infobasica
  },
  props: ["property"]
};
</script>
