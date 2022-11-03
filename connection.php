<?php
$host = 'projectserver.mysql.database.azure.com';
$username = 'darn84';
$password = '04Malachi19';
$db_name = 'sfhdb';

//Initializes MySQLi
$con = mysqli_init();

mysqli_ssl_set($con,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($con, 'projectserver.mysql.database.azure.com', 'darn84', '04Malachi19', 'sfhdb', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

?>
