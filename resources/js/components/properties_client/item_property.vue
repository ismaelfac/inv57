<template>
  <div>
    <template v-if="btncol">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="flat-item">
          <div class="flat-item-image">
            <a href="#">
              <img :src="gallery" alt>
            </a>
            <div class="flat-link" v-if="property.user">
              <a href v-on:click.prevent="details_property(property.id_property)">Editar</a>
            </div>
            <div class="flat-link" v-else>
              <a href v-on:click.prevent="details_property(property.id_property)">Mas Detalles</a>
            </div>
            <ul class="flat-desc">
              <li>
                <img src="images/icons/4.png" alt>
                <span>{{ property.area }}</span>
              </li>
              <li>
                <img src="images/icons/5.png" alt>
                <span>{{ property.bedrooms }}</span>
              </li>
              <li>
                <img src="images/icons/6.png" alt>
                <span>{{ property.bathrooms }}</span>
              </li>
              <li>
                <img src="images/icons/13.png" alt>
                <span>{{ property.garages }}</span>
              </li>
            </ul>
          </div>
          <div class="flat-item-info">
            <div class="flat-title-price">
              <h5>
                <a href="#">{{ property.title }}</a>
              </h5>
              <span class="price">
                <vue-numeric currency="$" separator="," v-model="price" v-bind:read-only="true"></vue-numeric>
              </span>
            </div>
            <p>
              <img src="images/icons/location.png" alt>
              {{ property.municipality}}
            </p>
          </div>
        </div>
      </div>
    </template>
    <template v-else>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="flat-item">
          <div class="flat-item-image">
            <span class="for-sale">$property.for_sale == 1 ? 'Venta': 'Renta'</span>
            <a href="#">
              <img :src="gallery" alt>
            </a>
            <div class="flat-link" v-if="property.user">
              <a href v-on:click.prevent="details_property(property.id_property)">Editar</a>
            </div>
            <div class="flat-link" v-else>
              <a href v-on:click.prevent="details_property(property.id_property)">Mas Detalles</a>
            </div>
            <ul class="flat-desc">
              <li>
                <img src="images/icons/4.png" alt>
                <span>{{ property.area }}</span>
              </li>
              <li>
                <img src="images/icons/5.png" alt>
                <span>{{ property.bedrooms }}</span>
              </li>
              <li>
                <img src="images/icons/6.png" alt>
                <span>{{ property.bathrooms }}</span>
              </li>
              <li>
                <img src="images/icons/13.png" alt>
                <span>{{ property.garages }}</span>
              </li>
            </ul>
          </div>
          <div class="flat-item-info">
            <div class="flat-title-price">
              <h5>
                <a href="#">{{ property.title }}</a>
              </h5>
              <span class="price">
                <vue-numeric currency="$" separator="," v-model="price" v-bind:read-only="true"></vue-numeric>
              </span>
            </div>
            <p>
              <img src="images/icons/location.png" alt>
              {{ property.municipality}}
            </p>
          </div>
        </div>
      </div>
    </template>
  </div>
</template>

<script>
import VueNumeric from "vue-numeric";
export default {
  components: {
    VueNumeric
  },
  data() {
    return {
      editing: false,
      draft: "",
      price: "3400000",
      gallery: this.property.gallery[0].url
    };
  },
  props: ["property", "btncol"],
  computed: {},
  methods: {
    details_property(id) {
      console.log("item_property " + id);
      EventBus.$emit("details_property", id);
    }
  }
};
</script>


