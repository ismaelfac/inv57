import axios from "axios";

/**
 * Mocking client-server processing
 */


export default {
    getClients(){
        return axios.get('api/getClients/1?page=1');
    }
}