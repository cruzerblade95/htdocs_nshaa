<?php 

require_once 'connect.php';

require_once 'header.php';

?>
<div class="container">
	<?php 

	if(isset($_POST['addnew'])){

		if( empty($_POST['question_title'])){
			echo "Please fillout all required fields"; 
		}else{		
			$quiz_no  = $_POST['quiz_no'];
			$question_no  = $_POST['question_no'];
			$question_title  = $_POST['question_title'];
			$is_answer  = $_POST['is_answer'];

			$sql = "INSERT INTO quiz_question(quiz_no,question_no,question_title,is_answer) 
		    VALUES('$quiz_no','$question_no','$question_title','$is_answer')";


			if( $con->query($sql) === TRUE){
					echo "<div class='alert alert-success'>Successfully added new quiz question</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while adding new quiz question</div>";
			}
		}
	}

    $sql3 = "SELECT * FROM quiz_main";
    $result1 = $con->query($sql3);
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New Quiz</h3> 
			<form action="" method="POST">
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
				<input type="text"  name="question_title" id="question_title" class="form-control"><br>
				<label for="is_answer">Is Answer?</label>
				<select name="is_answer" id="is_answer" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
				<br>
				<input type="submit" name="addnew" class="btn btn-success" value="Add New">
			</form>
		</div>
	</div>
</div>
</div>

<?php 

 require_once 'footer.php';