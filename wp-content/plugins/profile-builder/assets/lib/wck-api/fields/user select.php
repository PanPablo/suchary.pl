<?php
/* @param string $meta Meta name.	 
 * @param array $details Contains the details for the field.	 
 * @param string $value Contains input value;
 * @param string $context Context where the function is used. Depending on it some actions are preformed.;
 * @return string $element input element html string. */
 
$args = apply_filters( 'wck-user-select-args', array( 'orderby' => 'display_name' ) );			
$user_query = new WP_User_Query($args);
if( !empty( $user_query->results ) ){
	$element .= '<select name="'. $single_prefix . esc_attr( Wordpress_Creation_Kit_PB::wck_generate_slug( $details['title'], $details ) ) .'"  id="';
	if( !empty( $frontend_prefix ) )
		$element .=	$frontend_prefix; 
	$element .= esc_attr( Wordpress_Creation_Kit_PB::wck_generate_slug( $details['title'], $details ) ) .'" class="mb-user-select mb-field" >';
	$element .= '<option value="">'. __('...Choose', 'profile-builder') .'</option>';
	foreach( $user_query->results as $user ){
		$element .= '<option value="'. esc_attr( $user->ID ) .'"  '. selected( $user->ID, $value, false ) .' >'. esc_html( $user->display_name ) .'</option>';					
	}				
	$element .= '</select>';
}			
?>