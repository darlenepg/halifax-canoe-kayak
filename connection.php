<?php

/* database connection */

session_start();
 
$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL); 
mysqli_real_connect($conn, "projectserver.mysql.database.azure.com", "darn84", "{04Malachi19}", "{admin_login}", 3306, MYSQLI_CLIENT_SSL);
}
