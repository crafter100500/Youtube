<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','youtube');
	$upd = mysqli_query($con, "UPDATE users SET name='{$_GET['name']}', phone='{$_GET['phone']}', email='{$_GET['email']}' WHERE id='{$_GET['id']}'");
	mysqli_query($con, $upd);
	header("Location: account.php?id={$_GET['id']}");
?>