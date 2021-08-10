<?php
require 'connect.php';

if(!$con){
	echo "<script>alert('Connection Failed.')</script>";
}

if(isset($_POST['login'])){
     $uname=$_POST['username'];
     $password=$_POST['password'];

     $sql="select * from loginform where user='".$uname."'AND Pass='".$password."'limit 1";

     $result=mysqli_query($con, $sql);

     if(mysqli_num_rows($result)==1){
        //   echo "You Have Successfuly Logged in";
		$_SESSION["username"] = $uname;
		while($row = mysqli_fetch_array($result)) {

			if($row['isAdmin'] == 1){
				echo "<script>alert('You Have Successfuly Logged in'); window.location.href='./admin/index.php';</script>";
			}else{
				echo "<script>alert('You Have Successfuly Logged in'); window.location.href='indexlogin.php';</script>";
			}
		}
     }
     else{
        //   echo "You Have Entered Incorrect Password";
		  echo "<script>alert('You Have Entered Incorrect Password'); window.location.href='logregform.php';</script>";
     }
}

if(isset($_POST['register'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	
	if($password = $cpassword){
		$sql = "INSERT INTO loginform (user, Pass) VALUES ('$username', '$password')";
		
		$result = mysqli_query($con, $sql);
		if($result){
			$_SESSION["username"] = $username;
			echo "<script>alert('Wow! User Registration Completed.'); window.location.href='indexlogin.php';</script>";
		}
		else{
			echo "<script>alert('Whoops, something is wrong.'); window.location.href='logregform.php';</script>";
		}
		
	}
	
	else{
		echo "<script>alert('Password not match.'); window.location.href='logregform.php';</script>";
		
	}
}

?>

<html>

	<head>
		<title>RSG QUIZ (LOGIN / REGISTER)</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		<div class="hero">
			<div class="form-box">
				<div class="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-button" onclick="login()">Login</button>
					<button type="button" class="toggle-button" onclick="register()">Register</button>
				</div>
				
				<div class="social-icons">
					<img src="img/fb.png">
					<img src="img/tw.png">
					<img src="img/goog.png">
				</div>
				
				<form method="POST" id="login" class="input-group" action="logregform.php">
					<input type="text" class="input-field" name="username" placeholder="USERNAME" required>
					<input type="password" class="input-field" name="password" placeholder="PASSWORD" required>
					<input type="checkbox" class="check-box"><span>Remember Password</span>
					<button type="submit" class="submit-btn" name="login">Login</button>
					
				</form>
				
				<form method="POST" id="register" class="input-group" action="logregform.php">
					<input type="text" class="input-field" name="username" placeholder="USERNAME" 
					value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" required>
					<input type="password" class="input-field" name="password" placeholder="PASSWORD" 
					value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>" required>
					<input type="password" class="input-field" name="cpassword" placeholder="CONFIRM PASSWORD" 
					value="<?php if(isset($_POST['cpassword'])) echo $_POST['cpassword']; ?>" required>
					<input type="checkbox" class="check-box"><span style="font-size: 15px">I agree to the Terms and Conditions.</span>
					<button type="submit" class="submit-btn" name="register">Register</button>
				</form>
				
			</div>
			
		</div>
		
		<script>
			var x = document.getElementById("login");
			var y = document.getElementById("register");
			var z = document.getElementById("btn");
			
			function register(){
				x.style.left = "-400px";
				y.style.left = "50px";
				z.style.left = "110px";
			}
			
			function login(){
				x.style.left = "50px";
				y.style.left = "450px";
				z.style.left = "0px";
			}
		</script>
	
	</body>

</html>