<?php

// Routes for /auth

$router->add('/auth/login', function () {
    require("../views/auth/login.php");
});

$router->add('/auth/register', function () {
    require("../views/auth/register.php");
});

$router->add('/auth/logout', function () {
    //require("../functions/logout.php");
});

?>