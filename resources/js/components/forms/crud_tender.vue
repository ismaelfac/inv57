<template>
    <form @submit.prevent="createTender">
        <div class="row">
            <div class="col-md-12 mt-10">
                <div class="input-group input-group-sm">
                    <div class="find-home-item">
                        <div class="price_filter">
                            <div class="input-group" >
                                <span class="input-group-addon" id="basic-addon1" style="width: 50%"><img src="images/icons/4.png" alt=""> Valor Actual <b>$ {{ price_admon }}</b></span>
                                <span class="input-group-addon" id="basic-addon1" style="width: 20%"><img src="images/icons/4.png" alt=""> dOferto</span>
                                <span class="input-group-addon" id="basic-addon1" style="width: 30%">
                                <vueSlider ref="slider" :formatter="tender.admon.formatter" v-model="tender.admon.value" :max="tender.admon.max" :lazy="true">
                                </vueSlider></span>
                                <input class="form-control" type="label" v-model="tender.admon.value" style="background: rgba(31, 34, 62, 0.8) none repeat scroll 0 0; width: 500%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>
<script>
import VueNumeric from 'vue-numeric'
import vueSlider from 'vue-slider-component'
export default {
    components:{
        VueNumeric,
        'vueSlider': vueSlider
    },
    data(){
        return{
            price_admon: '950000',
            tender:{
                admon: {
                    value: 800000,
                    min: 0,
                    max: 100000000,
                    width: "100%",
                    formatter: "$ {value}"
                }
            }
        }
    }
}
</script>
