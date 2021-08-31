<?php


require_once ('../connection.php');
 

$sql11 = "SELECT * FROM comm";
$result = $link->query($sql11);
$arr_users = [];
if ($result->num_rows > 0) {
    $arr_users = $result->fetch_all(MYSQLI_ASSOC);
}
foreach($arr_users as $user) {
	?>
<div class="card text-center cardw">
	<div class="card-header cardhg"><?php echo $user['name']?></div>
	<div class="card-body cardbg">
		<p><?php echo $user['email']?></p>
		<p><?php echo $user['comment']?></p>
</div>
</div>
	<?php
}


$result = mysqli_query($link,$sql11)
or die(mysqli_error($link));
 
mysqli_close($link);
//echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>


