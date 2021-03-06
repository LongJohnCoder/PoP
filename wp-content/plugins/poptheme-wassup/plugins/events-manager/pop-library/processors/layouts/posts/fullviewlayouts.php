<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Configuration
 *
 * ---------------------------------------------------------------------------------------------------------------*/

// define ('GD_TEMPLATE_LAYOUT_SIMPLEVIEW_EVENT', PoP_TemplateIDUtils::get_template_definition('layout-simpleview-event'));
// define ('GD_TEMPLATE_LAYOUT_SIMPLEVIEW_PASTEVENT', PoP_TemplateIDUtils::get_template_definition('layout-simpleview-pastevent'));
// define ('GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_EVENT', PoP_TemplateIDUtils::get_template_definition('authorlayout-simpleview-event'));
// define ('GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_PASTEVENT', PoP_TemplateIDUtils::get_template_definition('authorlayout-simpleview-pastevent'));
// define ('GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_EVENT', PoP_TemplateIDUtils::get_template_definition('singlelayout-simpleview-event'));
// define ('GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_PASTEVENT', PoP_TemplateIDUtils::get_template_definition('singlelayout-simpleview-pastevent'));

define ('GD_TEMPLATE_LAYOUT_FULLVIEW_EVENT', PoP_TemplateIDUtils::get_template_definition('layout-fullview-event'));
define ('GD_TEMPLATE_LAYOUT_FULLVIEW_PASTEVENT', PoP_TemplateIDUtils::get_template_definition('layout-fullview-pastevent'));
define ('GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_EVENT', PoP_TemplateIDUtils::get_template_definition('authorlayout-fullview-event'));
define ('GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_PASTEVENT', PoP_TemplateIDUtils::get_template_definition('authorlayout-fullview-pastevent'));
define ('GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_EVENT', PoP_TemplateIDUtils::get_template_definition('singlelayout-fullview-event'));
define ('GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_PASTEVENT', PoP_TemplateIDUtils::get_template_definition('singlelayout-fullview-pastevent'));

class GD_EM_Template_Processor_CustomFullViewLayouts extends GD_Template_Processor_CustomFullViewLayoutsBase {

	function get_templates_to_process() {
	
		return array(
			// GD_TEMPLATE_LAYOUT_SIMPLEVIEW_EVENT,
			// GD_TEMPLATE_LAYOUT_SIMPLEVIEW_PASTEVENT,
			// GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_EVENT,
			// GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_PASTEVENT,
			// GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_EVENT,
			// GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_PASTEVENT,
			GD_TEMPLATE_LAYOUT_FULLVIEW_EVENT,
			GD_TEMPLATE_LAYOUT_FULLVIEW_PASTEVENT,			
			GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_EVENT,
			GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_PASTEVENT,			
			GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_EVENT,
			GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_PASTEVENT,
		);
	}

	function get_footer_templates($template_id) {

		$ret = parent::get_footer_templates($template_id);

		switch ($template_id) {

			// case GD_TEMPLATE_LAYOUT_SIMPLEVIEW_EVENT:
			// case GD_TEMPLATE_LAYOUT_SIMPLEVIEW_PASTEVENT:
			// case GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_EVENT:
			// case GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_PASTEVENT:
			// case GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_EVENT:
			// case GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_PASTEVENT:

			// 	$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_POSTCONCLUSIONSIDEBAR_HORIZONTAL;
			// 	$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_USERPOSTINTERACTION;
			// 	$ret[] = GD_TEMPLATE_CODEWRAPPER_LAZYLOADINGSPINNER;
			// 	$ret[] = GD_TEMPLATE_LAZYSUBCOMPONENT_HIGHLIGHTREFERENCEDBY_SIMPLEVIEW;
			// 	$ret[] = GD_TEMPLATE_LAZYSUBCOMPONENT_REFERENCEDBY_SIMPLEVIEW;
			// 	$ret[] = GD_TEMPLATE_LAZYSUBCOMPONENT_POSTCOMMENTS;
			// 	break;

			case GD_TEMPLATE_LAYOUT_FULLVIEW_EVENT:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_PASTEVENT:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_EVENT:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_PASTEVENT:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_EVENT:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_PASTEVENT:

				$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_POSTCONCLUSIONSIDEBAR_HORIZONTAL;
				$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_USERPOSTINTERACTION;
				$ret[] = GD_TEMPLATE_CODEWRAPPER_LAZYLOADINGSPINNER;
				$ret[] = GD_TEMPLATE_LAZYSUBCOMPONENT_HIGHLIGHTREFERENCEDBY_FULLVIEW;
				$ret[] = GD_TEMPLATE_LAZYSUBCOMPONENT_REFERENCEDBY_FULLVIEW;
				$ret[] = GD_TEMPLATE_LAZYSUBCOMPONENT_POSTCOMMENTS;
				break;
		}

		return $ret;
	}

