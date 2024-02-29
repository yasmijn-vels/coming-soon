<?php
    include_once 'geoplugin.php';
    if (!isset($_SESSION['lang'])){
        if (ip_info("Visitor", "Country Code") == "NL"){
            $_SESSION['lang'] = "nl";
        }
        elseif (ip_info("Visitor", "Country Code") == "EN") {
            $_SESSION['lang'] = "en";
        }
        else {$_SESSION['lang'] = "en";}
        
    }
    else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
        if ($_GET['lang'] == "nl"){
            $_SESSION['lang'] = "nl";
        }
        else if ($_GET['lang'] == "en"){
            $_SESSION['lang'] = "en";
        }
    }

    require_once $_SESSION['lang'] . ".php";
?>