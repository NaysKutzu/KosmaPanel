<?php
// Routes for /admin
use Kosma\Router;

Router::get('example/{id}?', function($id) {  
    require "../views/test.php"; 
})->name('example');  

Router::get('', function() {  
    require "../views/bob.php"; 
});  

?>