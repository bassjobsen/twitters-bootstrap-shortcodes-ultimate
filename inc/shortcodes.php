<?php
function tbusc_add_group( $groups ) {
       $groups['twitterboostrap'] = __( 'Twitter Bootstrap 3', 'bootstrapshortcodesultimate' );
        return $groups;
}


	/**
	 * Filter to modify original shortcodes data and add custom shortcodes
	 *
	 * @param array $shortcodes Basic plugin shortcodes
	 * @return array Modified array
	 */
	function register_my_custom_shortcodes( $shortcodes ) {
        //unset($shortcodes);
		
		global $jbstshortcodes;
		foreach($jbstshortcodes as $shortcode => $values)
		{
			$jbstshortcodes[$shortcode]['group']='twitterboostrap';
			if(!isset($jbstshortcodes[$shortcode]['desc'])) $jbstshortcodes[$shortcode]['desc']='';
		}	
		
		$shortcodes = array_merge($shortcodes,$jbstshortcodes);
		
		
		// Return modified data
		
		return $shortcodes;
	}
