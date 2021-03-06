<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

class GD_Template_Processor_EventDateAndTimeLayoutsBase extends GD_Template_ProcessorBase {

	function get_template_source($template_id, $atts) {
	
		return GD_TEMPLATESOURCE_LAYOUTEVENT_TABLECOL;
	}

	function get_data_fields($template_id, $atts) {
	
		return array('dates', 'times');
	}	
}
