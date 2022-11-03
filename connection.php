

<?php

/* database connection */

session_start();
 
$host = "projectserver.mysql.database.azure.com"; /* Host name */
$username = "darn84"; /* User */
$password = "04Malachi19"; /* Password */
$dbname = "sfhdb"; /* Database name */

$con = mysqli_connect($host, $username, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
