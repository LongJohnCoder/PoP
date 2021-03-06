<?php
/*
Plugin Name: PoP CDN for Core Processors
Description: Implementation of the CDN for the Core Processors plugin for PoP
Plugin URI: https://getpop.org
Version: 1.0
Author: Leonardo Losoviz
Author URI: https://getpop.org/en/u/leo/
*/

//-------------------------------------------------------------------------------------
// Constants Definition
//-------------------------------------------------------------------------------------
define ('POP_CDNCORE_VERSION', 0.156);
define ('POP_CDNCORE_DIR', dirname(__FILE__));
define ('POP_CDNCORE_ASSETS_DIR', POP_CDNCORE_DIR.'/kernel/cdn/assets');

class PoP_CDNCore {

	function __construct() {

		// Priority: after PoP Core Processors loaded
		add_action('plugins_loaded', array($this,'init'), 35);
		add_action('PoP:system-generate', array($this,'system_generate'));
	}
	function init(){

		define ('POP_CDNCORE_URL', plugins_url('', __FILE__));

		define ('POP_CDNCORE_ASSETDESTINATION_DIR', POP_CONTENT_DIR.'/cdn');
		define ('POP_CDNCORE_ASSETDESTINATION_URL', POP_CONTENT_URL.'/cdn');

		if ($this->validate()) {
			
			$this->initialize();
			define('POP_CDNCORE_INITIALIZED', true);
		}
	}
	function validate(){
		
		require_once 'validation.php';
		$validation = new PoP_CDNCore_Validation();
		return $validation->validate();	
	}
	function system_generate(){

		require_once 'installation.php';
		$installation = new PoP_CDNCore_Installation();
		return $installation->system_generate();	
	}	
	function initialize(){

		require_once 'initialization.php';
		global $PoP_CDNCore_Initialization;
		return $PoP_CDNCore_Initialization->initialize();	
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new PoP_CDNCore();
