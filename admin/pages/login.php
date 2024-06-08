<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
	<link rel="stylesheet" href="../css/login.css?v=<?php echo time() ?>" />
</head>
<body>
    <div class="container">
		<div>
			<a href="../../index.php" class="homeLink">Home</a>
		</div>
        <h4 class="heading">Welcome back!</h4>
		<?php echo $_SESSION["message"]; ?>
        <form action="../controllers/login_logic.php" method="POST" class="form">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="youremail@example.com" name="email"/>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password" name="password" />
            </div>
            <input type="submit" name="login" value="Login" class="btn"/>
        </form>
    </div>
</body>
</html>
