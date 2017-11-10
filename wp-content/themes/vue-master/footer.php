
	
	<?php wp_footer(); ?>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo('url') ?>/store-locator/libs/handlebars.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDyNBeSUduNzvgbZpfZWQltogkvJw1nqiM&region=US"></script>
    <script src="<?php bloginfo('url') ?>/store-locator/plugins/storeLocator/jquery.storelocator.js"></script>
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vue.js"></script>
<!--     <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vue-resource.js"></script> -->
		<script src="<?php bloginfo('template_url') ?>/js/axios.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vue-router.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
    
    
    <script>
	    	    jQuery('#bh-sl-map-container').storeLocator({
					'dataType': 'json',
					'dataLocation': 'data/locations.json'
				});

    </script>
</body>
</html>