<?php
/* Database credentials */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'magicwebsite');
define('DB_PASSWORD', '8fv3mpwcin3odcIZ');
define('DB_NAME', 'magicwebsite');
 
/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>