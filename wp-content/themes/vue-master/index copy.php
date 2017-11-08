<?php get_header(); ?>

    <div class="white-wrap">
        <div id="app">

            <router-view></router-view>

        </div>
    </div>

<template id="post-list-template">

	<div v-for="post in posts">
		
		{{ post.title.rendered }}
		
		{{{ post.content.rendered }}}		
		<div class="item" v-for="field in post.acf.repeater">
			{{field.text}}<br>
			<img :src="field.image.sizes.thumbnail"/>
		</div>
		
	</div>


</template>



<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


<?php get_footer(); ?>