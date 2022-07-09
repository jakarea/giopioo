<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 $cmb CMB2 object.
 *
 * @return bool      True if metabox should show
 */
function yourprefix_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template.
	if ( get_option( 'page_on_front' ) !== $cmb->object_id ) {
		return false;
	}
	return true;
}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field $field Field object.
 *
 * @return bool              True if metabox should show
 */
function yourprefix_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category.
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}


add_action( 'cmb2_init', 'cmb2_add_metabox_project_info' );
function cmb2_add_metabox_project_info() {

	$prefix = '_cmb_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'project_information',
		'title'        => __( 'Project information', 'giopio' ),
		'object_types' => array( 'project' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'duration', 'giopio' ),
		'id' => $prefix . 'duration',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'slogan', 'giopio' ),
		'id' => $prefix . 'slogan',
		'type' => 'text',
	) );

}


add_action( 'cmb2_init', 'cmb2_giopio_project_work_flow' );
function cmb2_giopio_project_work_flow() {

	$prefix = '_cmb_workflow_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'giopio_work_flow',
		'title'        => __( 'Project Work Flow', 'giopio' ),
		'object_types' => array( 'project' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

		$group = $cmb->add_field( array(
		'name' => __( 'Work Flow', 'giopio' ),
		'id' => $prefix . 'giopio_work_flow',
		'type' => 'group',
	) );

	$cmb->add_group_field( $group, array(
		'name' => __( 'Work Flow Title', 'giopio' ),
		'id' => $prefix . 'title',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group, array(
		'name' => __( 'Work Flow Description', 'giopio' ),
		'id' => $prefix . 'description',
		'type' => 'textarea',
	) );

	$cmb->add_group_field( $group, array(
		'name' => __( 'Work Flow Image', 'giopio' ),
		'id' => $prefix . 'work_flow_image',
		'type' => 'file',
	) );

}



add_action( 'cmb2_init', 'cmb2_giopio_project_features' );
function cmb2_giopio_project_features() {

	$prefix = '_cmb_features_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'giopio_features',
		'title'        => __( 'Project Features', 'giopio' ),
		'object_types' => array( 'project' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

		$group = $cmb->add_field( array(
		'name' => __( 'Features', 'giopio' ),
		'id' => $prefix . 'giopio_features',
		'type' => 'group',
	) );

	$cmb->add_group_field( $group, array(
		'name' => __( 'Features Title', 'giopio' ),
		'id' => $prefix . '_giopio_title',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group, array(
		'name' => __( 'Features Description', 'giopio' ),
		'id' => $prefix . '_giopio_description',
		'type' => 'textarea',
	) );

	$cmb->add_group_field( $group, array(
		'name' => __( 'Features Image', 'giopio' ),
		'id' => $prefix . '_giopio_image',
		'type' => 'file',
	) );

}
