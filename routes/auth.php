<?php
// Routes for /auth
use Kosma\Router;

Router::get('login', function() {  
    require "../views/auth/login.php"; 
}); 

Router::get('register', function() {  
    require "../views/auth/register.php"; 
}); 


?>