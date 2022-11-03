

<?php
  
$servername = "projectserver.mysql.database.azure.com";
$username = "darn84";
$password = "04Malachi19";
$dbName = "sfhdb";
  
try {
  
    // Creating the connection
    $con = new PDO("mysql:host=$servername;dbname=$dbName", 
                    $username, $password);
    
    // Setting the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection established successfully...";
    
    // To close the connection
    $con = null;
} 
  
// If connection fails 
catch(PDOException $e) {
  
      // Throws the error message 
    echo "Connection failed: " . $e->getMessage();
}
  
?>
