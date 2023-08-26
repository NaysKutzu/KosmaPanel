<?php
// Routes for /api
use Kosma\Router;

Router::get('login', function() {  
    require "../views/auth/login.php"; 
}); 

Router::get('register', function() {  
    require "../views/auth/register.php"; 
}); 


?>