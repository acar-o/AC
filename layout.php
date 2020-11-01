<?php
    function sayfaGoster($src,$title=false)
    {
        include 'View/head.php';
        include 'View/header.php';
        include $src;
        include 'View/footer.php';
        include 'View/foot.php';
    }
?>
