<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Data Load Library
 *
 * ---------------------------------------------------------------------------------------------------------------*/

class GD_NotificationMarkAsUnread extends GD_NotificationMarkAsReadUnread {

	
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialize
 * ---------------------------------------------------------------------------------------------------------------*/
global $gd_notification_markasunread;
$gd_notification_markasunread = new GD_NotificationMarkAsUnread();