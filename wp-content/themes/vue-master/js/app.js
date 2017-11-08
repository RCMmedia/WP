

Vue.component('post-list', {
    data: function () {
        return {
            posts:[],
        }
    },
    created: function(){
        axios.get('/WP-VUE-STARTER/wp-json/wp/v2/posts').then(response => this.posts = response.data);
    }
});




var app = new Vue({ 
	el: '#app' 
});
