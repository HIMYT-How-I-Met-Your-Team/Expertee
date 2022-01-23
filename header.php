<!DOCTYPE html>
<html>
<head>
<?php
    get_head($args['styles'], $args['scripts']);
?>
<meta name='viewport' content='width=device-width, initial-scale=1' />
</head>
<header>
    <div id="brand"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Logo_expertee_2.svg" alt="logo expertee"></a></div>
        <div id="nav">
            <a href="#contattaci"><span id="contattaci">CONTATTACI</span></a>
            <a href="#chisiamo" >CHI SIAMO</a>
            <a href="#incloud">INCLOUD</a>
            <a href="#software">SOFTWARE</a>
            <a href="#home">HOMEPAGE</a>
        </div>
        <div id="hamburger-menu" onclick="toggleMobileMenu(this)">
            <div  id="hamburger-icon">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div id="mobile-menu">
                <a href="#home">HOMEPAGE</a>
                <a href="#software">SOFTWARE</a>
                <a href="#incloud">INCLOUD</a>
                <a href="#chisiamo" >CHI SIAMO</a>
                <a href="#contattaci"><span id="contattaci-hamburger">CONTATTACI</span></a>
            </div>
        </div>
</header>

<main>

