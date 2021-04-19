<?php

// Router::get("/",[Application::class,"show"]);
// Router::get("/home",[Application::class,"show"]);
// Router::get("/contact",[Application::class,"show"]);

$routes=
    [
        "get"=>
            [
                
                "/"=>"Application@getIndex",
                "/home"=>"Application@getIndex",
                "/contact"=>"Application@getContact",
                "/register"=>"Application@getRegister",
                "/login"=>"Application@getLogin",
                "/logout"=>"Application@getLogout",

            ],
        "post"=>
            [
                
                "/"=>"Application@getIndex",
                "/home"=>"Application@getIndex",
            ],
    ]
    
    
?>