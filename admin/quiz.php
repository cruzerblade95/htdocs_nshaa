<?php 

require_once 'connect.php';

require_once 'header.php';

echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM quiz_question WHERE id=" . $_POST['id'];
	if($con->query($sql) === TRUE){
	}
}

$sql 	= "SELECT * FROM quiz_question";
$result = $con->query($sql);

if( $result->num_rows > 0)
{ 
	?>
	<h2>List of all Quiz</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Quiz No</td>
			<td>Question No</td>
			<td>Question Title</td>
			<td>Is Answer?</td>
			<td width="70px">Delete</td>
			<td width="70px">EDIT</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['id']."' name='id' />"; //added
		echo "<tr>";
		echo "<td>".$row['quiz_no'] . "</td>";
		echo "<td>".$row['question_no'] . "</td>";
		echo "<td>".$row['question_title'] . "</td>";
		echo "<td>".$row['is_answer'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
		echo "<td><a href='quiz_edit.php?id=".$row['id']."' class='btn btn-info'>Edit</a></td>";
		echo "</tr>";
		echo "</form>"; //added 
	}
	?>
	</table>
<?php 
}
else
{
	echo "<br><br>No Record Found";
}
?> 
</div>

<?php 

 require_once 'footer.php';