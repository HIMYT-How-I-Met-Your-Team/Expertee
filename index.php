<?php 
/* Template Name: Home */ 
$bodyName = "homepage";
$stylesList = [
    "navbar",
    "homepage",
    "footer"
];
$scriptsListOnStartup = [
    
];
$scriptsListOnFinish = [
    "navbar",
    "slider"
];

//get_head($stylesList, $scriptsList);
get_header('', array( 'styles' => $stylesList, 'scripts' => $scriptsListOnStartup ));
get_body($bodyName);
get_footer('', array( 'scripts' => $scriptsListOnFinish));
?>

