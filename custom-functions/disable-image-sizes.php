<?php
// disable generated image sizes using an anonymous function
add_action('intermediate_image_sizes_advanced', function ($sizes) {

	/* unset($sizes['thumbnail']); // disable thumbnail size
	unset($sizes['medium']); // disable medium size
	unset($sizes['large']); // disable large size */
	unset($sizes['medium_large']); // disable medium-large size
	unset($sizes['1536x1536']); // disable 2x medium-large size
	unset($sizes['2048x2048']); // disable 2x large size

	return $sizes;

}); // <-- Note the semicolon here

// disable scaled image size (this part was already using a standard WP function)
add_filter('big_image_size_threshold', '__return_false');
