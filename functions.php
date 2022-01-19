<?php

// default and necessary function to make the child-theme work
add_action( 'wp_enqueue_scripts', 'twentyonechild_theme_enqueue_styles' );

function twentyonechild_theme_enqueue_styles() {
   wp_enqueue_style( 'child-style', get_stylesheet_uri(),
         array( 'parenthandle' ), 
         wp_get_theme()->get('Version') // this only works if you have Version in the style header
   );
}


// ________________
// CUSTOM FUNCTIONS
// ________________

// prints the necessary code to include a style from the filename
function get_style($styleName){
   echo("<link rel='stylesheet' href='".get_stylesheet_directory_uri()."/styles/".$styleName.".css'>");
}

// includes the required styles and initializes the page
function get_head($styleArray){
   echo("<!DOCTYPE html>");
   echo("<html>");
   echo("<head>");
   foreach ($styleArray as $style){
      get_style($style);
   }
   echo ("</head>");
}


// prints the necessary code to include a script from the filename
function get_script(){} //TODO: implement if necessary, or delete before final

// includes the required styles on initial page load
function get_scripts_start(){} //TODO: implement if necessary, or delete before final

// includes the required styles on finishing page load
function get_scripts_end(){} //TODO: implement if necessary, or delete before final


// prints the body part from the name of its file (there can be more than one)
function get_body($pageName){
   include "pages/".$pageName.".php";
}


?>