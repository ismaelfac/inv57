<template>
  <div>
    <b-form inline class="mb-1">
      <label class="sr-only" for="code">Codigo</label>
      <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="code" placeholder="No Modificable"/>
      <label class="sr-only" for="property_type">Tipo</label>
      <b-input-group left="@" class="mb-2 mr-sm-2 mb-sm-0">
        <b-form-select
          id="property_type"
          v-model="selected"
          :options="options_property_type"
          size="sm"
        />
      </b-input-group>
      <label class="sr-only" for="state_property">Estado</label>
      <b-input-group left="@" class="mb-2 mr-sm-2 mb-sm-0">
        <b-form-select
          id="state_property"
          v-model="selected"
          :options="options_state_property"
          size="sm"
        />
      </b-input-group>
      <label class="sr-only" for="state_property">Estado</label>
      <b-input-group left="@" class="mb-2 mr-sm-2 mb-sm-0">
        <b-form-select id="state_property" v-model="selected" :options="options" size="sm"/>
      </b-input-group>
    </b-form>
    <b-form inline class="mb-1">
      <label class="sr-only" for="registration">Matricula</label>
      <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="registration" placeholder="Matricula"/>
      <label class="sr-only" for="property_type">Tipo</label>
      <b-input-group left="@" class="mb-2 mr-sm-2 mb-sm-0">
        <b-form-select id="property_type" v-model="selected" :options="options" size="sm"/>
      </b-input-group>
    </b-form>
    <b-form inline class="mb-1">
      <div class="col-md-6">
        <b-carousel
          id="carousel1"
          style="text-shadow: 1px 1px 2px #333;"
          controls
          indicators
          background="#ababab"
          :interval="4000"
          img-width="200"
          img-height="180"
          v-model="slide"
          @sliding-start="onSlideStart"
          @sliding-end="onSlideEnd"
        >
          <!-- Text slides with image -->
          <b-carousel-slide
            caption="First slide"
            text="Nulla vitae elit libero, a pharetra augue mollis interdum."
            img-src="https://picsum.photos/1024/480/?image=52"
          ></b-carousel-slide>
          <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=54"></b-carousel-slide>
          <!-- Slides with image only -->
          <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=58"></b-carousel-slide>
        </b-carousel>
      </div>
      <div class="col-md-6">
        <div class="col-md-12 mb-1">
          <template v-if="1">
            <b-form inline class="mb-1">
              <div class="col-md-4">
                <label class="sr-only" for="code">Cannon</label>
                <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="area" placeholder="Cannon."/>
              </div>
              <div class="col-md-4">
                <label class="sr-only" for="code">Admon.</label>
                <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="area_lote" placeholder="Admon"/>
              </div>
              <div class="col-md-4">
                <label class="sr-only" for="code">Total.</label>
                <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="year" placeholder="Total"/>
              </div>
            </b-form>
          </template>
          <template v-else>
            <b-button-group size="sm">
              <b-button variant="success">
                <img src="images/icons/4.png" alt>
                <span>200</span>
              </b-button>
              <b-button variant="success">
                <img src="images/icons/5.png" alt>
                <span>2</span>
              </b-button>
              <b-button variant="success">
                <img src="images/icons/6.png" alt>
                <span>1</span>
              </b-button>
              <b-button variant="success">
                <img src="images/icons/13.png" alt>
                <span>0</span>
              </b-button>
            </b-button-group>
          </template>
        </div>
        <div class="col-md-12 mb-1">
          <b-form inline class="mb-1">
            <div class="col-md-4">
              <label class="sr-only" for="code">Area Cons.</label>
              <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="area" placeholder="Area Cons."/>
            </div>
            <div class="col-md-4">
              <label class="sr-only" for="code">Area Lote.</label>
              <b-input
                class="mb-2 mr-sm-2 mb-sm-0"
                size="sm"
                id="area_lote"
                placeholder="Area Lote."
              />
            </div>
            <div class="col-md-4">
              <label class="sr-only" for="code">Año.</label>
              <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="year" placeholder="Año"/>
            </div>
          </b-form>
          <b-form inline class="mb-1">
            <div class="col-md-4">
              <label class="sr-only" for="code">Cannon</label>
              <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="area" placeholder="Cannon."/>
            </div>
            <div class="col-md-4">
              <label class="sr-only" for="code">Admon.</label>
              <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="area_lote" placeholder="Admon"/>
            </div>
            <div class="col-md-4">
              <label class="sr-only" for="code">Total.</label>
              <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="year" placeholder="Total"/>
            </div>
          </b-form>
          <b-form inline class="mb-1">
            <div class="col-md-6">
              <label class="sr-only" for="code">Venta.</label>
              <b-input class="mr-sm-2 mb-sm-0" size="sm" id="area" placeholder="Venta"/>
            </div>
            <div class="col-md-6">
              <label class="sr-only" for="code">Comisión.</label>
              <b-input class="mr-sm-2 mb-sm-0" size="sm" id="area_lote" placeholder="Comision."/>
            </div>
          </b-form>
          <b-form inline class="mb-1">
            <div class="col-md-4">
              <label class="sr-only" for="code">Area Cons.</label>
              <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="area" placeholder="Area Cons."/>
            </div>
            <div class="col-md-4">
              <label class="sr-only" for="code">Area Lote.</label>
              <b-input
                class="mb-2 mr-sm-2 mb-sm-0"
                size="sm"
                id="area_lote"
                placeholder="Area Lote."
              />
            </div>
            <div class="col-md-4">
              <label class="sr-only" for="code">Año.</label>
              <b-input class="mb-2 mr-sm-2 mb-sm-0" size="sm" id="year" placeholder="Año"/>
            </div>
          </b-form>
        </div>
      </div>
    </b-form>
    <b-form class="mb-1">
      <b-form-textarea id="textarea1" v-model="text" placeholder="Observaciones Internas" :rows="2"></b-form-textarea>
    </b-form>
  </div>
</template>
<script>
export default {
  data() {
    return {
      selected: null,
      options_property_type: [
        { value: null, text: "Tipo de propiedad" },
        { value: "a", text: "This is First option" },
        { value: "b", text: "Selected Option" },
        { value: { C: "3PO" }, text: "This is an option with object value" },
        { value: "d", text: "This one is disabled", disabled: true }
      ],
      options_state_property: [
        { value: null, text: "Estado de la propiedad" },
        { value: "a", text: "This is First option" },
        { value: "b", text: "Selected Option" },
        { value: { C: "3PO" }, text: "This is an option with object value" },
        { value: "d", text: "This one is disabled", disabled: true }
      ]
    };
  },
  props: ["property_id"],
  methods: {
    getProperty(property_id) {
      console.log("entro infobasica" + property_id);
    }
  }
};
</script>
