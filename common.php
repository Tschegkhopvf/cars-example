<?php

$db_host = "localhost";
$db_name = "cars";
$db_username = "root";
$db_password = "";
$db_charset = "utf8";
$db_options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
        
// Create a database connection handle $dbh
$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset";
$dbh = new PDO($dsn, $db_username, $db_password, $db_options);
