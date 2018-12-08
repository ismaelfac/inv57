<template>
  <div>
    <ul>
        <li v-for="client in clients" :key="client.id">
        {{ client.last_name }} - {{ client.dni }}
        </li>
    </ul>
    {{ clients }}
  </div>
</template>
<script>
import { mapState, mapActions } from 'vuex'
export default {
    computed: mapState({
        clients: state => state.clients.all
    }),
    created () {
        this.$store.dispatch('clients/getAllClients')
    }
}
</script>
