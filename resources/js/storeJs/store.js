import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)
const store = new Vuex.Store({
    state: {
        articles: []
    },
    getter:{
        getArticles(state){
            return state.articles
        }
    },
    actions:{
        ajaxArticles(context){
            axios
                .get("/articles")
                .then(response =>{
                    console.log(response.data.articles)
                    context.commit('setArticles', response.data.articles)
                })
                .catch(error => {
                    console.log("Errors", error)
                })
        }
    },
    mutations: {
        setArticles(state,data){
            return state.articles= data
        }
    }
})
export default store;
