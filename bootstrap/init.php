<?php
    require_once "../routes/routes.php";
    if($_SERVER['REQUEST_METHOD']=="GET")
    {
        $url=$_SERVER["REQUEST_URI"];
        $endpoint=explode("?",$url);
        $target=$endpoint[0];
        echo $url;
        exit;
    }
    
?>