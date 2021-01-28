<footer id="cookie-notice" style="background-color: <?php echo scn_get_option('cookie_notice_bg_color') ?: '#000000' ?>; color: <?php echo scn_get_option('cookie_notice_text_color') ?: '#FFFFFF' ?>">
    <?php if ( scn_get_option( 'cookie_notice_use_container' ) ) : ?>
        <div class="scn-wrapper-container">
    <?php endif; ?>
    <div class="scn-container">
        <div class="scn-notice">
            <?php echo wpautop(scn_get_option('cookie_notice_text') ?: 'Please configure this text in your admin panel under Tools > Cookie Notice') ?>
        </div>
        <div class="scn-buttons">
            <a class="scn-btn" target="_blank" href="<?php echo scn_get_option('cookie_notice_btn_policy_link') ?: '/' ?>"><?php echo (scn_get_option('cookie_notice_btn_policy_text')) ?: 'View Policy' ?></a>
            <a class="scn-btn" type="button" id="cookie-notice-accept"><?php echo (scn_get_option('cookie_notice_btn_accept_text')) ?: 'Accept' ?></a>
        </div>
    </div>
     <?php if ( scn_get_option( 'cookie_notice_use_container' ) ) : ?>
        </div>
    <?php endif; ?>
</footer>
