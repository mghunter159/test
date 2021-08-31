<?php


require_once ('../connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

 

$query="INSERT INTO `comm`(`name`, `email`, `comment`) VALUES ('$name','$email','$comment')";



$result = mysqli_query($link,$query)
or die(mysqli_error($link));
 
mysqli_close($link);
?>