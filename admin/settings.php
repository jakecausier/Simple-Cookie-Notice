<?php

add_action( 'cmb2_admin_init', 'scn_cookie_notice_settings_metabox' );
function scn_cookie_notice_settings_metabox()
{

	$cmb_options = new_cmb2_box( array(
		'id'           => 'scn_settings_metabox',
		'title'        => esc_html__( 'Simple Cookie Notice Options', 'scn' ),
		'object_types' => array( 'options-page' ),
		'option_key'      => 'scn_options',
		'menu_title'      => esc_html__( 'Cookie Notice', 'scn' ),
		'parent_slug'     => 'tools.php',
		'capability'      => 'manage_options',
	) );

        $cmb_options->add_field( array(
            'name' => 'Cookie Notice',
            'type' => 'title',
            'id'   => 'cookie_notice_title_init'
        ) );

            $cmb_options->add_field( array(
                'name' => __( 'Enable Cookie Notice?', 'scn' ),
                'desc' => __( 'Enables the cookie notice appearing on your website.', 'scn' ),
                'id'   => 'cookie_notice_enabled',
                'type' => 'checkbox',
            ) );

        $cmb_options->add_field( array(
            'name' => 'Content',
            'desc' => 'Change the content of your cookie notice.',
            'type' => 'title',
            'id'   => 'cookie_notice_title_content'
        ) );

            $cmb_options->add_field( array(
                'name'    => __( 'Cookie Notice Message', 'scn' ),
                'desc'    => __( 'Change the message of the cookie notice.', 'scn' ),
                'id'      => 'cookie_notice_text',
                'type'    => 'wysiwyg',
                'options' => array(
            	    'wpautop' => true,
            	    'media_buttons' => false,
                ),
            ) );

            $cmb_options->add_field( array(
                'name'    => __( 'Accept Button Label', 'scn' ),
                'desc'    => __( 'Change the label on the button to accept the message.', 'scn' ),
                'id'      => 'cookie_notice_btn_accept_text',
                'type'    => 'text',
            ) );

            $cmb_options->add_field( array(
                'name'    => __( 'Policy Document Button Label', 'scn' ),
                'desc'    => __( 'Change the label on the button to go to your policy documents.', 'scn' ),
                'id'      => 'cookie_notice_btn_policy_text',
                'type'    => 'text',
            ) );

            $cmb_options->add_field( array(
                'name'    => __( 'Policy Document Button Link', 'scn' ),
                'desc'    => __( 'Please provide a valid URL to your policy page or document.', 'scn' ),
                'id'      => 'cookie_notice_btn_policy_link',
                'type'    => 'text_url',
            ) );

            $cmb_options->add_field( array(
                'name' => __( 'Wrap content in container?', 'scn' ),
                'desc' => __( '<p>When enabled, content will be wrapped in a container as not to touch the edges of the screen. Useful to avoid conflicts with elements that attach to the screen edge.</p>', 'scn' ),
                'id'   => 'cookie_notice_use_container',
                'type' => 'checkbox',
            ) );

        $cmb_options->add_field( array(
        	'name' => 'Style',
        	'desc' => 'Change these settings to match your site theme.',
        	'type' => 'title',
        	'id'   => 'cookie_notice_title_style'
        ) );

            $cmb_options->add_field( array(
                'name' => __( 'Banner Background Color', 'scn' ),
                'desc' => __( 'Set the background color of the notice. Default is black.', 'scn' ),
                'id'   => 'cookie_notice_bg_color',
                'type'    => 'colorpicker',
                'default' => '#000000',
                'options' => array(
                	'alpha' => true,
                ),
            ) );

            $cmb_options->add_field( array(
                'name' => __( 'Content Text Color', 'scn' ),
                'desc' => __( 'Set the text color of the notice. Default is white.', 'scn' ),
                'id'   => 'cookie_notice_text_color',
                'type'    => 'colorpicker',
                'default' => '#FFFFFF',
                'options' => array(
                	'alpha' => true,
                ),
            ) );

}

/**
 *  Wrapper function around cmb2_get_option
 *
 *  @since  0.1.0
 *  @param  string $key     Options array key
 *  @param  mixed  $default Optional default value
 *  @return mixed           Option value
 */
function scn_get_option( $key = '', $default = false )
{
    if ( function_exists( 'cmb2_get_option' ) ) {
        return cmb2_get_option( 'scn_options', $key, $default );
    }
    $opts = get_option( 'scn_options', $default );
    $val = $default;
    if ( 'all' == $key ) {
        $val = $opts;
    } elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
        $val = $opts[ $key ];
    }
    return $val;
}
