<?php 


include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


 $sql = "INSERT INTO users (uid, pwd) 
 VALUES('$uid', md5('$pwd'))";

 $result = $conn->query($sql);


if($result){


header("Location:success.php");


}else{
	echo "Failed to input to db";
}
