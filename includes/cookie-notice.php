<?php if ( scn_get_option('cookie_notice_enabled') == 'on' ) { ?>
    <footer id="cookie-notice" style="background-color: <?php echo scn_get_option('cookie_notice_bg_color') ?: '#000000' ?>; color: <?php echo scn_get_option('cookie_notice_text_color') ?: '#FFFFFF' ?>">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <?php echo wpautop(scn_get_option('cookie_notice_text') ?: 'Please configure this text in your admin panel under Tools > Cookie Notice') ?>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <a class="btn btn-<?php echo (scn_get_option('cookie_notice_btn_policy_color')) ?> btn-block" href="<?php echo scn_get_option('cookie_notice_btn_policy_link') ?: '/privacy-policy' ?>"><?php echo (scn_get_option('cookie_notice_btn_policy_text')) ?: 'View policy' ?></a>
                    <a class="btn btn-<?php echo (scn_get_option('cookie_notice_btn_accept_color')) ?> btn-block" id="cookie-notice-accept"><?php echo (scn_get_option('cookie_notice_btn_accept_text')) ?: 'Accept' ?></a>
                </div>
            </div>
        </div>
    </footer>
<?php }; ?>
