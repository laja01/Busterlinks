<?php 
$user = 'root';
$pass = 'mysql';
$db = 'testdb';

$db = new mysql ('localhost', $user, $pass, $db)or die("unable to connect");
 echo"YO ITS ME SAMUEL!!";
 ?>