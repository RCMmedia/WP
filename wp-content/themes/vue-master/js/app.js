//show homepage content
var home = Vue.component('home-page', {
    template: '#home-template'
});

//show list of posts
var postLists = Vue.component('post-list', {
		template: '#post-list-template',
    data: function () {
        return {
            posts:[],
        }
    },
    created: function(){
        axios.get('/WP-VUE-STARTER/wp-json/wp/v2/posts').then(response => this.posts = response.data);
    }
});

//show single post
var post = Vue.component('post', {
	template: '#post-single-template',
	data: function () {
    return {
      loading: false,
      post: null,
      error: null
    }
  },
  	created: function(){
  			axios.get('/WP-VUE-STARTER/wp-json/wp/v2/posts/' + this.$route.params.postID).then(response => this.post = response.data);
  	}
});

//show homepage content
var locationfinder = Vue.component('location-finder', {
    template: '#location-finder-wrap',
    created: function(){
	    jQuery('#bh-sl-map-container').storeLocator({
					'dataType': 'json',
					'dataLocation': 'data/locations.json'
				});
    }
});

//router
var router = new VueRouter({
    routes: [
        { path: '/', component: home },
        { path: '/posts', component: postLists },
        { path: '/posts/:postID', name: 'post', component: post },
        { path: '/locations', name: 'location', component: locationfinder },
    ]
});

new Vue({
    el: '#app',
    router: router,
    created: function(){
	    $('body').addClass('fadein');
    }

});