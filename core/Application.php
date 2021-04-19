<?php
namespace Core;
class Application
{
    public $router;
    public function __construct()
    {
        $this->router= new Router();
    }
    public static function getIndex()
    {
        View::render("index");
    }
    public function getContact()
    {
        View::render("contact");
    }
    public function getLogin()
    {
        View::render("login");
    }
    public function getLogout()
    {
        View::render("logout");
    }
    public function getRegister()
    {
        View::render("register");
    }
    public function demo()
    {
        echo "This is demo bro";
    }
    

}


 ?>  