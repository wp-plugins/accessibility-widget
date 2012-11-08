<?php
/*
Plugin Name: Accessibility Widget
Plugin URI: http://webgrrrl.net/archives/accessibility-widget-revived.htm
Description: Adds a sidebar widget to enlarge text size in your WP site. Originally created by Tane of Digital Spaghetti (http://www.tripcastradio.com/) and revived by Lorna of WebGrrrl.net.
Author: Lorna Timbah
Version: 1.0
Author URI: http://webgrrrl.net
*/

// Put functions into one big function we'll call at the plugins_loaded
// action. This ensures that all required plugin functions are defined.
function widget_accesstxt_init() {

	// Check for the required plugin functions. This will prevent fatal
	// errors occurring when you deactivate the dynamic-sidebar plugin.
	if ( !function_exists('register_sidebar_widget') )
		return;

	// This is the function that outputs our accessibility widget
	function widget_accesstxt($args) {
		
		// $args is an array of strings that help widgets to conform to
		// the active theme: before_widget, before_title, after_widget,
		// and after_title are the array keys. Default tags: li and h2.
		extract($args);

		// Each widget can store its own options. We keep strings here.
		$title = "Accessibility Widget";

		// These lines generate our output. Widgets can be very complex
		// but as you can see here, they can also be very, very simple.
		echo $before_widget . $before_title . $title . $after_title;
            ?>
		<script type="text/javascript">
		//Specify affected tags. Add or remove from list:
		var tgs = new Array('div','td','tr','h3','h4');

		//Specify spectrum of different font sizes:
		var szs = new Array( '90%','100%','110%','120%' );
		var startSz = 2;

		function ts( trgt,inc ) {
			if (!document.getElementById) return
			var d = document,cEl = null,sz = startSz,i,j,cTags;
	
			sz = inc;
			if ( sz < 0 ) sz = 0;
			if ( sz > 6 ) sz = 6;
			startSz = sz;
		
			if ( !( cEl = d.getElementById( trgt ) ) ) cEl = d.getElementsByTagName( trgt )[ 0 ];

			cEl.style.fontSize = szs[ sz ];

			for ( i = 0 ; i < tgs.length ; i++ ) {
				cTags = cEl.getElementsByTagName( tgs[ i ] );
				for ( j = 0 ; j < cTags.length ; j++ ) cTags[ j ].style.fontSize = szs[ sz ];
			}
		}
		</script>

		<li><a href="javascript:ts('body',0)" style="font-size:x-small">A</a>&nbsp;&nbsp;<a href="javascript:ts('body',1)" style="font-size:small">A</a>&nbsp;&nbsp;<a href="javascript:ts('body',2)" style="font-size:medium">A</a>&nbsp;&nbsp;<a href="javascript:ts('body',3)" style="font-size:large">A</a></li>

            <?php
		echo $after_widget;
	}

	
	// This registers our widget so it appears with the other available
	// widgets and can be dragged and dropped into any active sidebars.
	register_sidebar_widget(array('Adjust Text Size', 'widgets'), 'widget_accesstxt');
}

// Run our code later in case this loads prior to any required plugins.
add_action('widgets_init', 'widget_accesstxt_init');

?>