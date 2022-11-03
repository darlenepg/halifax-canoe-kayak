
<?php
session_start();


$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "projectserver.mysql.database.azure.com", "darn84", "04Malachi19", "sfhdb", 3306, MYSQLI_CLIENT_SSL);
 

?>
