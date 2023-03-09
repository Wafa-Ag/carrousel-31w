<?php
/**Extention carrousel permet d'affichier dans une boites modale 
 * les images d'une galerie 
 * Package name :carrousel 
 * version : 1.0.0
 */
/**
 * Plugin name : carrousel
 * Author :  Agrebi Ouafa  
 * Plugin  URI : https://github.com/Wafa-Ag/carrousel
 * Description : Permet d'affichier dans une boite modale 
 * les images d'une galerie  
 * 
 */

 wp_enqueue_style(   'em_plugin_carrousel_css',
 plugin_dir_url(__FILE__) . "style.css",
 array(),
 $version_css);

wp_enqueue_script(  'em_plugin_carrousel_js',
plugin_dir_url(__FILE__) ."js/carrousel.js",
array(),
$version_js,
true);

?>