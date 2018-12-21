<template>
    <form-wizard :title="form.title.default"
                :subtitle="form.subtitle.default"
                :nextButtonText="form.nextButtonText.default"
                :backButtonText="form.backButtonText.default"
                :finishButtonText="form.finishButtonText.default"
                :shape="form.shape.default"
                :color="form.color.default"
                :stepSize="form.stepSize.default">
        <tab-content :title="tab.title.default">
            My first tab content
        </tab-content>
        <tab-content title="Additional Info">
            My second tab content
        </tab-content>
        <tab-content title="Last step">
            Yuhuuu! This seems pretty damn simple
        </tab-content>
    </form-wizard>
</template>
<script>
import {FormWizard, TabContent} from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
export default {
    components: {
        FormWizard,
        TabContent
    },
    data() {
        return{
            form:{
                title: {
                    type: String,
                    default: 'Publicar un Inmueble'
                },
                subtitle: {
                    type: String,
                    default: 'Publique su inmueble con nosotros, y obtenga grandes beneficios'
                },
                nextButtonText: {
                    type: String,
                    default: 'Siguiente'
                },
                backButtonText: {
                    type: String,
                    default: 'Atras'
                },
                finishButtonText: {
                    type: String,
                    default: 'Finalizar'
                },
                stepSize: {
                    type: String,
                    default: 'xs',
                        validator: (value) => {
                        let acceptedValues = ['xs', 'sm', 'md', 'lg']
                        return acceptedValues.indexOf(value) !== -1
                        }
                },
                /***
                 *  Sets validation (on/off) for back button. By default back button ignores validation
                 */
                validateOnBack: Boolean,
                /***
                 * Applies to text, border and circle
                 */
                color: {
                    type: String,
                    default: '#95c41f' //circle, border and text color
                },
                /***
                 *  Is set to current step and text when beforeChange function fails 
                 */
                errorColor: {
                    type: String,
                    default: '#8b0000'
                },
                /**
                 * Can take one of the following values: 'circle|square|tab'
                 */
                shape: {
                    type: String,
                    default: 'circle'
                },
                /**
                 * name of the transition when transition between steps
                 */
                transition: {
                    type: String,
                    default: '' //name of the transition when transition between steps
                },
                /***
                 * Index of the initial tab to display
                 */
                startIndex: {
                    type: Number,
                    default: 0
                }
            },
            tab:{
                title: {
                    type: String,
                    default: 'Información General'
                },
                /***
                 * Icon name for the upper circle corresponding to the tab
                 * Supports themify icons only for now.
                 */
                icon: {
                    type: String,
                    default: ''
                },
                /***
                 * Function to execute before tab switch. Return value must be boolean
                 * If the return result is false, tab switch is restricted
                 */
                beforeChange: {
                    type: Function
                }
            }
        }
    }
}
</script>
