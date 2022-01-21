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

// prints the necessary code to include a CSS style from the filename
function get_style($styleName){
   echo("<link rel='stylesheet' href='".get_stylesheet_directory_uri()."/styles/".$styleName.".css'>");
}

// prints the necessary code to include a JS script from the filename in the header
function get_script_start($scriptName){
   echo '<script type="text/javascript" src="'.get_stylesheet_directory_uri().'/scripts/'.$scriptName.'.js"></script>';
}

// prints the necessary code to include a JS script from the filename in the footer
function get_script_end($scriptName){
   wp_enqueue_script('scriptName', get_stylesheet_directory_uri().'/scripts/'.$scriptName.'.js', 
   array(), false, true);
}



// includes the required CSS styles and JS scripts and initializes the page
function get_head($styleArray, $scriptArray){
   echo("<!DOCTYPE html>");
   echo("<html>");
   echo("<head>");
   foreach ($styleArray as $style){
      get_style($style);
   }
   foreach ($scriptArray as ["name" => $script, "isHeader" => $isHeader]){
      if($isHeader){
         get_script_start($script); 
      }
      else{
         get_script_end($script);
      }
   }
   echo ("</head>");
}

// prints the body part from the name of its file (there can be more than one)
function get_body($pageName){
   include "pages/".$pageName.".php";
}


?>