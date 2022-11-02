<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admin Login</title>
		<link rel="stylesheet" href="assets/css/phpstyle.css">
	</head>
	<body>
		
			<div class="login">
				<h1>Admin Login</h1>
				<form action="validate.php" method="POST">
            		Username <input type="text" name="username" class="text" autocomplete="off" required>
            		Password <input type="password" name="password" class="text" required>
            		<input type="submit" name="submit" id="submit" value="Login">
					
					<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                	?>  
        		</form>
			</div>
	
	</body>
</html>

<?php
unset($_SESSION["error"]);
?>
