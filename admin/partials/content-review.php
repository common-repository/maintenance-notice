<?php
/**
 * Content for review section in admin area.
 *
 * @package Maintenance Notice
 * @since 1.0.0
 * 
 */
?>
<div id="cvmn-review" style="display:none">
    <h2 class="cvmn-admin-title">
        <?php esc_html_e( 'Give a review & motivate us', 'maintenance-notice' ); ?>
    </h2>
    <div class="cvmn-admin-img">
        <img src="<?php echo esc_url( plugins_url( 'includes/assets/images/review-img.jpg', dirname(__DIR__) ) ); ?>">
    </div>
    <h2><?php esc_html_e( 'Send us your Feedback', 'maintenance-notice' ); ?></h2>
    <div class="cvmn-admin-fields">
        <p>
            <?php esc_html_e( "Please let us know about your experience with Maintenance Notice so far. We love to hear positive things but we're also thankful for the negatives. Your feedback will alert us to problems and help us improve our Maintenance Notice.
            Are you happy with us? Would you mind taking a moment to leave us a rating? It will only take a minute. We look forward to receiving feedback from you to make Maintenance Notice even more useful for you and others. !", 'maintenance-notice' ); ?>
        </p>

        <?php echo sprintf( /* translators: %1$s: a tag with link, %2$s: a tag end */ esc_html__( 'Leave a review %1$s here %2$s and', 'maintenance-notice' ), '<a href="'.esc_url( 'https://wordpress.org/support/plugin/maintenance-notice/reviews/?filter=5' ).'">', '</a>' ); ?>
        <em class="cvmn-note"><?php esc_html_e( 'Thanks for choosing Maintenance Notice', 'maintenance-notice' ); ?></em>
    </div>
</div><!-- .cvmn-review -->