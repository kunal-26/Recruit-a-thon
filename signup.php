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
			
			<h1> Signup Here!</h1>

			<form action="signup1.php" method="post" accept-charset="utf-8">
				<input type="text"  name="t1"  placeholder="name" required/><br>
				<input type="text"  name="t2"  placeholder="Email" required/><br>
				<input type="password"  name="t3"  placeholder="password" required/><br>
				<input type="text"  name="t4"  placeholder="phone" required/><br>
				
				<br>
                		<input type="radio" name="t5" value="student" checked><span class="rad">Student</span>
				<input type="radio" name="t5" value="employee"> <span class="rad">Employee</span> 
				<button type="submit" id="b1" name="b1">Sign Up</button>
				<h3>Already have account ? <a class="aclk" href="login.php">Click here!</a></h3>
			</form>
		</div>
	</body>
</html>