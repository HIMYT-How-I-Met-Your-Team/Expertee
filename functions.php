<?php

// default and necessary function to make the child-theme work

function twentyonechild_theme_enqueue_styles() {
   wp_enqueue_style( 'child-style', get_stylesheet_uri(),
         array( 'parenthandle' ), 
         wp_get_theme()->get('Version') // this only works if you have Version in the style header
   );
}


// ________________
// CUSTOM FUNCTIONS
// ________________

// prints the necessary code to include a CSS style from the filename
function get_style($styleName){
   echo("<link rel='stylesheet' href='".get_stylesheet_directory_uri()."/styles/".$styleName.".css'>");
}

// prints the necessary code to include a JS script from the filename
function get_script($scriptName){
   echo '<script type="text/javascript" src="'.get_stylesheet_directory_uri().'/scripts/'.$scriptName.'.js"></script>';
}



// includes the required CSS styles and JS scripts and initializes the page
function get_head($styleArray, $scriptArray){
   foreach ($styleArray as $style){
      get_style($style);
   }
   foreach ($scriptArray as $script){
      get_script($script); 
   }
}

// includes the required JS scripts
function get_finish_scripts($scriptArray){
   foreach ($scriptArray as $script){
      get_script($script); 
   }
}

// prints the body part from the name of its file (there can be more than one)
function get_body($pageName){
   include "pages/".$pageName.".php";
}

?>