	function get_sidebar_template($template_id) {

		switch ($template_id) {

			// case GD_TEMPLATE_LAYOUT_SIMPLEVIEW_EVENT:
			// case GD_TEMPLATE_LAYOUT_SIMPLEVIEW_PASTEVENT:
			// case GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_EVENT:
			// case GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_PASTEVENT:
			// case GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_EVENT:
			// case GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_PASTEVENT:

			case GD_TEMPLATE_LAYOUT_FULLVIEW_EVENT:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_PASTEVENT:
			
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_EVENT:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_PASTEVENT:
			
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_EVENT:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_PASTEVENT:

				$sidebars = array(
					// GD_TEMPLATE_LAYOUT_SIMPLEVIEW_EVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_EVENT,
					// GD_TEMPLATE_LAYOUT_SIMPLEVIEW_PASTEVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_PASTEVENT,
					
					// GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_EVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_EVENT,
					// GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_PASTEVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_PASTEVENT,
					
					// GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_EVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_EVENT,
					// GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_PASTEVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_PASTEVENT,

					GD_TEMPLATE_LAYOUT_FULLVIEW_EVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_EVENT,
					GD_TEMPLATE_LAYOUT_FULLVIEW_PASTEVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_PASTEVENT,
					
					GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_EVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_EVENT,
					GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_PASTEVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_PASTEVENT,
					
					GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_EVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_EVENT,
					GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_PASTEVENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_PASTEVENT,
				);

				return $sidebars[$template_id];
		}

		return parent::get_sidebar_template($template_id);
	}

	function init_atts($template_id, &$atts) {

		switch ($template_id) {

			// case GD_TEMPLATE_LAYOUT_SIMPLEVIEW_EVENT:
			// case GD_TEMPLATE_LAYOUT_SIMPLEVIEW_PASTEVENT:
			// case GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_EVENT:
			// case GD_TEMPLATE_AUTHORLAYOUT_SIMPLEVIEW_PASTEVENT:
			// case GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_EVENT:
			// case GD_TEMPLATE_SINGLELAYOUT_SIMPLEVIEW_PASTEVENT:

			// 	$this->merge_att(GD_TEMPLATE_LAZYSUBCOMPONENT_HIGHLIGHTREFERENCEDBY_SIMPLEVIEW, $atts, 'previoustemplates-ids', array(
			// 		'data-lazyloadingspinner-target' => GD_TEMPLATE_CODEWRAPPER_LAZYLOADINGSPINNER,
			// 	));
			// 	break;
		
			case GD_TEMPLATE_LAYOUT_FULLVIEW_EVENT:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_PASTEVENT:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_EVENT:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_PASTEVENT:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_EVENT:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_PASTEVENT:

				$this->merge_att(GD_TEMPLATE_LAZYSUBCOMPONENT_HIGHLIGHTREFERENCEDBY_FULLVIEW, $atts, 'previoustemplates-ids', array(
					'data-lazyloadingspinner-target' => GD_TEMPLATE_CODEWRAPPER_LAZYLOADINGSPINNER,
				));
				// $this->add_att(GD_TEMPLATE_CONTENTLAYOUT_HIGHLIGHTREFERENCEDBY_APPENDABLE, $atts, 'show-lazyloading-spinner', true);
				break;
		}
			
		return parent::init_atts($template_id, $atts);
	}
}


/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_EM_Template_Processor_CustomFullViewLayouts();