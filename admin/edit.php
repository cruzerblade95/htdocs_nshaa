<?php 

require_once 'connect.php';

require_once 'header.php';

?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['username']) || empty($_POST['Pass']))
		{
			echo "Please fillout username & password fields"; 
		}else{
			$username  = $_POST['username'];
			$Pass 	= $_POST['Pass'];
			$name 	= $_POST['name'];
			$email  	= $_POST['email'];
			$no_tel  	= $_POST['no_tel'];
			$address  	= $_POST['address'];
			$sql = "UPDATE loginform SET user='{$username}', Pass = '{$Pass}'
						WHERE id=" . $_POST['userid'];
			$sql1 = "UPDATE user_profile SET name='{$name}', email = '{$email}', no_tel = '{$no_tel}', address = '{$address}'
						WHERE user_id=" . $_POST['userid'];

			if( $con->query($sql) === TRUE){
				if( $con->query($sql1) === TRUE){
					echo "<div class='alert alert-success'>Successfully updated  user</div>";
				}else{
					echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
				}
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
			}
		}
	}
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT 
	loginform.id,
	loginform.user, 
	loginform.Pass, 
	user_profile.name, 
	user_profile.email, 
	user_profile.no_tel, 
	user_profile.address 
	FROM
	loginform, 
	user_profile 
	WHERE
	loginform.id={$id}
	AND user_profile.user_id={$id}";
	$result = $con->query($sql);

	if($result->num_rows < 1){
		header('Location: index.php');
		exit;
	}
	$row = $result->fetch_assoc();
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY User</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['id']; ?>" name="userid">
				<label for="username">Username</label>
				<input type="text" id="username"  name="username" value="<?php echo $row['user'] ?? ''; ?>" class="form-control"><br>
				<label for="Pass">Password</label>
				<input type="password"  name="Pass" id="Pass" value="<?php echo $row['Pass'] ?? ''; ?>" class="form-control"><br>
				<label for="name">Full Name</label>
				<input type="text"  name="name" id="name" value="<?php echo $row['name'] ?? ''; ?>" class="form-control"><br>
				<label for="email">Email</label>
				<input type="email"  name="email" id="email" value="<?php echo $row['email'] ?? ''; ?>" class="form-control"><br>
				<label for="no_tel">No Telephone</label>
				<input type="number"  name="no_tel" id="no_tel" value="<?php echo $row['no_tel'] ?? ''; ?>" class="form-control"><br>
				<label for="address">Address</label>
				<textarea rows="4" name="address" class="form-control"><?php echo $row['address'] ?? ''; ?></textarea><br>
				<!-- <label for="address">Address</label>
				<textarea rows="4" name="address" class="form-control"><?php echo $row['address']; ?></textarea><br>
				<label for="contact">Contact</label> 
				<input type="text"  name="contact" id="contact"  value="<?php echo $row['contact']; ?>" class="form-control"><br> -->
				<br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>

<?php 

 require_once 'footer.php';