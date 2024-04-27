<?php

$username = $_POST['n1'];
$pwd = $_POST['pword'];

$servername = "localhost";
$usename = "root";
$password = "root";
$dbname = "art";

$sql = "select * from user where name = '$username' and password = '$pwd'";

$conn = new mysqli($servername, $usename,$password,$dbname);

if($conn->connect_error){
	echo "Connection refused";
}

$rs = $conn->query($sql);

if($rs->num_rows>0){
	while($row = $rs->fetch_assoc()){
		$uname = $row['name'];
		$passwrd = $row['password'];

		if($username == $uname && $pwd == $passwrd){
			header("Location: mainpage.html");
		}
		else{
			echo '<script>alert("Check your name and password.")</script>';
		}
	}
}



?>