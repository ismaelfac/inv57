<template>
    <div class="pro-details-big-image">
        <multiple-file-uploader 
            postURL="#" 
            successMessagePath="" 
            errorMessagePath="" 
            @upload-success='success_handler'
            headerMessage="Agregar Inmuebles"
            dropAreaPrimaryMessage="Puedes agregar varias imagenes"
            dropAreaSecondaryMessage="Soltanto y Arrastrando"
            fileNameMessage="Nombre del Archivo"
            fileSizeMessage="Tamaño del archivo"
            totalFileMessage="Total Archivos"
            totalUploadSizeMessage="Total Tamaños de Imagenes"
            uploadButtonMessage="Cargar"
            cancelButtonMessage="Cancelar"
            removeFileMessage="Remover Imagen">
        </multiple-file-uploader>
    </div>        
</template>
<script>
import MultipleFileUploader from '@updivision/vue2-multi-uploader'
    export default {
        components: {
            MultipleFileUploader
        },
        methods: {
            success_handler() {
                alert("Imagenes Cargadas");
            }
        }
    }  
</script>
