<template>
  <b-container fluid>
    <!-- User Interface controls -->
    <b-row>
      <b-col md="6" class="my-1">
        <b-form-group horizontal label="Filtro" class="mb-0">
          <b-input-group>
            <b-form-input v-model="filter" placeholder="Buscar aqui "/>
            <b-input-group-append>
              <b-btn :disabled="!filter" @click="filter = ''">Limpiar</b-btn>
            </b-input-group-append>
          </b-input-group>
        </b-form-group>
      </b-col>
      <b-col md="6" class="my-1">
        <b-form-group horizontal label="Filtrar por" class="mb-0">
          <b-input-group>
            <b-form-select v-model="sortBy" :options="sortOptions">
              <option slot="first" :value="null">-- Sin Filtro --</option>
            </b-form-select>
            <b-form-select :disabled="!sortBy" v-model="sortDesc" slot="append">
              <option :value="false">Asc</option>
              <option :value="true">Desc</option>
            </b-form-select>
          </b-input-group>
        </b-form-group>
      </b-col>
      <b-col md="6" class="my-1">
        <b-button-group size="sm">
          <b-button
            v-for="btn in buttons"
            :pressed.sync="btn.state"
            :variant="btn.variant"
            :key="btn.variant"
            @click.stop="create_properties($event.target)"
          >{{ btn.caption }}</b-button>
        </b-button-group>
      </b-col>
    </b-row>

    <!-- Main table element -->
    <b-table
      show-empty
      stacked="md"
      :items="items"
      :fields="fields"
      :current-page="currentPage"
      :per-page="perPage"
      :filter="filter"
      :sort-by.sync="sortBy"
      :sort-desc.sync="sortDesc"
      :sort-direction="sortDirection"
      @filtered="onFiltered"
    >
      <template slot="code" slot-scope="row">{{row.value.id}}</template>
      <template slot="isActive" slot-scope="row">{{row.value?'Yes :)':'No :('}}</template>
      <template slot="actions" slot-scope="row">
        <!-- We use @click.stop here to prevent a 'row-clicked' event from also happening -->
        <b-button size="sm" @click.stop="info($event.target)" class="mr-1">Mas Información</b-button>
        <b-button
          size="sm"
          @click.stop="row.toggleDetails"
        >{{ row.detailsShowing ? 'Ocultar' : 'Ver' }} Detalles</b-button>
      </template>
      <template slot="row-details" slot-scope="row">
        <crudproperties :property="1"></crudproperties>
      </template>
    </b-table>

    <b-row>
      <b-col md="6" class="my-1">
        <b-pagination
          :total-rows="totalRows"
          :per-page="perPage"
          v-model="currentPage"
          class="my-0"
        />
      </b-col>
    </b-row>
    <b-modal
      id="crud"
      :title="title"
      :header-bg-variant="headerBgVariant"
      :header-text-variant="headerTextVariant"
      size="lg"
    >
      <crudproperties></crudproperties>
    </b-modal>
  </b-container>
</template>

<script>
import crudproperties from "../forms/menu_properties.vue";
const axios = require("axios");
export default {
  components: {
    crudproperties
  },
  created: function() {
    this.getProperties();
  },
  data() {
    return {
      property: {
        editing: true
      },
      variants: [
        "primary",
        "secondary",
        "success",
        "warning",
        "danger",
        "info",
        "light",
        "dark"
      ],
      title: "Propiedades",
      headerBgVariant: "dark",
      headerTextVariant: "light",
      items: [],
      fields: [],
      currentPage: 1,
      perPage: 5,
      totalRows: [],
      pageOptions: [5, 10, 15],
      sortBy: null,
      sortDesc: false,
      sortDirection: "asc",
      filter: null,
      crud: { title: "", content: "" },
      modalInfo: { title: "", content: "" },
      buttons: []
    };
  },
  computed: {
    sortOptions() {
      // Create an options list from our fields
      return this.fields
        .filter(f => f.sortable)
        .map(f => {
          return { text: f.label, value: f.key };
        });
    }
  },
  methods: {
    getProperties() {
      return axios
        .get("getProperties/0")
        .then(
          response => (
            (this.items = response.data.data),
            (this.fields = response.data.headers),
            (this.totalRows = response.data.total),
            (this.buttons = response.data.buttons)
          )
        )
        .catch(error => console.log(error));
    },
    create_properties(button) {
      this.crud.title = "Crear Propiedad";
      this.$root.$emit("bv::show::modal", "crud", button);
    },
    setProperty(id) {
      console.log("entro" + id);
    },
    info(button) {
      this.modalInfo.title = "Editar Propiedad";
      this.$root.$emit("bv::show::modal", "crud", button);
    },
    resetModal() {
      this.modalInfo.title = "";
      this.modalInfo.content = "";
    },
    onFiltered(filteredItems) {
      // Trigger pagination to update the number of buttons/pages due to filtering
      this.totalRows = filteredItems.length;
      this.currentPage = 1;
    }
  }
};
</script>
