<?php
<<<<<<< HEAD
require_once 'config.php';
=======

/* PLEASE DO NOT EDIT THIS FILE */
/* PLEASE DO NOT EDIT THIS FILE */
/* PLEASE DO NOT EDIT THIS FILE */
/* PLEASE DO NOT EDIT THIS FILE */

/* IF YOU ARE HAVING ERROR, EDITING THIS FILE IS NOT THE BEST SOLUTION PLEASE DO NOT EDIT THIS FILE */

require_once '../config.php';
>>>>>>> 9a323eaa57e6d4072306e5aa130e59e4ed26a253

try {
    $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}
