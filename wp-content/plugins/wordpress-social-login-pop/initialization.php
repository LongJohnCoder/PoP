<?php
class WSL_PoP_Initialization {

	function initialize(){

		load_plugin_textdomain('wsl-pop', false, dirname(plugin_basename(__FILE__)).'/languages');

		/**---------------------------------------------------------------------------------------------------------------
		 * Plugins
		 * ---------------------------------------------------------------------------------------------------------------*/
		require_once 'plugins/load.php';

		/**---------------------------------------------------------------------------------------------------------------
		 * Library
		 * ---------------------------------------------------------------------------------------------------------------*/
		require_once 'library/load.php';
	}
}