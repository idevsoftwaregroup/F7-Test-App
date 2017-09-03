<?php

require_once ("conf.php");

$mysqli = new mysqli($hostname, $dbuser, $dbpass, $dbname);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->set_charset('utf8');
$mysqli->query("SET NAMES utf8");

?>