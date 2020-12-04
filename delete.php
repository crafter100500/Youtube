<?php  
	$con = mysqli_connect("127.0.0.1", "root", "", "youtube");
	$del = mysqli_query($con, "DELETE users, videos FROM users INNER JOIN videos ON users.id = videos.user_id WHERE users.id='{$_GET['id']}'");
	mysqli_query($con, $del);
	header("Location: index.php?id={$_GET['id']}");
?>