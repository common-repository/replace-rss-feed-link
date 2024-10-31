<?php
/**
 * @package Replace RSS Feed Link
 * @version 1.0
 */
/*
Plugin Name: Replace RSS Feed Link
Plugin URI: http://www.engeljournal.com/tools/word-press-plugin-replace-rss-feed-link/
Description: Changes a post's link in the RSS feed when you add a custom field called 'url' in a post. If a custom field called 'url' is not present on a post, the link will be the post's permalink. Helpful when using Wordpress to distribute RSS feeds that link to external pages. Adapted from Dan Philibin's tutorial at http://wpcandy.com/articles/tutorials/change-a-posts-rss-permalink-using-custom-fields.html
Author: David Engel
Version: 1.0
Author URI: http://www.engeljournal.com
*/

function mp_permalink($permalink) {
	global $wp_query;
	if($url = get_post_meta($wp_query->post->ID, 'url', true)) {
		return $url;
	}
	return $permalink;
}
add_filter('the_permalink_rss', 'mp_permalink');
?>
