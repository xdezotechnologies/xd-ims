<?php 
$servername='localhost:3308';
$username='root';
$password='';
$dbname='xd-ims';
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
	echo "error in connecting database";
}
 ?>