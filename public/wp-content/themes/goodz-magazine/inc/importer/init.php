<?php

/**
 * Inlcude importer files
 */
require_once get_template_directory() . '/inc/importer/includes/themes-kingdom-importer.php' ;

class Goodz_Theme_Demo_Data_Import extends Themes_Kingdom_Theme_Demo_Data_Importer {

	private static $instance;

	public $widget_import_results;

	public $theme_option_name = 'theme_mods_goodz';
	public $main_menu_name    = 'Primary Menu';
	public $social_menu_name  = 'Social';

	public function __construct() {

		$this->demo_files_path = dirname(__FILE__) . '/demo-files/';

		self::$instance = $this;
		parent::__construct();

	}

}

new Goodz_Theme_Demo_Data_Import;