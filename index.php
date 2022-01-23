<?php 
/* Template Name: Home */ 
$bodyName = "homepage";
$stylesList = [
    "navbar",
    "homepage",
    "footer"
];
$scriptsList = [
    ["name" => "navbar", "onStartup" => false],
    ["name" => "slider", "onStartup" => false]
];

get_head($stylesList, $scriptsList);
get_header();
get_body($bodyName);
get_footer();
?>

