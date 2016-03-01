<?php

namespace Roots\Sage\Share;

/**
 *
 * Add image before the_content() if is_single()
 * 
 * @uses @is_single
 *
 */


function share ( $content ){
	if (is_single()) {
		$content = sprintf(
            '<img class="post-icon" src="%s/dist/images/pic1.jpg" />%s',
            get_bloginfo( 'stylesheet_directory' ),
            $content
        );
	}
	return $content;
}

add_action( 'the_content', __NAMESPACE__ . '\\share', 20);