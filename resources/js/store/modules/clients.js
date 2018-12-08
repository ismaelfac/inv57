import axios from "axios";
import listClients from '../../api/clients'


// initial state
const state = {
  properties: [],
  all: [],
  new_client: []
}

// getters
const getters = {}

// actions
const actions = {
  getAllClients ({ commit }) {
    axios.get('/api/getClients/5?page=1',{
        'Content-Type': 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
    }).then((response) => {
        commit('setClients', {
            clients: response.data
            })
    }, (err) => {
        console.log(err)
    })
  },
  postClients ({ commit }){

  }
}

// mutations
const mutations = {
  setClients (state, clients) {
    state.all = clients
    state.properties = clients['data']
  }

}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
