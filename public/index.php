<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

use Kosma\Router;

//Loading in the Routes with Prefixes
Router::prefix('', function() {
	require "../routes/base.php";
});

Router::prefix('auth/', function() {
	require "../routes/auth.php";
});

Router::prefix('admin/', function() {
	require "../routes/admin.php";
});

Router::prefix('api/', function() {
	require "../routes/api.php";
});

Router::execute(__DIR__);  
?>