<?php get_header(); ?>


<div id="app">

<!--
	<div v-for="post in posts">
		{{ post.title.rendered }}
		{{{ post.content.rendered }}}		
		<div class="item" v-for="field in post.acf.repeater">
			{{field.text}}<br>
			<img :src="field.image.sizes.thumbnail"/>
		</div>
	</div>
-->
	
<!--
	<template id="post-list-template">

	<div v-for="post in posts">
		
		{{ post.title.rendered }}
		
		{{{ post.content.rendered }}}		
		<div class="item" v-for="field in post.acf.repeater">
			{{field.text}}<br>
			<img :src="field.image.sizes.thumbnail"/>
			<router-link :to="{ name: 'post', params: { id: post.id }}">
                    Read More
      </router-link>
		</div>
		
	</div>


</template>
-->

 <post-list>
 <div v-for="post in posts"  :key="item.id">
		
		{{ post.title.rendered }}
		
		{{{ post.content.rendered }}}		
		<div class="item" v-for="field in post.acf.repeater">
			{{field.text}}<br>
			<img :src="field.image.sizes.thumbnail"/>
			<router-link :to="{ name: 'post', params: { id: post.id }}">
                    Read More
      </router-link>
		</div>
		
	</div>
 </post-list> 

</div>







<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


<?php get_footer(); ?>