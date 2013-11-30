<?php
$jbstshortcodes = array(
		# basic shortcodes - start
		/*'basic-shortcodes-open' => array(
			'name' => __( 'DEFAULT SKEMATIK SHORTCODES', 'bootstrapshortcodesultimate' ),
			'type' => 'opengroup'
		),*/

/*
==========================================================
Button Group
==========================================================
*/
		'button_group' => array(
			'name' => 'Button Group',
			'type' => 'wrap',
			'atts' => array( ),
			'usage' => '[button_group][/button_group]',
			'content' => '',
			'desc' => __( 'Button Group', 'bootstrapshortcodesultimate' )
		),
		
/*
==========================================================
Buttons
==========================================================
*/			
		'button' => array(
			'name' => 'Button',
			'type' => 'single',
			'atts' => array(
				'text' => array(
					'values' => array( ),
					'default' => 'Button Text',
					'name' => __( 'Button Text', 'bootstrapshortcodesultimate' )
				),
				'url' => array(
					'values' => array( ),
					'default' => '',
					'name' => __( 'Button Link', 'bootstrapshortcodesultimate' )
				),
				'size' => array(
					'values' => array(
						'',
						'mini',
						'small',
						'medium',
						'large'
					),
					'default' => '',
					'name' => __( 'Button Size', 'bootstrapshortcodesultimate' )
				),
				'type' => array(
					'values' => array(
						'',
						'primary',
						'default',
						'info',
						'success',
						'danger',
						'warning',
						'inverse'
					),
					'default' => '',
					'name' => __( 'Button Style (color)', 'bootstrapshortcodesultimate' )
				),
				'icon' => array(
					'values' => array(
						'','glass','music','search','envelope','heart','star','star-empty','user','film','th-large','th','th-list','ok','remove','zoom-in','zoom-out','off','signal','cog','trash','home','file','time','road','download-alt','download','upload','inbox','play-circle','repeat','refresh','list-alt','lock','flag','headphones','volume-off','volume-down','volume-up','qrcode','barcode','tag','tags','book','bookmark','print','camera','icon-font','bold','italic','text-height','text-width','align-left','align-center','align-right','align-justify','list','indent-left','indent-right','facetime-video','picture','pencil','map-marker','adjust','tint','edit','share','check','move','step-backward','fast-backward','backward','play','pause','stop','forward','fast-forward','step-forward','eject','chevron-left','chevron-right','plus-sign','minus-sign','remove-sign','ok-sign','question-sign','info-sign','screenshot','remove-circle','ok-circle','ban-circle','arrow-left','arrow-right','arrow-up','arrow-down','share-alt','resize-full','resize-small','plus','minus','asterisk','exclamation-sign','gift','leaf','fire','eye-open','eye-close','warning-sign','plane','calendar','random','comment','magnet','chevron-up','chevron-down','retweet','shopping-cart','folder-close','folder-open','resize-vertical','resize-horizontal','hdd','bullhorn','bell','certificate','thumbs-up','thumbs-down','hand-right','hand-left','hand-up','hand-down','circle-arrow-right','circle-arrow-left','circle-arrow-up','circle-arrow-down','globe','wrench','tasks','filter','briefcase','fullscreen'
					),
					'default' => '',
					'name' => __( 'Button Icon', 'bootstrapshortcodesultimate' )
				),
				
				'iconcolor' => array(
					'values' => array(
						'',
						'white',
						'black'
					),
					'default' => '',
					'name' => __( 'Icon Color', 'bootstrapshortcodesultimate' )
				),
				
				'target' => array(
					'values' => array(
						'',
						'_self',
						'_blank'
					),
					'default' => '',
					'name' => __( 'Button Link Target', 'bootstrapshortcodesultimate' )
				)
			),
			'usage' => '[button url="" size="medium" type="default" text="Button Text" icon="default" target="_self" icon="image.png"]',
			'desc' => __( '3 sizes, 7 colors and 140 icons', 'bootstrapshortcodesultimate' )
		),
		
/*
==========================================================
Labels
==========================================================
*/			
		'label' => array(
			'name' => 'Label',
			'type' => 'single',
			'atts' => array(
				'type' => array(
					'values' => array(
						'',
						'primary',
						'default',
						'info',
						'success',
						'danger',
						'warning',
						'inverse'
					),
					'default' => '',
					'name' => __( 'Label Style (color)', 'bootstrapshortcodesultimate' )
				),
				'text' => array(
					'values' => array( ),
					'default' => 'Label Text',
					'name' => __( 'Label Text', 'bootstrapshortcodesultimate' )
				),
			),
			'usage' => '[label type="default" text="Label Text"]',
			'desc' => __( 'Text surrounded by a solid color for importance.', 'bootstrapshortcodesultimate' )
		),				
		
/*
==========================================================
Badges
==========================================================
*/			
		'badge' => array(
			'name' => 'Badge',
			'type' => 'single',
			'atts' => array(
				'type' => array(
					'values' => array(
						'primary',
						'default',
						'info',
						'success',
						'danger',
						'warning',
						'inverse'
					),
					'default' => '1',
					'name' => __( 'Badge Style (color)', 'bootstrapshortcodesultimate' )
				),
				'text' => array(
					'values' => array( ),
					'default' => 'Badge Text',
					'name' => __( 'Badge Text', 'bootstrapshortcodesultimate' )
				),
			),
			'usage' => '[badge type="default" text="Badge Text"]',
			'desc' => __( 'Text surrounded by a solid color for importance.', 'bootstrapshortcodesultimate' )
		),			
		
/*
==========================================================
Code
==========================================================
*/	
		'code' => array(
			'name' => 'Code',
			'type' => 'wrap',
			'atts' => array(
				'scroll' => array(
					'values' => array(
						'true',
						'false'
					),
					'default' => 'false',
					'name' => __( 'Scroll', 'bootstrapshortcodesultimate' )
				)
			),
			'usage' => '[code] Content [/code]<br/>[code scroll="true"] Content [/code]',
			'content' => __( 'Code goes here', 'bootstrapshortcodesultimate' ),
			'desc' => __( 'Code box for showing code.', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Row
==========================================================
*/
		'row' => array(
			'name' => 'Column Row',
			'type' => 'wrap',
			'atts' => array( ),
			'usage' => '[row][/row]',
			'content' => '',
			'desc' => __( 'Row', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Column
==========================================================
*/
		'column' => array(
			'name' => 'Column',
			'type' => 'wrap',
			'atts' => array(
				'span' => array(
					'values' => array(
						'1',
						'2',
						'3',
						'4',
						'5',
						'6',
						'7',
						'8',
						'9',
						'10',
						'11',
						'12'
					),
					'name' => __( 'Column Span.', 'bootstrapshortcodesultimate' )
				)
			),
			'usage' => '[column]Content goes here[/column]',
			'content' => __( 'Content goes here', 'bootstrapshortcodesultimate' ),
			'desc' => __( 'Empty space with adjustable height', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Lead
==========================================================
*/
		'lead' => array(
			'name' => 'Lead Paragraph',
			'type' => 'wrap',
			'atts' => array(
				'align' => array(
					'values' => array(
						'default',
						'left',
						'center',
						'right'
					),
					'default' => 'Align',
					'name' => __( 'text alignment', 'bootstrapshortcodesultimate' )
				),
			),
			'usage' => '[lead][/lead]',
			'content' => __( 'Content goes here', 'bootstrapshortcodesultimate' ),
			'desc' => __( 'Lead Paragraph', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Page Header
==========================================================
*/			
		'header' => array(
			'name' => 'Page Header',
			'type' => 'single',
			'atts' => array(
				'text' => array(
					'values' => array( ),
					'default' => 'Heading Text',
					'name' => __( 'Heading Text', 'bootstrapshortcodesultimate' )
				),
				'subtext' => array(
					'values' => array( ),
					'default' => 'Sub Text',
					'name' => __( 'Sub Text', 'bootstrapshortcodesultimate' )
				),
			),
			'usage' => '[header text="Header Text" subtext="Sub Text"]',
			'desc' => __( 'Page Header.', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Divider
==========================================================
*/
		'divider' => array(
			'name' => 'Divider',
			'type' => 'single',
			'atts' => array( ),
			'usage' => '[divider]',
			'content' => '',
			'desc' => __( 'Divider', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Jumbotron
==========================================================
*/
		'jumbotron' => array(
			'name' => 'Jumbotron',
			'type' => 'wrap',
			'atts' => array(
					'background' => array(
						'values' => array( ),
						'default' => '#fff',
						'name' => __( 'Background color', 'bootstrapshortcodesultimate' ),
						'type' => 'color'
					),
					'color' => array(
						'values' => array( ),
						'default' => '#333',
						'name' => __( 'Text Color', 'bootstrapshortcodesultimate' ),
						'type' => 'color'
					),
					'centered' => array(
						'type' => 'switch',
						'default' => 'yes',
						'name' => __( 'Center content', 'bootstrapshortcodesultimate' ), 
						'desc' => __( 'Center the content of the jumbotron', 'bootstrapshortcodesultimate' )
					),
					'fullwidth' => array(
						'type' => 'switch',
						'default' => 'no',
						'name' => __( 'Full width', 'bootstrapshortcodesultimate' ), 
						'desc' => __( 'Set the jumbotron full width, and without rounded corners', 'bootstrapshortcodesultimate' )
					)

			),
			'usage' => '[jumbotron]Content goes here[/jumbotron]',
			'content' => __( 'Content goes here', 'bootstrapshortcodesultimate' ),
			'desc' => __( 'A big header area for the top of your page.', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Alert
==========================================================
*/			
		'alert' => array(
			'name' => 'Alert',
			'type' => 'wrap',
			'atts' => array(
			
				'heading' => array(
					'values' => array( ),
					'default' => 'Alert Heading',
					'name' => __( 'Alert Heading', 'bootstrapshortcodesultimate' )
				),
				'type' => array(
					'values' => array(
						'alert-info',
						'alert-success',
						'alert-error'
					),
					'default' => 'alert-info',
					'name' => __( 'Alert Style', 'bootstrapshortcodesultimate' )
				),
				'block' => array(
					'values' => array(
						'true',
						'false'
					),
					'default' => 'false',
					'name' => __( 'Block Padding', 'bootstrapshortcodesultimate' )
				),
				'close' => array(
					'values' => array(
						'true',
						'false'
					),
					'default' => 'false',
					'name' => __( 'Close Button', 'bootstrapshortcodesultimate' )
				)
			),
			'usage' => '[alert type="alert-info" heading="Alert Heading" block="false" close="false"]Content[/alert]',
			'desc' => __( 'Alert box with optional padding and close button', 'bootstrapshortcodesultimate' )
		),
		
/*
==========================================================
Blockquote
==========================================================
*/			
		'blockquote' => array(
			'name' => 'Blockquote',
			'type' => 'wrap',
			'atts' => array(
			
				'cite' => array(
					'values' => array( ),
					'default' => __( 'Author or source name', 'bootstrapshortcodesultimate' ),
					'name' => __( 'Blockquote Cite', 'bootstrapshortcodesultimate' )
				),
				'float' => array(
					'values' => array(
						'no-float',
						'left',
						'right'
					),
					'default' => 'left',
					'name' => __( 'Float (causes text wrap)', 'bootstrapshortcodesultimate' )
				),
				'align' => array(
					'values' => array(
						'left',
						'right'
					),
					'align' => 'left',
					'name' => __( 'Text Align', 'bootstrapshortcodesultimate' )
				)
			),
			'usage' => '[blockquote cite="Author or source name" float="left"]Blockquote content[/blockquote]',
			'desc' => __( 'Blockquote quotation with citation', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Popovers
==========================================================
*/			
		'popover' => array(
			'name' => 'Popover',
			'type' => 'single',
			'atts' => array(
				'text' => array(
					'values' => array( ),
					'default' => '',
					'name' => __( 'Text', 'bootstrapshortcodesultimate' )
				),
				'title' => array(
					'values' => array( ),
					'default' => '',
					'name' => __( 'Popover Title', 'bootstrapshortcodesultimate' )
				),
				'desc' => array(
					'values' => array( ),
					'default' => '',
					'name' => __( 'Popover description', 'bootstrapshortcodesultimate' )
				),
				'link' => array(
					'values' => array( ),
					'default' => '',
					'name' => __( 'Link Url', 'bootstrapshortcodesultimate' )
				),
				'target' => array(
					'values' => array(
						'_self',
						'_blank'
					),
					'default' => '_self',
					'name' => __( 'Link Target', 'bootstrapshortcodesultimate' )
				),
				'button' => array(
					'values' => array(
						'true',
						'false'
					),
					'default' => 'false',
					'name' => __( 'Button', 'bootstrapshortcodesultimate' )
				),
				'size' => array(
					'values' => array(
						'mini',
						'small',
						'medium',
						'large'
					),
					'default' => 'medium',
					'name' => __( 'Button Size', 'bootstrapshortcodesultimate' )
				),
				'type' => array(
					'values' => array(
						'primary',
						'default',
						'info',
						'success',
						'danger',
						'warning',
						'inverse'
					),
					'default' => '1',
					'name' => __( 'Button Style (color)', 'bootstrapshortcodesultimate' )
				)
			),
			'usage' => '[popover text="Popover Text" title="Popover Title" desc="Popover Description" link="" target="_self" button="false" size="medium" type="default"]',
			'desc' => __( '3 sizes, 7 colors and 140 icons', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Tooltip
==========================================================
*/			
		'tooltip' => array(
			'name' => 'Tooltip',
			'type' => 'single',
			'atts' => array(
				'text' => array(
					'values' => array( ),
					'default' => '',
					'name' => __( 'Text', 'bootstrapshortcodesultimate' )
				),
				'title' => array(
					'values' => array( ),
					'default' => '',
					'name' => __( 'Tooltip description', 'bootstrapshortcodesultimate' )
				),
				'link' => array(
					'values' => array( ),
					'default' => '',
					'name' => __( 'Link Url', 'bootstrapshortcodesultimate' )
				),
				'target' => array(
					'values' => array(
						'_self',
						'_blank'
					),
					'default' => '_self',
					'name' => __( 'Link Target', 'bootstrapshortcodesultimate' )
				),
				'icon' => array(
					'values' => array(
						'none','glass','music','search','envelope','heart','star','star-empty','user','film','th-large','th','th-list','ok','remove','zoom-in','zoom-out','off','signal','cog','trash','home','file','time','road','download-alt','download','upload','inbox','play-circle','repeat','refresh','list-alt','lock','flag','headphones','volume-off','volume-down','volume-up','qrcode','barcode','tag','tags','book','bookmark','print','camera','icon-font','bold','italic','text-height','text-width','align-left','align-center','align-right','align-justify','list','indent-left','indent-right','facetime-video','picture','pencil','map-marker','adjust','tint','edit','share','check','move','step-backward','fast-backward','backward','play','pause','stop','forward','fast-forward','step-forward','eject','chevron-left','chevron-right','plus-sign','minus-sign','remove-sign','ok-sign','question-sign','info-sign','screenshot','remove-circle','ok-circle','ban-circle','arrow-left','arrow-right','arrow-up','arrow-down','share-alt','resize-full','resize-small','plus','minus','asterisk','exclamation-sign','gift','leaf','fire','eye-open','eye-close','warning-sign','plane','calendar','random','comment','magnet','chevron-up','chevron-down','retweet','shopping-cart','folder-close','folder-open','resize-vertical','resize-horizontal','hdd','bullhorn','bell','certificate','thumbs-up','thumbs-down','hand-right','hand-left','hand-up','hand-down','circle-arrow-right','circle-arrow-left','circle-arrow-up','circle-arrow-down','globe','wrench','tasks','filter','briefcase','fullscreen'
					),
					'default' => 'default',
					'name' => __( 'Button Icon', 'bootstrapshortcodesultimate' )
				),
				'iconcolor' => array(
					'values' => array(
						'white',
						'black'
					),
					'default' => 'white',
					'name' => __( 'Icon Color', 'bootstrapshortcodesultimate' )
				),
				'button' => array(
					'values' => array(
						'true',
						'false'
					),
					'default' => 'false',
					'name' => __( 'Button', 'bootstrapshortcodesultimate' )
				),
				'size' => array(
					'values' => array(
						'mini',
						'small',
						'medium',
						'large'
					),
					'default' => 'medium',
					'name' => __( 'Button Size', 'bootstrapshortcodesultimate' )
				),
				'type' => array(
					'values' => array(
						'primary',
						'default',
						'info',
						'success',
						'danger',
						'warning',
						'inverse'
					),
					'default' => '1',
					'name' => __( 'Button Style (color)', 'bootstrapshortcodesultimate' )
				)
			),
			'usage' => '[tooltip text="Tooltip Text" title="Tooltip Title" link="" target="_self" icon="default" button="false" size="medium" type="default"]',
			'desc' => __( '3 sizes, 7 colors and 140 icons', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Progress Bar
==========================================================
*/			
		'progress' => array(
			'name' => 'Progress Bar',
			'type' => 'single',
			'atts' => array(
				'width' => array(
					'values' => array( ),
					'default' => '25',
					'name' => __( 'Percentage of Progress', 'bootstrapshortcodesultimate' )
				),
				'striped' => array(
					'values' => array(
						'on',
						'off'
					),
					'default' => 'off',
					'name' => __( 'Striped', 'bootstrapshortcodesultimate' )
				),
				'animate' => array(
					'values' => array(
						'on',
						'off'
					),
					'default' => 'off',
					'name' => __( 'Animate (requires striped)', 'bootstrapshortcodesultimate' )
				),
				'type' => array(
					'values' => array(
						'primary',
						'info',
						'success',
						'warning',
						'danger'
					),
					'default' => 'info',
					'name' => __( 'Style (color)', 'bootstrapshortcodesultimate' )
				)
			),
			'usage' => '[progress width="25" animate="off" striped="off" type="off"]',
			'desc' => __( 'A Progress bar', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Carousel
==========================================================
*/			
		'carousel_gallery' => array(
			'name' => 'Carousel Gallery',
			'type' => 'single',
			'atts' => array(
				'include' => array(
					'values' => array( ),
					'default' => '',
					'name' => __( 'Include specific image IDs', 'bootstrapshortcodesultimate' )
				),
				'exclude' => array(
					'values' => array( ),
					'default' => '',
					'name' => __( 'Exclude specific image IDs', 'bootstrapshortcodesultimate' )
				)
			),
			'usage' => '[carousel_gallery include="" exclude=""]',
			'desc' => __( 'A Carousel of your gallery\'s images', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Menu
==========================================================
*/			
		'menu' => array(
			'name' => 'Menu',
			'type' => 'single',
			'atts' => array(
				'style' => array(
					'values' => array(
						'pills',
						'tabs'
					),
					'default' => 'pills',
					'name' => __( 'Style', 'bootstrapshortcodesultimate' )
				),
				'stacked' => array(
					'values' => array(
						'true',
						'false'
					),
					'default' => 'false',
					'name' => __( 'Stacked Vertically', 'bootstrapshortcodesultimate' )
				),
			),
			'usage' => '[menu]',
			'desc' => __( 'Display any of your menus.', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Accordion Group
==========================================================

		'accordion_group' => array(
			'name' => 'Accordion Group',
			'type' => 'wrap',
			'atts' => array( ),
			'usage' => '[accordion][/accordion]',
			'content' => '',
			'desc' => __( 'Accordion Group', 'bootstrapshortcodesultimate' )
		),
*/		
/*
==========================================================
Accordion
==========================================================
*/
		'accordion' => array(
			'name' => 'Accordion',
			'type' => 'wrap',
			'atts' => array(
					'title' => array(
						'values' => array( ),
						'default' => 'Title here',
						'name' => __( 'Title', 'bootstrapshortcodesultimate' ),
					),
					'id' => array(
						'values' => array( ),
						'default' => 'id-here',
						'name' => __( 'ID: (no spaces)', 'bootstrapshortcodesultimate' ),
					)
			),
			'usage' => '[accordion title="Title Goes Here" id="IDHere"]Content goes here[/accordion]',
			'content' => __( 'Content goes here', 'bootstrapshortcodesultimate' ),
			'desc' => __( 'Collapsible content areas.', 'bootstrapshortcodesultimate' )
		),

/*
==========================================================
Icons
==========================================================
*/			
		'icon' => array(
			'name' => 'Icon',
			'type' => 'single',
			'atts' => array(
				'type' => array(
					'values' => array(
						'none','glass','music','search','envelope','heart','star','star-empty','user','film','th-large','th','th-list','ok','remove','zoom-in','zoom-out','off','signal','cog','trash','home','file','time','road','download-alt','download','upload','inbox','play-circle','repeat','refresh','list-alt','lock','flag','headphones','volume-off','volume-down','volume-up','qrcode','barcode','tag','tags','book','bookmark','print','camera','icon-font','bold','italic','text-height','text-width','align-left','align-center','align-right','align-justify','list','indent-left','indent-right','facetime-video','picture','pencil','map-marker','adjust','tint','edit','share','check','move','step-backward','fast-backward','backward','play','pause','stop','forward','fast-forward','step-forward','eject','chevron-left','chevron-right','plus-sign','minus-sign','remove-sign','ok-sign','question-sign','info-sign','screenshot','remove-circle','ok-circle','ban-circle','arrow-left','arrow-right','arrow-up','arrow-down','share-alt','resize-full','resize-small','plus','minus','asterisk','exclamation-sign','gift','leaf','fire','eye-open','eye-close','warning-sign','plane','calendar','random','comment','magnet','chevron-up','chevron-down','retweet','shopping-cart','folder-close','folder-open','resize-vertical','resize-horizontal','hdd','bullhorn','bell','certificate','thumbs-up','thumbs-down','hand-right','hand-left','hand-up','hand-down','circle-arrow-right','circle-arrow-left','circle-arrow-up','circle-arrow-down','globe','wrench','tasks','filter','briefcase','fullscreen'
					),
					'default' => 'default',
					'name' => __( 'Icon', 'bootstrapshortcodesultimate' )
				),
				
				'size' => array(
					'values' => array(
						'default',
						'16',
						'20',
						'28',
						'32',
						'36',
						'48',
						'72',
						'96',
					),
					'default' => 'default',
					'name' => __( 'Size', 'bootstrapshortcodesultimate' )
				),
				'float' => array(
					'values' => array(
						'none',
						'left',
						'right'
					),
					'default' => 'none',
					'name' => __( 'Float', 'bootstrapshortcodesultimate' )
				),
				'color' => array(
					'values' => array( ),
					'default' => 'default',
					'name' => __( 'Color', 'bootstrapshortcodesultimate' ),
					'type' => 'color'
				)
			),
			'usage' => '[icon type="music" size="24"]',
			'desc' => __( '210 icons', 'bootstrapshortcodesultimate' )
		)
		
/*
==========================================================
End Shortcodes
==========================================================
*/
				
	);
