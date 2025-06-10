<?php


function load_scripts(){
    wp_enqueue_style(
        'style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory().'/style.css'),'all'
    );

    wp_enqueue_script('dropdown',get_tamplate_directory_uri().'/js/dropdown.js',array('jquery'),'1.0',true); 
        
        

}


add_action('wp_enqueue_scripts','load_scripts');




?>