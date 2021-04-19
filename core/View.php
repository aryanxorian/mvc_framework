<?php
    namespace Core;
    class View
    {
        public static function render($filename)
        {
            // echo "__DIR__". "<br>";
            // echo $filename;
            include "../views/$filename".".php";
        }
    }
?>