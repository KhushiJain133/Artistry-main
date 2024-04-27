<?php
        $name = $_POST['n1'];
        $email = $_POST['email'];
        $pwd = $_POST['pword'];

        $servername = "localhost";
        $usename = "root";
        $password = "root";
        $dbname = "art";
      

        $sqlinsert = "insert into user (name, email, password) values ('$name', '$email', '$pwd')";

        $conn = new MySqli($servername, $usename, $password, $dbname);

        if($conn->connect_error){
          echo "Connection error";
        }

        $flag = $conn->query($sqlinsert);

        if($flag == True){
          header("Location: login.html");
        }
?>