<?php
/* Template Name: Software */ 

$bodyName = "software";
$stylesList = [
    "navbar",
    "software",
    "footer"
];
$scriptsListOnStartup = [];
$scriptsListOnFinish = [
    "navbar",
    "slider",
    "videoplayer"
];

get_header('', array( 'styles' => $stylesList, 'scripts' => $scriptsListOnStartup ));
get_body($bodyName);
get_form();
get_after_form();
get_footer('', array( 'scripts' => $scriptsListOnFinish));

insert(get_data($_POST));

?>