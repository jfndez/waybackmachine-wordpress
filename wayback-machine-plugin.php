<?php
/**
 * @package Wayback_Machine 
 * @version 0.1
 */
/*
Plugin Name: Wayback Machine Plugin
Plugin URI: http://www.jose-fernandez.com.es/notas/wayback-machine-plugin-wordpress/
Description: Wayback Machine permite conservar, citar y verificar un post con <a href="https://archive.org/web/" target="_blank"><strong>Wayback Machine</a> de <a target="_blank" href="http://www.archive.org">archive.org</strong></a>. <a title="Citar y verificar un contenido en internet" target="_blank" href="http://www.jose-fernandez.com.es/notas/citar-y-verificar-una-web-para-trabajos-academicos/"><strong>+info</strong></a>
Author: José Fernández
Version: 1.0
Author URI: http://www.jose-fernandez.com.es/
*/

function add_wayback_machine($text) {
global $post;
$urlpost = get_permalink();
$titlepost = get_the_title();
if($post->post_type == 'post' || 'page') $text = '<a href="https://web.archive.org/save/'.$urlpost.'" target="_blank" title="Capturar esta entrada en archive.org para verificar una posible cita en el futuro">Conservar la entrada <i><b>'.$titlepost.'</b></i> en archive.org</a>';
return $text;
      	                            }
add_shortcode( 'wayback', 'add_wayback_machine' );
?>
