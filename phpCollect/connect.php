<?php

$username = "demo_user";
$password = "";
$connect_string = "demo_low";
//$dbname = $_POST["db"];

// Connect
$connect = oci_connect($username, $password, $connect_string);
if (!$connect) {
    $message = oci_error();
    trigger_error("Could not connect to database: ". $message["message"], E_USER_ERROR);
}

?>