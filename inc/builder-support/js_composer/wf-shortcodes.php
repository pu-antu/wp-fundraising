<?php

if (class_exists ( 'WPBakeryShortCode' )) {

    if (is_plugin_active('js_composer/js_composer.php')) {

        /*
         * VC MAPPING FILE
         * */
        require_once WP_FUNDRAISING_DIR_PATH . 'inc/builder-support/js_composer/vc-maping/wf-vc-mapping.php';
        add_action('vc_before_init', 'WF_VC_Mapping::wf_vc_map');

        include_once WP_FUNDRAISING_DIR_PATH . 'inc/builder-support/js_composer/shortcodes/wf-campaigns.php';
        add_shortcode('wf_vc_campaigns', 'wf_vc_campaigns');

        include_once WP_FUNDRAISING_DIR_PATH . 'inc/builder-support/js_composer/shortcodes/wf-campaign-submit-form.php';
        add_shortcode('wf_vc_campaign_submit_form', 'wf_vc_campaign_submit_form');

        include_once WP_FUNDRAISING_DIR_PATH . 'inc/builder-support/js_composer/shortcodes/wf-login-btn.php';
        add_shortcode('wf_vc_login_btn', 'wf_vc_login_btn');

        include_once WP_FUNDRAISING_DIR_PATH . 'inc/builder-support/js_composer/shortcodes/wf-donate-form.php';
        add_shortcode('wf_vc_login_btn', 'wf_vc_donate_form');

        include_once WP_FUNDRAISING_DIR_PATH . 'inc/builder-support/js_composer/shortcodes/wf-donate-btn.php';
        add_shortcode('wf_vc_login_btn', 'wf_vc_donate_btn');

        include_once WP_FUNDRAISING_DIR_PATH . 'inc/builder-support/js_composer/shortcodes/wf-dashboard.php';
        add_shortcode('wf_vc_dashboard', 'wf_vc_dashboard');

    }
}