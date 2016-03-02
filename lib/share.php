<?php

namespace Roots\Sage\Share;

function after_paragraph( $insertion, $paragraph_id, $content ){
	$closing_p		= '</p>';
	$paragraphs		= explode( $closing_p, $content );

	foreach ($paragraphs as $index => $paragraph) {

		if (trim( $paragraph )) {
			$paragraphs[$index]		.= $closing_p;
		}

		if ($paragraph_id == $index + 1) {
			$paragraphs[$index] 	.= $insertion;
		}

	}

	return implode( '', $paragraphs );
}

/**
 *
 * Add image before the_content() if is_single()
 * 
 * @uses @is_single()
 *
 */
function insert_share( $content ){
	$share = '<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a>';
	$share .= '<div id="fb-root"></div>';
	$share .= '<div class="fb-like" data-send="false" data-layout="button_count" data-width="1" data-show-faces="false" data-action="recommend"></div>';

	if (is_single()) {
		return after_paragraph( $share, 2, $content );
	}

	return $content;
}

add_action( 'the_content', __NAMESPACE__ . '\\insert_share', 20);