<?php 
/* Template Name: Chi Siamo */ 
$bodyName = "chisiamo";
$stylesList = [
    "navbar",
    "chisiamo",
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

