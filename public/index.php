<?php 
  
    require_once '../autoload.php';
    require_once '../routes/routes.php';

    use Core\Application;

    $app= new Application();
    $url=$_SERVER["REQUEST_URI"];
    
    
    $app->router->routeHandler($url,$routes);
    
?>