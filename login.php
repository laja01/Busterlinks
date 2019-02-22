<?php 

session_start();
include 'dbh.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


 $sql = "SELECT * FROM users WHERE uid='$uid' AND pwd=md5('$pwd')";
 $result = $conn->query($sql);
if(!$row = $result->fetch_assoc()){
	header("Location:dance.php?msg=Your+password+or+username+is+incorrect");
}else{
	$_SESSION['id'] = $row['id'];
	header("Location:dance.php");
}
