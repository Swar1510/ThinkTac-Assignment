<?php
if ( ( class_exists( 'LearnDash_Settings_Page' ) ) && ( !class_exists( 'LearnDash_Settings_Page_License' ) ) ) {
	class LearnDash_Settings_Page_License extends LearnDash_Settings_Page {

		function __construct() {
			$this->parent_menu_page_url		=	'admin.php?page=learndash_lms_settings';
			$this->menu_page_capability		=	LEARNDASH_ADMIN_CAPABILITY_CHECK;
			$this->settings_page_id 		= 	'learndash_lms_settings_license';
			$this->settings_page_title 		= 	__( 'License Settings', 'learndash' );
			$this->settings_tab_title		=	__( 'LMS License', 'learndash' );
			$this->settings_tab_priority	=	90;

			parent::__construct(); 
		}
	}
}
add_action( 'learndash_settings_pages_init', function() {
	LearnDash_Settings_Page_License::add_page_instance();
} );




