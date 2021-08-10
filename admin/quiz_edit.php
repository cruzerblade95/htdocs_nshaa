<?php 

require_once 'connect.php';

require_once 'header.php';

?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['question_title']))
		{
			echo "Please fillout all fields"; 
		}else{
			$quiz_no  = $_POST['quiz_no'];
			$question_no  = $_POST['question_no'];
			$question_title  = $_POST['question_title'];
			$is_answer  = $_POST['is_answer'];

			$sql = "UPDATE quiz_question SET 
            quiz_no='{$quiz_no}', 
            question_no = '{$question_no}',
            question_title = '{$question_title}',
            is_answer = '{$is_answer}'
            WHERE id=" . $_POST['id'];

			if( $con->query($sql) === TRUE){
					echo "<div class='alert alert-success'>Successfully updated  user</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
			}
		}
	}
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT * FROM
	quiz_question
	WHERE
	id={$id}";
	$result = $con->query($sql);

	if($result->num_rows < 1){
		header('Location: index.php');
		exit;
	}
	$row = $result->fetch_assoc();

    $sql3 = "SELECT * FROM quiz_main";
    $result1 = $con->query($sql3);
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY User</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                <label for="quiz_no">Quiz Number</label>
				<select name="quiz_no" id="quiz_no" class="form-control">
                    <?php
	                    while( $row1 = $result1->fetch_assoc()){ 
		                echo "<option value='".$row1['id']."'>".$row1['id']."</option>";
	                }
	                ?>
                </select>
				<label for="question_no">Question Number</label>
                <select name="question_no" id="question_no" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
				<label for="question_title">Question Title</label>
				<input type="text"  name="question_title" id="question_title" value="<?php echo $row['question_title'] ?? ''; ?>" class="form-control"><br>
				<label for="is_answer">Is Answer?</label>
				<select name="is_answer" id="is_answer" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
				<br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>

<?php 

 require_once 'footer.php';