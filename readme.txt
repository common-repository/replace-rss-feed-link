=== Plugin Name ===
Contributors: d23engel
Tags: rss, link, external, internal, feed, tweak
Requires at least: 2.0.2
Tested up to: 3.0.1
Stable tag: 1.0

Changes a post's link in the RSS feed when you add a custom field called 'url' in a post. If a custom field called 'url' is not present on a post, the link will be the post's permalink. 

== Description ==

Changes a post's link in the RSS feed when you add a custom field called 'url' in a post. If a custom field called 'url' is not present on a post, the link will be the post's permalink. 

Helpful when using Wordpress to distribute RSS feeds that link to external pages. 

Adapted from Dan Philibin's tutorial at http://wpcandy.com/articles/tutorials/change-a-posts-rss-permalink-using-custom-fields.html

== Installation ==

1. Upload `replace-rss-feed-link-1.0.0.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place a custom field called 'url' in the posts where you'd like an external link to replace the link to the post.
4. Access your RSS feed with feed=rss (not rss2) for best results when syndicating with services like ping.fm or Mailchimp.

== Frequently Asked Questions ==

= Does this replace the 'Continue Reading' link that's automatically added to RSS articles over a certain char limit? =

That link will still be there. Keep your articles under the character limit for now to prevent the link from appearing. We are investigating how to modify WP to not add the 'Continue Reading' link.

= How do I mask the user interface of my blog so people can't see it? I only want to use WordPress to author RSS feeds =

You can download the following .htaccess file and add it to the root directory for your WP installation. (http://links.engeljournal.com/eoaaz)

== Screenshots ==


== Changelog ==

= 1.0 =
* First version
