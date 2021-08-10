<?php 

require_once 'connect.php';

require_once 'header.php';

?>
<div class="container">
	<?php 

	if(isset($_POST['addnew'])){

		if( empty($_POST['username']) || empty($_POST['Pass'])){
			echo "Please fillout all required fields"; 
		}else{		
			$username  = $_POST['username'];
			$Pass 	= $_POST['Pass'];
			$sql = "INSERT INTO loginform(user,Pass) 
		    VALUES('$username','$Pass')";


			if( $con->query($sql) === TRUE){

				$sql1 = "SELECT * FROM loginform WHERE user = '$username' LIMIT 1";
				$result = $con->query($sql1);
				$row = $result->fetch_assoc();
				
				$sql2 = "INSERT INTO user_profile(user_id) 
		    	VALUES('".$row['id']."')";

				if($con->query($sql2) === TRUE){
					echo "<div class='alert alert-success'>Successfully added new user</div>";
				}else{
					echo "<div class='alert alert-danger'>Error: There was an error while adding new user</div>";
				}
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while adding new user</div>";
			}
		}
	}
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3> 
			<form action="" method="POST">
				<label for="username">Username</label>
				<input type="text" id="username"  name="username" class="form-control"><br>
				<label for="Pass">Password</label>
				<input type="password"  name="Pass" id="Pass" class="form-control"><br>
				<br>
				<input type="submit" name="addnew" class="btn btn-success" value="Add New">
			</form>
		</div>
	</div>
</div>
</div>

<?php 

 require_once 'footer.php';