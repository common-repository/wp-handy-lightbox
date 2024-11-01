<?php 
if(!defined('ULFBEN_DONATE_URL')){
	define('ULFBEN_DONATE_URL', 'http://www.amazon.com/gp/registry/wishlist/2QB6SQ5XX2U0N/105-3209188-5640446?reveal=unpurchased&filter=all&sort=priority&layout=standard&x=21&y=17');
}
$plugin_title = 'Handy Lightbox';
$plugin_changelog = 'http://wordpress.org/extend/plugins/wp-handy-lightbox/changelog/';	
$plugin_forum = '';
$flattr_profile = '';
$flattr_api = '';
$wishlist = ULFBEN_DONATE_URL;
$author_site = 'http://handylightbox.webs.com/';
$author_profile = 'http://profiles.wordpress.org/users/handymartyn/';
?>
<script type="text/javascript">
(function() {
	var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
	s.type = 'text/javascript';
	s.async = true;
	s.src = '<?php echo $flattr_api; ?>';
	t.parentNode.insertBefore(s, t);
})();
</script>
<style type="text/css">
	#about{ float: right; width:350px; background: #ffc; border: 1px solid #333; padding: 5px; text-align: justify; font-family:verdana; font-size:11px; }
	div#about h3 {text-align:center;}
	.field_info {text-align:right;};
</style>
<?php echo "<div id='about'> 
	<h3>From the author</h3> 				
	<p>My name is <a href='{$author_site}'>Handy Martyn</a> and I've developed Handy Lightbox <a href='{$plugin_changelog}'>since 2010</a>. Nice to meet you! :)<p>
	<p style='text-align:center;'>
	<p>//<a href='$author_site'>Handy Martyn</a></p>								
	<hr />
	</ol> 				
</div>"; 
?>