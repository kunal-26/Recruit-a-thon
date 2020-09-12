<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Signup</title>
		<link rel="stylesheet" type="text/css" href="signup.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js">
	</head>
	<body>
		<div class="form">
			
			<h1> Login Here!</h1>

			<form action="checklogin.php" method="post" accept-charset="utf-8">
				<input type="text"  name="t1"  placeholder="Email"><br>
				<input type="password"  name="t2"  placeholder="password"><br>
	

				<button>Login</button>
				<h3>New User ? <a class="aclk" href="signup.php">Click here!</a></h3>
			</form>
		</div>
	</body>
</html>