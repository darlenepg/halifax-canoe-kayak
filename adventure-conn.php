<?php

/* database connection */
 
$host = "localhost"; /* Host name */
$username = "root"; /* User */
$password = ""; /* Password */
$dbname = "db_adventures"; /* Database name */

$con = mysqli_connect($host, $username, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}