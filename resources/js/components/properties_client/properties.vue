<template>
  <div id="page-content" class="page-wrapper">
    <search-form @created="searchProperty"></search-form>
    <!-- BLOG AREA START -->
    <div class="blog-area pt-110">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <template v-if="!editing_property">
              <h2>Propiedades Recientes</h2>
              <div class="row">
                <property-list :properties="properties" :btncol="btncol"></property-list>
                <!-- pagination-area -->
                <div class="col-xs-12">
                  <!--pagination -->
                </div>
              </div>
            </template>
            <template v-else>
              <details-property :property="property" :btncol="btncol"></details-property>
            </template>
          </div>
          <div class="col-md-4" v-if="!editing_property">
            <!-- widget-categories -->
            <aside class="widget widget-categories mb-10" v-if="user">
              <div>
                <button
                  type="button"
                  class="btn btn-success btn-block"
                  @click="create_property"
                >Crear Inmueble</button>
              </div>
            </aside>
            <aside class="widget widget-categories mb-50">
              <h5>Categorias</h5>
              <property-category :categories="categories"></property-category>
            </aside>
            <!-- widget-recent-post -->
            <aside class="widget widget-recent-post mb-50">
              <h5>Comentarios Recientes</h5>
              <property-comments :comments="comments"></property-comments>
            </aside>
          </div>
        </div>
      </div>
    </div>
    <!-- BLOG AREA END -->
  </div>
</template>

<script>
import PropertyList from "./list_property";
import SearchForm from "./search_property";
import PropertyCategory from "./category_property";
import Comments from "../comments/comments";
import detailsProperty from "./details_property";
const axios = require("axios");
export default {
  components: {
    "property-list": PropertyList,
    "search-form": SearchForm,
    "property-category": PropertyCategory,
    "property-comments": Comments,
    "details-property": detailsProperty
  },
  created: function() {
    this.getProperties();
    EventBus.$on(
      "details_property",
      function(index) {
        this.editingProperty(index);
        console.log("properties" + index);
      }.bind(this)
    );
  },
  methods: {
    searchProperty(property) {
      this.properties.push(property);
    },
    alertProperty(property) {
      alert(property.description);
    },
    create_property() {
      this.created = true;
    },
    editingProperty(index) {
      this.property = searchProperty(index);
      this.editing_property = true;
    },
    getProperties() {
      return axios
        .get("getProperties/6")
        .then(
          response => (
            (this.properties = response.data.data),
            (this.pagination.totalRows = response.data.total)
          )
        )
        .catch(error => console.log(error));
    },
    searchProperty(index) {
      console.log("search ".index);
    }
  },
  data() {
    return {
      user: true,
      btncol: true,
      properties: [],
      pagination: {
        totalRows: [],
        current_page: 1,
        per_page: 15,
        last_page: 2,
        from: 1,
        to: 2,
        page: 1
      },
      editing_property: false,
      created: false,
      categories: [
        { id: "1", description: "Apartamentos", count: "4500" },
        { id: "2", description: "Lotes", count: "20" },
        { id: "3", description: "Casas conjunto", count: "230" }
      ],
      comments: [
        {
          id: "1",
          property_id: "1",
          title: "Madison",
          img:
            "https://images.adsttc.com/media/images/574e/cfd7/e58e/ce8b/0600/0176/newsletter/PORTADA_002_JG531CABEZADEBUEY_24.jpg?1464782799",
          description: "Cual es el precio minimo?",
          date: "02/08/2018"
        },
        {
          id: "2",
          property_id: "2",
          title: "Madison",
          img:
            "https://images.adsttc.com/media/images/574e/cfd7/e58e/ce8b/0600/0176/newsletter/PORTADA_002_JG531CABEZADEBUEY_24.jpg?1464782799",
          description: "Cual es el precio minimo?",
          date: "02/09/2018"
        },
        {
          id: "3",
          property_id: "2",
          title: "Madison",
          img:
            "https://images.adsttc.com/media/images/574e/cfd7/e58e/ce8b/0600/0176/newsletter/PORTADA_002_JG531CABEZADEBUEY_24.jpg?1464782799",
          description: "Cual es el precio minimo?",
          date: "02/05/2018"
        },
        {
          id: "4",
          property_id: "3",
          title: "Madison",
          img:
            "https://images.adsttc.com/media/images/574e/cfd7/e58e/ce8b/0600/0176/newsletter/PORTADA_002_JG531CABEZADEBUEY_24.jpg?1464782799",
          description: "Cual es el precio minimo?",
          date: "02/07/2018"
        },
        {
          id: "5",
          property_id: "4",
          title: "Madison",
          img:
            "https://images.adsttc.com/media/images/574e/cfd7/e58e/ce8b/0600/0176/newsletter/PORTADA_002_JG531CABEZADEBUEY_24.jpg?1464782799",
          description: "Cual es el precio minimo?",
          date: "02/02/2018"
        }
      ]
    };
  }
};
</script>