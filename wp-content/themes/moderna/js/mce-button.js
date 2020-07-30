(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton('my_mce_button', {
			text: 'add shortcode',
			icon: false,
			type: 'menubutton',
			menu: [
			// Buttom Type shortcode
				{
					text: 'Buttom',
					menu: [
						{
							text: 'Button Type',
							onclick: function() {
								editor.windowManager.open( {
										title: 'Insert Random Shortcode',
										body: [
											{
												type: 'textbox',
												name: 'buttontext',
												label: 'Buttom Text',
												value: '30'
											},
											{
												type: 'textbox',
												name: 'buttonlink',
												label: 'Button Link'
											},
											{
												type: 'textbox',
												name: 'buttontype',
												label: 'Button Type'
											}
											,
											{
												type: 'textbox',
												name: 'buttonicon',
												label: 'Button icon'
											}
										],
										onsubmit: function( e ) {
											editor.insertContent( '[button-type icon="' + e.data.buttonicon + '" text="' + e.data.buttontext + '" link="' + e.data.buttonlink + '" type="' + e.data.buttontype + '"]');
										}
									});
							}
						},
						
						//sub item
						{
							text: 'More variations',
							onclick: function() {
								editor.insertContent('WPExplorer.com is awesome!');
							}
						}
					]
				},
				//  Alerts shortcode
				{
					text: 'Alerts',
					menu: [
						{
							text: 'alert',
							onclick: function() {
									editor.windowManager.open( {
										title: 'Insert Random Shortcode',
										body: [
											{
												type: 'textbox',
												name: 'buttontext',
												label: 'Buttom Text',
												value: ''
											},
											{
												type: 'textbox',
												name: 'buttontype',
												label: 'Button Type'
											},
											{
												type: 'textbox',
												name: 'description',
												label: 'Description'
											}
										],
										onsubmit: function( e ) {
											editor.insertContent( '[alerts text="' + e.data.buttontext + '" link="' + e.data.buttonlink + '" type="' + e.data.buttontype + '" description="' + e.data.description + '"]');
										}
									});
							}
						},
					]
				},
				//  Progress_bars shortcode
				{
					text: 'Progress',
					menu: [
						{
							text: 'Progress bar',
							onclick: function() {
									editor.windowManager.open( {
										title: 'Insert Random Shortcode',
										body: [
											{
												type: 'textbox',
												name: 'progValue',
												label: 'Progress Value',
												value: ''
											},
											{
												type: 'textbox',
												name: 'progactive',
												label: 'Progress active'
											},
											{
												type: 'textbox',
												name: 'progStyle',
												label: 'Progress Style'
											}
										],
										onsubmit: function( e ) {
											editor.insertContent( '[Prog value="' + e.data.progValue + '" active="' + e.data.progactive + '" barstyle="' + e.data.progStyle + '"]');
										}
									});
							}
						},
					]
				},
				//  priceing box shortcode
				{
					text: 'priceing',
					menu: [
						{
							text: 'priceing',
							onclick: function() {
									editor.windowManager.open( {
										title: 'Insert Random Shortcode',
										body: [
											{
												type: 'textbox',
												name: 'priceSpecial',
												label: 'Price Special',
												value: ''
											},
											{
												type: 'textbox',
												name: 'priceHedingone',
												label: 'Heading One',
												value: ''
											},
											{
												type: 'textbox',
												name: 'priceHedingtwo',
												label: 'Heading Two',
												value: ''
											},
											{
												type: 'textbox',
												name: 'price',
												label: 'Price Taka',
												value: ''
											},
											{
												type: 'textbox',
												name: 'buttomLink',
												label: 'Buttom Link',
												value: ''
											},
											{
												type: 'textbox',
												name: 'buttomtype',
												label: 'Buttom Type',
												value: ''
											},
											{
												type: 'textbox',
												name: 'buttomtext',
												label: 'Buttom Text',
												value: ''
											},
											{
												type: 'textbox',
												name: 'pricecolum',
												label: 'Colum'
											}
										],
										onsubmit: function( e ) {
											editor.insertContent( '[priceing heading_1="' + e.data.priceHedingone +
																		'" heading_2="' + e.data.priceHedingtwo + 
																		'" price_special="' + e.data.priceSpecial + 
																		'" price="' + e.data.price + 
																		'" btn_link="' + e.data.buttomLink + 
																		'" btn_type="' + e.data.buttomtype + 
																		'" btn_text="' + e.data.buttomtext + 
																		'" colum="' + e.data.pricecolum + 
																		'"]');
										}
									});
							}
						},
					]
				},

			]
		});
	});
})();




