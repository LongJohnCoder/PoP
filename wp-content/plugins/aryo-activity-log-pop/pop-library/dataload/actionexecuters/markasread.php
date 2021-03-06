<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Data Load Library
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_DATALOAD_ACTIONEXECUTER_NOTIFICATION_MARKASREAD', 'notification-markasread');

class GD_DataLoad_ActionExecuter_NotificationMarkAsRead extends GD_DataLoad_ActionExecuter {

	function get_name() {

		return GD_DATALOAD_ACTIONEXECUTER_NOTIFICATION_MARKASREAD;
	}

	function execute(&$block_data_settings, $block_atts, &$block_execution_bag) {

		global $gd_notification_markasread;
		$errors = array();
		$hist_ids = /*$target_id = */$gd_notification_markasread->execute($errors, $block_atts);

		if ($errors) {

			return array(
				GD_DATALOAD_IOHANDLER_FORM_ERRORSTRINGS => $errors
			);
		}
		
		$block_execution_bag['dataset'] = $hist_ids; //array($target_id);

		// No errors => success
		return array(
			GD_DATALOAD_IOHANDLER_FORM_SUCCESS => true
		);			
	}
}
	
/**---------------------------------------------------------------------------------------------------------------
 * Initialize
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_DataLoad_ActionExecuter_NotificationMarkAsRead();