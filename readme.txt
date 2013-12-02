=== Accessibility Widget ===
Contributors: webgrrrl
Tags: accessibility, widget, widgets, formatting, css, style, text, wcag
Requires at least: 3.0.1
Tested up to: 3.7.1
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a sidebar widget to change text size in your WP site. Future feature: change colour contrast.

== Installation ==

= Automatic installation =
1. In your WordPress dashboard, select Plugins / Add.
1. Search for Accessibility Widget, and select Install.
1. Go to Appearances / Widgets.
1. Drag the Accessibility Widget to your widget area and select Save.

= Manual installation =
1. Upload `accessibilitywidget.php` to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Place `<?php do_action('widget_accesstxt'); ?>` in your templates.

== Frequently Asked Questions ==

= How do I use this plugin? =

Follow the Installation instructions. For widgetized WordPress themes, as of version 1.1, you can set HTML or CSS tags that you want to resize, and the font sizes you want to use.

Resize the following HTML/CSS tags: 
Specify all the HTML or CSS tags you want to resize in this section. By default, the HTML tag body is set.
Different WordPress theme may have different and unique stylesheet classes and IDs. You can switch on your browser’s built-in Developer Tools and use the Inspect Element option to detect what HTML/CSS codes to use.

Set to these sizes: 
This is where you set the font-size you want to enable for the users to use (read up on the CSS font-size property at W3Schools). The simplest font-size group you can use are smaller, inherit, larger.
The number of letter “T” that appears in your widget depends on the number of font sizes you use. In my example above, since I use smaller, inherit, and larger, there will be three letter “T” and each letter will appear based on the font-size it is set for. If you set only two font-size, then only two letter T appears, and so forth.

= Can I use this on a non-widgetized website / theme? =

Not tested, but theoretically yes, you can. Follow the Manual installation in the Installation section for details.

== Changelog ==

= 1.1.1 =
* Added HTML tags p, li and td options by default for first-time installation.

= 1.1 =
* Added options into the widget form for easy customisation.

= 1.0 =
* First release.