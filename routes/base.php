<?php
// Routes for /auth
use Kosma\Router;

Router::get('', function() {  
    require "../views/index.php"; 
}); 


?>