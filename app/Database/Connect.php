<?php

namespace Kosma\Database;

use Symfony\Component\Yaml\Yaml;
use mysqli;

class Connect{
    public function connectToDatabase() {
        $KosmaConfig = Yaml::parseFile('../config.yml');
        $KosmaDB = $KosmaConfig['database'];

        $dbhost = $KosmaDB['host'];
        $dbport = $KosmaDB['port'];
        $dbusername = $KosmaDB['username'];
        $dbpassword = $KosmaDB['password'];
        $dbname = $KosmaDB['database'];

        $conn = new mysqli($dbhost . ':' . $dbport, $dbusername, $dbpassword, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
