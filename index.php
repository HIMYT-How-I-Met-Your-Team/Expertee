<?php 
/* Template Name: Home */ 
$bodyName = "test";
$stylesList = [
    "navbar"
];
$scriptsList = [
    ["name" => "navbar", "isHeader" => true]
];

get_head($stylesList, $scriptsList);
get_header();
get_body($bodyName);
get_footer();
?>

