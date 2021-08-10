<?php
require '../connect.php';

$User = $_POST['User'];
$Score = $_POST['Score'];

$sql = "INSERT INTO quiz(User, Score) VALUES ('$User', '$Score')";
$result = mysqli_query($con, $sql);

if(!$result)
{
    echo mysqli_error($conn);
    die();
}
else
{
    echo "Query succesfully executed!";
}
?>