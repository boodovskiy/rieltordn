<?php get_template_part("template-parts/carousel_partners"); ?>

<!-- Start Footer -->
<footer id="footer-wrapper">

       <div id="footer" class="container">

                <div class="row">

                        <div class="span6">
                            <?php if ( ! dynamic_sidebar( 'footer-first-column' ) ) : ?>
                            <?php endif; ?>
                        </div>

                       <!-- <div class="span3">
                            <?php if ( ! dynamic_sidebar( 'footer-second-column' ) ) : ?>
                            <?php endif; ?>
                        </div>-->

                        <div class="clearfix visible-tablet"></div>

                        <div class="span3">
                            <?php if ( ! dynamic_sidebar( 'footer-third-column' ) ) : ?>
                            <?php endif; ?>
                        </div>

                        <div class="span3">
                            <?php if ( ! dynamic_sidebar( 'footer-fourth-column' ) ) : ?>
                            <?php endif; ?>
                        </div>
                </div>

       </div>

        <!-- Footer Bottom -->
        <div id="footer-bottom" class="container">

                <div class="row">
                        <div class="span6">
                            <?php
                            $copyright_text = get_option( 'theme_copyright_text' );
                            echo ( $copyright_text ) ? '<p class="copyright">' . $copyright_text . '</p>' : '';
                            ?>
                        </div>
                        <div class="span6">
                            <?php
                            $designed_by_text = get_option( 'theme_designed_by_text' );
                            echo ( $designed_by_text ) ? '<p class="designed-by">' . $designed_by_text . '</p>' : '';
                            ?>
                        </div>
                </div>

        </div>
        <!-- End Footer Bottom -->

</footer><!-- End Footer -->

<?php
/**
 * include modal login if login & register page URL is not configured
 */
if ( ! is_user_logged_in() ) {
	$theme_login_url = inspiry_get_login_register_url();
	if ( empty( $theme_login_url ) && ( ! is_page_template( 'template-login.php' ) ) ) {
		get_template_part( 'template-parts/modal-login' );
	}
}

/**
 * Display link to previous and next entry
 */
 inspiry_post_nav();

?>

<a href="#top" id="scroll-top"><i class="fa fa-chevron-up"></i></a>

<?php wp_footer(); ?>

<script type="text/javascript">(function(w,doc) {
if (!w.__utlWdgt ) {
    w.__utlWdgt = true;
    var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
}})(window,document);
</script>
<div data-background-alpha="0.0" data-buttons-color="#FFFFFF" data-counter-background-color="#ffffff" data-share-counter-size="12" data-top-button="false" data-share-counter-type="disable" data-share-style="1" data-mode="share" data-like-text-enable="false" data-mobile-view="true" data-icon-color="#ffffff" data-orientation="fixed-right" data-text-color="#000000" data-share-shape="rectangle" data-sn-ids="fb.vk.tw.ok.gp.mr." data-share-size="30" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.vb.mr." data-pid="1447722" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="false" data-selection-enable="true" class="uptolike-buttons" ></div>


</body>
</html>