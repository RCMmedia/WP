<?php get_header(); ?>


<div id="app">



<post-list inline-template>
	<div class="post-list-wrap">
	 <div class="single-post" v-for="post in posts">
			<div>{{ post.title.rendered }}</div>
			<div class="repeater-item" v-for="field in post.acf.repeater">
				{{field.text}}<br>
				<img :src="field.image.sizes.thumbnail"/>
			</div><!-- repeater-item -->
			<router-link :to="{ name: 'post', params: { id: post.id }}">
                    Read More
      </router-link>
		</div><!-- single-post -->
	</div><!-- post-list-wrap -->
</post-list>



</div><!-- app -->







<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


<?php get_footer(); ?>