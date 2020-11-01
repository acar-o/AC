<?php
include 'layout.php';
include 'Controller/anasayfaController.php';
include 'Controller/seminerlerController.php';
include 'Controller/hataController.php';



if (!empty($_GET["url"])) {
    $url = $_GET["url"];

    switch ($url) {
    case 'Alumni Consulting':               anasayfa();         break;
    case 'Seminare':                        seminerler();       break;
    default:                                anasayfa();         break;
}
} else {
    echo anasayfa();
}?>
