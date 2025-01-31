=== Lightbox ===
Contributors: hansenmartin
Donate link: http://handylightbox.webs.com
Tags: lightbox, jquery, nodal, display, ajax, gallery, image, images, photo, photos, picture, image, images, plugin, post, posts, pages, light box, overlay, video, album, galleries, colorbox, javascript, lightbox popup, display, java
Requires at least: 3.5.1
Tested up to: 3.5.1
Stable tag: 1.4.5
License: GPLv2 or later

A drop-in replacement for Lightbox 2 and similar plugins, shedding the bulk of Prototype and Scriptaculous. Improved for mobile devices.

== Description ==

This plugin lets you keep [the awesome Lightbox 2](http://www.huddletogether.com/projects/lightbox2/)-functionality, but sheds the bulk of the Prototype Framework **and** Scriptaculous Effects Library.

Warren Krewenki [ported Lightbox to jQuery](http://warren.mesozen.com/jquery-lightbox/) and this plugin is mostly a wrapper to his work: providing localization support, an admin panel for configuration, (optional) auto-boxing of your image links and support for [WordPress galleries](http://codex.wordpress.org/Gallery_Shortcode), *including* [media library](http://codex.wordpress.org/Media_Library_SubPanel) titles and captions. 

* Swipe gestures for flicking between images on touch devices
* Improved scaling *maximizes* use of screen space
* Live adjustment to the browser window and orientation of your phone
* Optional download link to display images in native app.

You can browse images with your keyboard: Arrows, P(revious)/N(ext) and X/C/ESC for close.

= 1.4.5 (2013-06-09) =
* Fit to screen edge on low rez displays (<500px)
* Added global setting to hide title & caption
* Reduced the amount of code running for each image shown
* Fix: swipe direction
* Fix: slideshow now waits for images to display before starting timer.
* Fix: support for latest jQuery
* Fix: WordPress encoding wrong quote mark in captions, causing duplicate texts to display.


= 1.4.1 (2013-02-03) =
* Added swipe gestures on touch devices
* Added slideshow 
* Fix regexp to deal with urls like www.gif.org. (Thanks Yannick Berker!)
* Fix changed common IDs to avoid collisions. (you'll have to update your CSS now!) (Hat tip; Pollmann Frederic)
* Fix better support of Infinite Scroll and similar

= 1.3 (2011-05-01) =
* Improved scaling to *maximize* display area.
* Supports orientation / resize changes - Lightbox reflows with site. 
* Added option to display download link.
* Added support for disabling all animations (set duration to 0).
* Fixed "duration" not having an effect.


== Installation ==

1. Upload the `wp-handy-lightbox`-folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Check out the jQuery Lightbox-panel in your admin interface for usage details and configuration.

= How to Use: =
1. With [WordPress built-in gallery](http://codex.wordpress.org/Gallery_Shortcode): [`[gallery link="file"]`](http://codex.wordpress.org/Gallery_Shortcode)	
1. All galleries in a post make a single slideshow. To create separate slideshows, use `group`: 

	`[gallery link="file" ids="1,2,3" group="mon"]`
	
	`[gallery link="file" ids="4,5,6" group="tue"]`

1. You can manually add a `rel="lightbox"` attribute to any link:

	`<a href="image-1.jpg" rel="lightbox" title="my caption">image #1</a>`

	Note the use of title-attribute to set a caption
		
1. To manually group sets of related images, follow step 3 but additionally include a group name in the `rel` attribute:
	
	`<a href="image-1.jpg" rel="lightbox[roadtrip]">image #1</a>`
	
	`<a href="image-2.jpg" rel="lightbox[roadtrip]">image #2</a>`
	
	`<a href="image-3.jpg" rel="lightbox[roadtrip]">image #3</a>`

1. You can use the `data-download` attribute to set a custom download link:
	
	`<a href="image-medium.jpg" rel="lightbox" data-download="image-superlarge.jpg"> [...] </a>`
	
1. To *disable* lightboxing of an image link, just set any other rel-attribute: `rel="nobox"`
	
1. Keyboard support: Arrows, P(revious)/N(ext) and X/C/ESC for close. Swipe left / right on touch devices.

1. [Infinite-Scroll](http://wordpress.org/extend/plugins/infinite-scroll/) and similar "endless pages"-plugins should call `doLightbox();` whenever it loads new content. Check your plugin for a setting 
	named "callbacks" - code that is called after each new page is loaded. Add this line;
	`if(typeof doLightBox !== 'undefined' && typeof jQuery !== 'undefined'){
	   doLightBox();
	}`

1. On the server side you can apply lightbox to any content by running `jqlb_apply_lightbox($your_html_content, "any ID");` It returns a string with all image links lightboxed, grouped by `"any id"`.

= Trouble shooting: =
If you have problems with Handy Lightbox, please make sure you try these steps before asking for help. If you ask for help and I find any of these steps would fix the problem, I will just link you back here to do the work yourself.

1. Make sure your site is not throwing any javascript errors. Use [your browsers javascript console](http://webmasters.stackexchange.com/questions/8525/how-to-open-the-javascript-console-in-different-browsers) to find out.

If you're running a custom theme:

1. Make sure you have [`wp_head();`](http://codex.wordpress.org/Function_Reference/wp_head) just before the closing `</head>` tag of your theme, or you will break many plugins, which generally use this hook to reference JavaScript files. 

1. For the same reason, always have `wp_footer();` just before the closing `</body>` tag of your theme.

1. Many JavaScript optimizers, combiners, minifiers, etc. conflict with [`wp_localize_script`](http://codex.wordpress.org/Function_Reference/wp_localize_script2), used to configure this plugin and many others.

* If you have problems with jQuery Lightbox; first disable all JavaScript-optimizing plugins. (Optimize Scripts, W3 Total Cache, WP Minify etc)

* If you develop JavaScript optimizers for WordPress, please play nice with the default API...

Lastly:

1. Disable all other plugins, one at a time. Try the lightbox between each.

1. Revert to the default theme. Did it help? Fix your theme.

1. Search the forums for similar symptoms. 

Still have problems? Post a link and describe what issue you're having, and tell us what of these steps you've already tried.

== Changelog ==
= 1.4.5 (2013-06-09) =
* Fit to screen edge on low rez displays (<500px)
* Added global setting to hide title & caption
* Reduced the amount of code running for each image shown
* Fix: swipe direction
* Fix: slideshow now waits for images to display before starting timer.
* Fix: support for latest jQuery
* Fix: WordPress encoding wrong quote mark in captions, causing duplicate texts to display.


= 1.4.1 (2013-02-03) =
* Added swipe gestures on touch devices
* Added slideshow 
* Added support to pick text from the image ALT-attribute (if title is not available) 

= 1.3.4.2 (2011-02-01) =
* Fallbacks for people using older jQuery

= 1.3.4.1 (2011-01-31) =
* Updated deprecated jQuery calls (thanks; David Naber)

= 1.3.2 (2011-05-16) =
* Added support for auto-lightboxing comments too
* Added Russian and Czech translations (incl. images). Thanks again Denis!

= 1.3.1 (2011-05-02) =
* Forgot to include languages files! :)

= 1.3 (2011-05-01) =
* Improved scaling to make maximum use of display area.
* Supports orientation / resize changes - Lightbox reflows with site. 
* Added option to display download link.
* Added support for disabling all animations (set duration to 0).
* Fixed "duration" not having an effect.

= 1.2.2 (2011-04-14) =
* Use WordPress bundled jQuery instead of forcing the Google CDN
* Fixed the settings link on the Plugins page

= 1.2.1 (2010-10-24) =
* Removed a forgotten debug call

= 1.2 (2010-10-12) = 
* Added support for Media Library titles and captions.
* Minified the javascript (8.6KB vs 17.8KB)
* Minified the CSS (2.0KB vs 2.7KB)

= 1.1 (2010-10-09) = 
* Honors empty captions. 
* Fixed typos on admin page.

= 1.0 (2010-04-11) = 
* Release.

== Upgrade Notice ==
= 1.4.5 (2013-06-09) =
Support latest jQuery. Better use of small screen estate, fixed buggy features (slideshow, swipes) and reduced system load. 

= 1.4.1 =
Swipe gestures, slideshow, sets and lots of fixes. Check your config screen after update!

= 1.3.4.1 (2011-01-31) =
Updated deprecated jQuery calls (thanks; David Naber)

= 1.3.4 =
Lots of fixes, translations and support for the Admin Bar and Twentyeleven theme.

= 1.3.3 =
Fixes for Internet Explorer. Added Japanese translation.

= 1.3.2 =
Support for auto-lightboxing comments. Added Polish, Russian and Czech languages.

= 1.3.1 =
Added missing files from previous release... Also: mobile support, larger display area. 

= 1.3 =
Enables larger viewing area, improved mobile experience and translations.

= 1.2.2 =
Use WordPress bundled jQuery instead of forcing the Google CDN

= 1.2.1 =
Removed forgotten debug call. Important upgrade!

= 1.2 =
Support caption and titles from the Media Library

= 1.1 =
Honors empty captions and fixes some typos.

= 1.0 =
First release.

== Screenshots ==

1. A post gallery on Android.
2. Lightbox displayed in landscape mode. Image info and 'close' is always visible, download link is optional. Click left/right side of image to navigate the set.
3. Lightbox, with device rotated. Image remains centered and as wide as possible.

== Frequently Asked Questions ==

= Trouble shooting: =
If you have problems with Handy Lightbox, please make sure you try these steps before asking for help. If you ask for help and I find any of these steps would fix the problem, I will just link you back here to do the work yourself.

1. Make sure your site is not throwing any javascript errors. Use [your browsers javascript console](http://webmasters.stackexchange.com/questions/8525/how-to-open-the-javascript-console-in-different-browsers) to find out.

If you're running a custom theme:

1. Make sure you have [`wp_head();`](http://codex.wordpress.org/Function_Reference/wp_head) just before the closing `</head>` tag of your theme, or you will break many plugins, which generally use this hook to reference JavaScript files. 

1. For the same reason, always have `wp_footer();` just before the closing `</body>` tag of your theme.

1. Many JavaScript optimizers, combiners, minifiers, etc. conflict with [`wp_localize_script`](http://codex.wordpress.org/Function_Reference/wp_localize_script2), used to configure this plugin and many others.

* If you have problems with jQuery Lightbox; first disable all JavaScript-optimizing plugins. (Optimize Scripts, W3 Total Cache, WP Minify etc)

* If you develop JavaScript optimizers for WordPress, please play nice with the default API...

* [More info about this issue](http://wordpress.org/support/topic/122-worked-13-does-not-work-for-me?replies=19)

Lastly:

1. Disable all other plugins, one at a time. Try the lightbox between each.

1. Revert to the default theme. Did it help? Fix your theme.

1. Search the forums for similar symptoms. 

Still have problems? Post a link and describe what issue you're having, and tell us what of these steps you've already tried.

= Can the lightbox display the image description instead of the title? =
Handy Lightbox grabs texts from three different HTML nodes;

1. `title`-attribute of link-to-image
1. `img` tag's `title` attribute (if 1 is empty)
1. `img` tag's `alt` attribute (if 1 and 2 is empty)
1. HTML content of `.gallery-caption` or `.wp-caption-text` (in that order)

Look at how the default TwentyTwelve theme uses these in its galleries and set up your theme so it outputs what you need in these places.

= I can see elements of my site through the overlay = 

It's a problem of [z-index](http://www.w3schools.com/Css/pr_pos_z-index.asp). Check [the z-index property](http://www.w3schools.com/Css/pr_pos_z-index.asp) for the problematic elements, and force them to be less than 100. (Thanks [dway](http://wordpress.org/support/topic/plugin-wp-handy-lightbox-title-captions-bug-found-solved-and-fix-proposed?replies=20#post-2052340)!)

= How do I add images to a post? =

[Inserting Images into Posts and Pages](http://codex.wordpress.org/Inserting_Images_into_Posts_and_Pages)

= How do I create a thumbnail gallery? =

Upload images to a post (see previous question) and use [WordPress' built-in gallery shortcode](http://codex.wordpress.org/Gallery_Shortcode): `[gallery link="file"]`

Note the `link="file"` - this is crucial! By default the gallery will link your humbnails to a page displaying your image. With `link="file"` the thumbnails links 
directly to the image files - allowing Lightbox to function.

= Must fade-in and animation of all *box-scripts be so slow? =

WP-jQuery Lightbox lets you configure the animation duration and disable image resizing from the admin panel. Set duration to 0 to disable animations entirely.

= For developers: =
1. Always have `wp_footer();` just before the closing `</body>` tag of your theme, or you will break many plugins, which generally use this hook to reference JavaScript files. 
1. Apply lightbox to any content by running `jqlb_apply_lightbox($your_content, "any ID");` It returns a string with all image links lightboxed, grouped by `"any id"`.
1. Many JavaScript optimizers, combiners, minifiers, etc. conflict with [`wp_localize_script`](http://codex.wordpress.org/Function_Reference/wp_localize_script2), used to configure this plugin and many others.

* If you have problems with jQuery Lightbox; first disable all JavaScript-optimizing plugins. (Optimize Scripts, W3 Total Cache, WP Minify etc)
* If you develop JavaScript optimizers for WordPress, please play nice with the default API...
* [More info about this issue](http://wordpress.org/support/topic/122-worked-13-does-not-work-for-me?replies=19)

= Can I help you in any way? =

Indeed you can! 

Translations and help with implementing them would be nice. A read through and comments on my WordPress API usage would also be most welcome, as I'm not really able to keep on top of the frequent WordPress releases anymore.

== Other Notes ==
Copyright (C) 2010-2013 Handy Martyn (hansentmartin@mail.com).

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA