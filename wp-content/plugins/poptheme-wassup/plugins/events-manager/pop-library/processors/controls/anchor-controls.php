<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_CUSTOMANCHORCONTROL_CALENDAR', PoP_TemplateIDUtils::get_template_definition('custombuttoncontrol-calendar'));
define ('GD_TEMPLATE_CUSTOMANCHORCONTROL_PASTEVENTS', PoP_TemplateIDUtils::get_template_definition('custombuttoncontrol-pastevents'));
define ('GD_TEMPLATE_CUSTOMANCHORCONTROL_AUTHORPASTEVENTS', PoP_TemplateIDUtils::get_template_definition('custombuttoncontrol-authorpastevents'));
define ('GD_TEMPLATE_CUSTOMANCHORCONTROL_TAGPASTEVENTS', PoP_TemplateIDUtils::get_template_definition('custombuttoncontrol-tagpastevents'));
define ('GD_TEMPLATE_CUSTOMANCHORCONTROL_MYPASTEVENTS', PoP_TemplateIDUtils::get_template_definition('custombuttoncontrol-mypastevents'));
define ('GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENT', PoP_TemplateIDUtils::get_template_definition('custombuttoncontrol-addevent'));
define ('GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENTLINK', PoP_TemplateIDUtils::get_template_definition('custombuttoncontrol-addeventlink'));

define ('GD_TEMPLATE_ANCHORCONTROL_TOGGLEMAP', PoP_TemplateIDUtils::get_template_definition('anchorcontrol-togglemap'));
define ('GD_TEMPLATE_ANCHORCONTROL_TOGGLEAUTHORMAP', PoP_TemplateIDUtils::get_template_definition('anchorcontrol-toggleauthormap'));
define ('GD_TEMPLATE_ANCHORCONTROL_TOGGLETAGMAP', PoP_TemplateIDUtils::get_template_definition('anchorcontrol-toggletagmap'));

class GD_EM_Template_Processor_CustomAnchorControls extends GD_Template_Processor_AnchorControlsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_CUSTOMANCHORCONTROL_CALENDAR,
			GD_TEMPLATE_CUSTOMANCHORCONTROL_PASTEVENTS,
			GD_TEMPLATE_CUSTOMANCHORCONTROL_AUTHORPASTEVENTS,
			GD_TEMPLATE_CUSTOMANCHORCONTROL_TAGPASTEVENTS,
			GD_TEMPLATE_CUSTOMANCHORCONTROL_MYPASTEVENTS,
			GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENT,
			GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENTLINK,
			GD_TEMPLATE_ANCHORCONTROL_TOGGLEMAP,
			GD_TEMPLATE_ANCHORCONTROL_TOGGLEAUTHORMAP,
			GD_TEMPLATE_ANCHORCONTROL_TOGGLETAGMAP,
		);
	}

	function get_label($template_id, $atts) {

		switch ($template_id) {

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_CALENDAR:
				
				return __('Calendar', 'poptheme-wassup');

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_PASTEVENTS:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_AUTHORPASTEVENTS:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_TAGPASTEVENTS:

				return __('Past Events', 'poptheme-wassup');

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_MYPASTEVENTS:

				return __('My Past Events', 'poptheme-wassup');

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENT:
		
				return __('Add Event', 'poptheme-wassup');

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENTLINK:
		
				return __('as Link', 'poptheme-wassup');

			case GD_TEMPLATE_ANCHORCONTROL_TOGGLEMAP:
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLEAUTHORMAP:
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLETAGMAP:

				return __('Toggle Map', 'poptheme-wassup');
		}

		return parent::get_label($template_id, $atts);
	}
	function get_fontawesome($template_id, $atts) {

		switch ($template_id) {

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_CALENDAR:
				
				return gd_navigation_menu_item(POPTHEME_WASSUP_EM_PAGE_EVENTSCALENDAR, false);

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_PASTEVENTS:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_AUTHORPASTEVENTS:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_TAGPASTEVENTS:

				return gd_navigation_menu_item(POPTHEME_WASSUP_EM_PAGE_PASTEVENTS, false);

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_MYPASTEVENTS:

				return gd_navigation_menu_item(POPTHEME_WASSUP_EM_PAGE_MYPASTEVENTS, false);
		
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENT:

				return 'fa-plus';

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENTLINK:

				return 'fa-link';
		
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLEMAP:
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLEAUTHORMAP:
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLETAGMAP:

				return 'fa-map-marker';
		}

		return parent::get_fontawesome($template_id, $atts);
	}
	function get_href($template_id, $atts) {

		$vars = GD_TemplateManager_Utils::get_vars();
		switch ($template_id) {

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_CALENDAR:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_PASTEVENTS:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_MYPASTEVENTS:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENT:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENTLINK:

				$pages = array(
					GD_TEMPLATE_CUSTOMANCHORCONTROL_CALENDAR => POPTHEME_WASSUP_EM_PAGE_EVENTSCALENDAR,
					GD_TEMPLATE_CUSTOMANCHORCONTROL_PASTEVENTS => POPTHEME_WASSUP_EM_PAGE_PASTEVENTS,
					GD_TEMPLATE_CUSTOMANCHORCONTROL_MYPASTEVENTS => POPTHEME_WASSUP_EM_PAGE_MYPASTEVENTS,
					GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENT => POPTHEME_WASSUP_EM_PAGE_ADDEVENT,
					GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENTLINK => POPTHEME_WASSUP_EM_PAGE_ADDEVENTLINK,
				);
				$page = $pages[$template_id];
				
				return get_permalink($page);
		
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_AUTHORPASTEVENTS:

				$author = $vars['global-state']['author']/*global $author*/;
				$url = get_author_posts_url($author);
				// Allow URE to add the ContentSource
				return apply_filters(
					'GD_EM_Template_Processor_CustomAnchorControls:pastevents:url',
					GD_TemplateManager_Utils::add_tab($url, POPTHEME_WASSUP_EM_PAGE_PASTEVENTS),
					$author
				);
		
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_TAGPASTEVENTS:

				$url = get_tag_link($vars['global-state']['queried-object-id']/*get_queried_object_id()*/);
				return GD_TemplateManager_Utils::add_tab($url, POPTHEME_WASSUP_EM_PAGE_PASTEVENTS);

			case GD_TEMPLATE_ANCHORCONTROL_TOGGLEMAP:
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLEAUTHORMAP:
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLETAGMAP:

				// Assume there is only one .collapse.map in this block
				return '#'.$atts['block-id'].' > .blocksection-inners .collapse.map';
		}

		return parent::get_href($template_id, $atts);
	}
	function get_target($template_id, $atts) {

		switch ($template_id) {

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENT:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENTLINK:
		
				if (PoPTheme_Wassup_Utils::get_addcontent_target() == GD_URLPARAM_TARGET_ADDONS) {
					
					return GD_URLPARAM_TARGET_ADDONS;
				}
				break;
		}

		return parent::get_target($template_id, $atts);
	}

	function get_block_jsmethod($template_id, $atts) {

		$ret = parent::get_block_jsmethod($template_id, $atts);

		switch ($template_id) {

			case GD_TEMPLATE_ANCHORCONTROL_TOGGLEMAP:
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLEAUTHORMAP:
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLETAGMAP:

				// It will add class "in" through .js if there is no cookie
				$this->add_jsmethod($ret, 'cookieToggleClass');
				break;
		}

		return $ret;
	}

	function init_atts($template_id, &$atts) {

		switch ($template_id) {

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_CALENDAR:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_PASTEVENTS:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_AUTHORPASTEVENTS:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_TAGPASTEVENTS:
			case GD_TEMPLATE_CUSTOMANCHORCONTROL_MYPASTEVENTS:

				$this->append_att($template_id, $atts, 'class', 'btn btn-link btn-compact');
				break;

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENT:

				$this->append_att($template_id, $atts, 'class', 'btn btn-primary');
				break;

			case GD_TEMPLATE_CUSTOMANCHORCONTROL_ADDEVENTLINK:

				$this->append_att($template_id, $atts, 'class', 'btn btn-info aslink');
				break;
		
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLEMAP:
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLEAUTHORMAP:
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLETAGMAP:

				$this->append_att($template_id, $atts, 'class', 'pop-togglemap-btn');
				$this->append_att($template_id, $atts, 'class', 'btn btn-default btn-sm');
				$this->merge_att($template_id, $atts, 'params', array(
					'data-toggle' => 'collapse',
				));
				// Set the params for the cookie
				$this->merge_att($template_id, $atts, 'params', array(
					'data-cookieid' => $atts['block-template-id'].'-togglemap',
					'data-cookietarget' => '#'.$atts['block-id'].' > .blocksection-inners .collapse.map',
					'data-cookiecollapse' => 'show',
					'data-togglecookiebtn' => 'self',
				));
				break;
		}

		switch ($template_id) {

			// The map is initially toggled non-visible
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLEAUTHORMAP:
			case GD_TEMPLATE_ANCHORCONTROL_TOGGLETAGMAP:

				$this->merge_att($template_id, $atts, 'params', array(
					'data-initial' => 'set',
				));
				break;
		}

		return parent::init_atts($template_id, $atts);
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_EM_Template_Processor_CustomAnchorControls();