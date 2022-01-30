<?php 
/* Template Name: Blog */ 
$bodyName = "blog";
$stylesList = [
    "navbar",
    "blog",
    "footer"
];
$scriptsListOnStartup = [
    
];
$scriptsListOnFinish = [
    "navbar",
    "slider"
];


get_header('', array( 'styles' => $stylesList, 'scripts' => $scriptsListOnStartup ));
get_body($bodyName);
get_form();
get_after_form();
get_footer('', array( 'scripts' => $scriptsListOnFinish));

insert(get_data($_POST));

?>

