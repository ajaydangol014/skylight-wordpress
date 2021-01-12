<?php
//customizer for logo image
function logoimage($wp_customize) {
	$wp_customize->add_section('customizer_logo_image', array(
		'title' => __('Logo Customizer', 'pivot'),
		'description' => 'Change Logo for the website',
	));

	$wp_customize->add_setting('header_logo_image', array(
		'default' => '',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_image', array(
		'label' => __('Change Header Logo', 'pivot'),
		'section' => 'customizer_logo_image',
		'settings' => 'header_logo_image',
	)));
	$wp_customize->add_setting('footer_logo_image', array(
		'default' => '',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_image', array(
		'label' => __('Change Footer Logo', 'pivot'),
		'section' => 'customizer_logo_image',
		'settings' => 'footer_logo_image',
	)));
}
add_action('customize_register', 'logoimage');

//customizer for social media
function socialmedia($wp_customize) {
	$wp_customize->add_section('customizer_social_media', array(
		'title' => __('Social Media Link', 'pivot'),
		'description' => 'Change Logo for the website',
	));

	$wp_customize->add_setting('facebook_link', array(
		'default' => '',
	));
	$wp_customize->add_control('facebook_link', array(
		'label' => __('Facebook Link', 'pivot'),
		'type' => '<input>',
		'section' => 'customizer_social_media',
		'settings' => 'facebook_link',
	));
	$wp_customize->add_setting('instagram_link', array(
		'default' => '',
	));
	$wp_customize->add_control('instagram_link', array(
		'label' => __('Instagram Link', 'pivot'),
		'type' => '<input>',
		'section' => 'customizer_social_media',
		'settings' => 'instagram_link',
	));
	$wp_customize->add_setting('linkedin_link', array(
		'default' => '',
	));
	$wp_customize->add_control('linkedin_link', array(
		'label' => __('Linkedin Link', 'pivot'),
		'type' => '<input>',
		'section' => 'customizer_social_media',
		'settings' => 'linkedin_link',
	));
	$wp_customize->add_setting('twitter_link', array(
		'default' => '',
	));
	$wp_customize->add_control('twitter_link', array(
		'label' => __('Twitter Link', 'pivot'),
		'type' => '<input>',
		'section' => 'customizer_social_media',
		'settings' => 'twitter_link',
	));

}
add_action('customize_register', 'socialmedia');

//customizer for footer information
function footerinformation($wp_customize) {
	$wp_customize->add_section('customizer_information', array(
		'title' => __('Footer Information', 'pivot'),
		'description' => 'Change Logo for the website',
	));

	$wp_customize->add_setting('address', array(
		'default' => '',
	));
	$wp_customize->add_control('address', array(
		'label' => __('Address', 'pivot'),
		'type' => '<input>',
		'section' => 'customizer_information',
		'settings' => 'address',
	));
	$wp_customize->add_setting('phone', array(
		'default' => '',
	));
	$wp_customize->add_control('phone', array(
		'label' => __('Phone', 'pivot'),
		'type' => '<input>',
		'section' => 'customizer_information',
		'settings' => 'phone',
	));
	$wp_customize->add_setting('fax', array(
		'default' => '',
	));
	$wp_customize->add_control('fax', array(
		'label' => __('Fax', 'pivot'),
		'type' => '<input>',
		'section' => 'customizer_information',
		'settings' => 'fax',
	));
	$wp_customize->add_setting('email', array(
		'default' => '',
	));
	$wp_customize->add_control('email', array(
		'label' => __('E-mail', 'pivot'),
		'type' => '<input>',
		'section' => 'customizer_information',
		'settings' => 'email',
	));

}
add_action('customize_register', 'footerinformation');
