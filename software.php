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
    "slider"
];

get_header('', array( 'styles' => $stylesList, 'scripts' => $scriptsListOnStartup ));
get_body($bodyName);
get_form();
get_after_form();
get_footer('', array( 'scripts' => $scriptsListOnFinish));

$data = array('nome' => $_POST['nome'],'cognome' => $_POST['cognome'],'email' => $_POST['email'],'telefono' => $_POST['telefono'],'ragSociale' => $_POST['ragSociale'],'provincia' => $_POST['provincia'],'attivita' => $_POST['attivita'],'messaggio' => $_POST['messaggio']);
insert($data);

?>