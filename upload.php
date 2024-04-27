<?php
$servername = "localhost";
$usename = "root";
$password = "root";
$dbname = "art";

$conn = new MySqli($servername, $usename, $password, $dbname);

$title = $_POST['title'];
$description = $_POST['description'];

if($_POST['upload']){
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_destination = "upload/".$file_name;

    if(move_uploaded_file($temp_name,$file_destination)){

        $sql = "insert into video (name, title, description) values ('$file_name', '$title', '$description')";

        if(mysqli_query($conn,$sql)){
            ?>
            <script type = "text/JavaScript">
            alert("Video uploaded sucessfully.");window.location.href='video.php';
            </script>
            <?php
        }
        
    }
    
}
?>
