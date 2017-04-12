<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('WASSUP_CHECKPOINT_LOGGEDIN_SYSTEMACCESSVALID', 'checkpoint-loggedin-systemaccessvalid');

class PoPTheme_Wassup_PoPSystem_SettingsProcessor_CheckpointUtils {

	public static function get_checkpoint($hierarchy, $name) {

		$ret = array();

		if ($hierarchy == GD_SETTINGS_HIERARCHY_PAGE) {

			// Validate by both private key and client's IP
			$loggedin_systemaccesvalid = array(
				'checkpoints' => array(
					POP_SYSTEM_DATALOAD_CHECKPOINT_SYSTEMACCESSKEYVALID,
					POP_SYSTEM_DATALOAD_CHECKPOINT_SYSTEMACCESSIPVALID,
				),
				'type' => GD_DATALOAD_VALIDATECHECKPOINTS_TYPE_DATAFROMSERVER
			);

			switch ($name) {

				case WASSUP_CHECKPOINT_LOGGEDIN_SYSTEMACCESSVALID:
					$checkpoint = $loggedin_systemaccesvalid;
					break;
			}
		}

		// If there is no checkpoint, then $name failed to find it, which is a bug, so raise an exception
		if (!$checkpoint) {
			throw new Exception(sprintf('No checkpoint found with hierarchy \'%s\' and name \'%s\' (%s)', $hierarchy, $name, full_url()));
		}

		return $checkpoint;
	}
}