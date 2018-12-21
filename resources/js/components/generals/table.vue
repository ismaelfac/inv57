<template>
  <b-container fluid>
    <!-- User Interface controls -->
    <b-row>
      <b-col md="4" class="my-1">
        <b-form-group horizontal label="Filtro" class="mb-0">
          <b-input-group>
            <b-form-input v-model="filter" placeholder="Tipo de Busqueda" />
            <b-input-group-append>
              <b-btn :disabled="!filter" @click="filter = ''">Limpiar</b-btn>
            </b-input-group-append>
          </b-input-group>
        </b-form-group>
      </b-col>
      <b-col md="4" class="my-1">
        <b-form-group horizontal label="Filtro" class="mb-0">
          <b-input-group>
            <b-form-select v-model="sortBy" :options="sortOptions">
                <option slot="first" :value="null">-- sin filtro --</option>
            </b-form-select>
            <b-form-select :disabled="!sortBy" v-model="sortDesc" slot="append">
              <option :value="false">Asc</option>
              <option :value="true">Desc</option>
            </b-form-select>
          </b-input-group>
        </b-form-group>
      </b-col>
      <b-col md="4" class="my-1">
        <b-form-group horizontal label="Filtro" class="mb-0">
          <b-input-group>
            <b-input-group-append>
            <b-button @click="create" variant="success">Crear Inmueble</b-button>
            </b-input-group-append>
          </b-input-group>
        </b-form-group>
      </b-col>
    </b-row>

    <!-- Main table element -->
    <b-table show-empty
             stacked="md"
             :items="items"
             :fields="fields"
             :current-page="currentPage"
             :per-page="perPage"
             :filter="filter"
             :sort-by.sync="sortBy"
             :sort-desc.sync="sortDesc"
             :sort-direction="sortDirection"
             @filtered="onFiltered">
      <template slot="name" slot-scope="row">{{row.value.first}} {{row.value.last}}</template>
      <template slot="isActive" slot-scope="row">{{row.value?'Yes':'No'}}</template>
      <template slot="actions" slot-scope="row">
        <!-- We use @click.stop here to prevent a 'row-clicked' event from also happening -->
        <b-button size="sm" @click.stop="info(row.item, row.index, $event.target)" class="mr-1">
          Info modal
        </b-button>
        <b-button size="sm" @click.stop="row.toggleDetails">
          {{ row.detailsShowing ? 'Ocultar' : 'Ver' }} Detalles
        </b-button>
      </template>
      <template slot="row-details" slot-scope="row">
        <b-card>
          <ul>
            <li v-for="(value, key) in row.item" :key="key">{{ key }}: {{ value }}</li>
          </ul>
        </b-card>
      </template>
    </b-table>

    <b-row>
      <b-col md="6" class="my-1">
        <b-pagination :total-rows="totalRows" :per-page="perPage" v-model="currentPage" class="my-0" />
      </b-col>
    </b-row>

    <!-- Info modal -->
    <b-modal id="modalInfo" @hide="resetModal" :title="modalInfo.title" ok-only>
      <pre>{{ modalInfo.content }}</pre>
    </b-modal>

  </b-container>
</template>
<script>
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

const items = [
  { isActive: true, age: 40, img: '', name: { first: 'Dickerson', last: 'Macdonald' } },
  { isActive: false, age: 21, img: '', name: { first: 'Larsen', last: 'Shaw' } },
  { isActive: false, age: 9,  img: '', name: { first: 'Mini', last: 'Navarro' }, _rowVariant: 'info' },
  { isActive: false, age: 89, img: '', name: { first: 'Geneva', last: 'Wilson' } },
  { isActive: true, age: 38, img: '', name: { first: 'Jami', last: 'Carney' } },
  { isActive: false, age: 27, img: '', name: { first: 'Essie', last: 'Dunlap' } },
  { isActive: true, age: 40, img: '', name: { first: 'Thor', last: 'Macdonald' } },
  { isActive: true, age: 87, img: '', name: { first: 'Larsen', last: 'Shaw' }, _cellVariants: { age: 'danger', isActive: 'warning' }},
  { isActive: false, age: 26, img: '', name: { first: 'Mitzi', last: 'Navarro' } },
  { isActive: false, age: 22, img: '', name: { first: 'Genevieve', last: 'Wilson' }},
  { isActive: true, age: 38, img: '', name: { first: 'John', last: 'Carney' } },
  { isActive: false, age: 29, img: '', name: { first: 'Dick', last: 'Dunlap' } }
]

export default {
  data () {
    return {
      items: items,
      fields: [
        { key: 'img', label: 'Imagen' },
        { key: 'name', label: 'Titulo de la propiedad', sortable: true, sortDirection: 'desc' },
        { key: 'age', label: 'Datos ', sortable: true, 'class': 'text-center' },
        { key: 'isActive', label: 'is Active', sortable: true },
        { key: 'actions', label: 'Actions' }
      ],
      currentPage: 1,
      perPage: 5,
      totalRows: items.length,
      sortBy: null,
      sortDesc: false,
      sortDirection: 'asc',
      filter: null,
      create: null,
      modalInfo: { title: '', content: '' }
    }
  },
  computed: {
    sortOptions () {
      // Create an options list from our fields
      return this.fields
        .filter(f => f.sortable)
        .map(f => { return { text: f.label, value: f.key } })
    }
  },
  methods: {
    info (item, index, button) {
      this.modalInfo.title = `Row index: ${index}`
      this.modalInfo.content = JSON.stringify(item, null, 2)
      this.$root.$emit('bv::show::modal', 'modalInfo', button)
    },
    resetModal () {
      this.modalInfo.title = ''
      this.modalInfo.content = ''
    },
    onFiltered (filteredItems) {
      // Trigger pagination to update the number of buttons/pages due to filtering
      this.totalRows = filteredItems.length
      this.currentPage = 1
    }
  }
}
</script>