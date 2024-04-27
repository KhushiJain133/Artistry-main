<?php
$servername = "localhost";
$usename = "root";
$password = "root";
$dbname = "art";

$conn = new MySqli($servername, $usename, $password, $dbname);

$full_name = $_POST['name'];
$description = $_POST['desc'];
$email = $_POST['email'];
$type = $_POST['type'];

if($_POST['upload']){
    $full_name = $_POST['name'];
    $description = $_POST['desc'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_destination = "img/".$file_name;

    if(move_uploaded_file($temp_name,$file_destination)){

        $sql = "insert into image (file_name, full_name, description, email, type) values ('$file_name', '$full_name', '$description', '$email', '$type')";

        if(mysqli_query($conn,$sql)){
            ?>
            <script type = "text/JavaScript">
            alert("Image uploaded sucessfully.");window.location.href='mainpage.html';
            </script>
            <?php
        }
    }

}
?>
