<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main><!-- #main -->

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->
<div class="support-online">
<div class="support-content">
<a href="tel:0966073113" class="call-now" rel="nofollow">
<i class="fa fa-whatsapp" aria-hidden="true"></i>
<div class="animated infinite zoomIn kenit-alo-circle"></div>
<div class="animated infinite pulse kenit-alo-circle-fill"></div>
<span>Hotline: 0966.073.113</span>
</a>
<a class="mes" href="https://m.me/cophanhungthinh">
<i class="fa fa-facebook-official" aria-hidden="true"></i>
<span>Nhắn tin facebook</span>
</a>
<a class="zalo" href="http://zalo.me/0966073113">
<i class="fa fa-comments"></i>
<span>Zalo: 0966.073.113</span>
</a>
<a class="sms" href="sms:0966073113">
<i class="fa fa-weixin" aria-hidden="true"></i>
<span>SMS: 0966.073.113</span>
</a>
</div>
<a class="btn-support">
<div class="animated infinite zoomIn kenit-alo-circle"></div>
<div class="animated infinite pulse kenit-alo-circle-fill"></div>
<i class="fa fa-user-circle" aria-hidden="true"></i>
</a>
</div>
<?php wp_footer(); ?>

</body>
<script>
jQuery(document).ready(function(){
jQuery('.support-content').hide();
jQuery('a.btn-support').click(function(e){
e.stopPropagation();
jQuery('.support-content').slideToggle();
});
jQuery('.support-content').click(function(e){
e.stopPropagation();
});
jQuery(document).click(function(){
jQuery('.support-content').slideUp();
});
});
</script>
</html>