<?php 

function firstTemplateSH(){
include_once plugin_dir_path(__FILE__) .'/inc/homepage-popup.php';

$handle = 'popup.css';
$list = 'enqueued';
if (wp_script_is( $handle, $list )) {
    return;
} else {
    wp_register_style('popup',plugins_url('/simple-popup/templates/firstTemplate/inc/popup.css'));
    wp_enqueue_style( 'popup' );
}  
}
add_shortcode( 'firstTemplate', 'firstTemplateSH' );

