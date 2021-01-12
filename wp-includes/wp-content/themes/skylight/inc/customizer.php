<?php
//customizer for logo image
function logoimage($wp_customize) {
	$wp_customize->add_section('customizer_logo_image', array(
		'title' => __('Logo Customizer', 'skylight'),
		'description' => 'Change Logo for the website',
	));

	$wp_customize->add_setting('header_logo_image', array(
		'default' => '',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_image', array(
		'label' => __('Change Header Logo', 'skylight'),
		'section' => 'customizer_logo_image',
		'settings' => 'header_logo_image',
	)));
	$wp_customize->add_setting('footer_logo_image', array(
		'default' => '',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_image', array(
		'label' => __('Change Footer Logo', 'skylight'),
		'section' => 'customizer_logo_image',
		'settings' => 'footer_logo_image',
	)));
}
add_action('customize_register', 'logoimage');

//customizer for social media
function personalInformation($wp_customize) {
	$wp_customize->add_section('customizer_social_media', array(
		'title' => __('Personal Information', 'skylight'),
		'description' => 'Change Logo for the website',
	));

	$wp_customize->add_setting('email_address', array(
		'default' => '',
	));
	$wp_customize->add_control('email_address', array(
		'label' => __('Email Address', 'skylight'),
		'type' => '<input>',
		'section' => 'customizer_social_media',
		'settings' => 'email_address',
	));

	$wp_customize->add_setting('phone_number', array(
		'default' => '',
	));
	$wp_customize->add_control('phone_number', array(
		'label' => __('Phone Number', 'skylight'),
		'type' => '<input>',
		'section' => 'customizer_social_media',
		'settings' => 'phone_number',
	));

	$wp_customize->add_setting('facebook_link', array(
		'default' => '',
	));
	$wp_customize->add_control('facebook_link', array(
		'label' => __('Facebook Link', 'skylight'),
		'type' => '<input>',
		'section' => 'customizer_social_media',
		'settings' => 'facebook_link',
	));
	$wp_customize->add_setting('instagram_link', array(
		'default' => '',
	));
	$wp_customize->add_control('instagram_link', array(
		'label' => __('Instagram Link', 'skylight'),
		'type' => '<input>',
		'section' => 'customizer_social_media',
		'settings' => 'instagram_link',
	));
	$wp_customize->add_setting('linkedin_link', array(
		'default' => '',
	));
	$wp_customize->add_control('linkedin_link', array(
		'label' => __('Linkedin Link', 'skylight'),
		'type' => '<input>',
		'section' => 'customizer_social_media',
		'settings' => 'linkedin_link',
	));
	$wp_customize->add_setting('twitter_link', array(
		'default' => '',
	));
	$wp_customize->add_control('twitter_link', array(
		'label' => __('Twitter Link', 'skylight'),
		'type' => '<input>',
		'section' => 'customizer_social_media',
		'settings' => 'twitter_link',
	));

}
add_action('customize_register', 'personalInformation');

//customizer for footer information
function footerinformation($wp_customize) {
	$wp_customize->add_section('customizer_information', array(
		'title' => __('Footer Information', 'skylight'),
		'description' => 'Information of company',
	));

	$wp_customize->add_setting('company_info', array(
		'default' => '',
	));
	$wp_customize->add_control('company_info', array(
		'label' => __('Brief Information', 'skylight'),
		'type' => 'textarea',
		'section' => 'customizer_information',
		'settings' => 'company_info',
	));

}
add_action('customize_register', 'footerinformation');
