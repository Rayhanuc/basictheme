<?php

add_action('cmb2_admin_init','metabox_output');
function metabox_output(){
	$metabox = new_cmb2_box(array(
		'object_types' => array('post','page'),
		'title' => 'additional field',
		'id' => 'jekono'
	));
	//subtitle
	$metabox->add_field(array(
		'id' => 'sub-title',
		'name' => 'Subtitle',
		'default' => 'write some text',
		'type' => 'text'
	));
	//color field
	$metabox->add_field(array(
		'id' => 'sub_color',
		'name' => 'Subtitle Color',
		'type' => 'colorpicker',
		'default' => '#ffffff',
	));


	$abar = new_cmb2_box(array(
		'object_types'  => 'basic-testimonial',
		'title' 		=> 'Information',
		'id'		    => 'arekta'
	));

	$abar->add_field(array(
		'id' => 'desig',
		'name' => 'Designation',
		'default' => 'CEO',
		'type' => 'text'
	));

	$abar->add_field(array(
		'id' => 'text-box',
		'name' => 'Text Box',
		'default' => 'Write some text',
		'type' => 'wysiwyg'
	));


}


	
?>