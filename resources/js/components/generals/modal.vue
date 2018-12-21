<template>
    <modal 
        ref="modal_inv" 
        :need-header="modalInfo.is_header" 
        :need-footer="modalInfo.is_footer"
        :size="'large'" 
        :opened="openModal">
                <div slot="title">
                    {{ modalInfo.title }}
                </div>
                <div slot="body">
                    {{ modalInfo.content }}
                </div>
                <div slot="footer">
                    {{ modalInfo.footer}}
                </div>
    </modal>
</template>
<script>
export default {
    components: {
        'modal': require('vue2-bootstrap-modal')
    },
    props:['modalInfo'],
    created() {
        console.log(this.modalInfo)
        this.$refs.modal_inv.open()
      
    },
    methods: {
        openModal() {
            this.$refs.modal_inv.open()
        },
        resetModal () {
            this.modalInfo.title = ''
            this.modalInfo.content = ''
        }
    }
}
</script>

