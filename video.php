<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Videos</title>
    <link rel="stylesheet" href="./css/common.css" />
    <link rel="stylesheet" href="./css/video.css" />
  </head>
  <body>
    <div class="logo">
      <a href="./mainpage.html"><img class="art" src="./img/logo2.jpg" /></a>
    </div>
    <div class="about">
      <a href="./about.html">About Us</a>
    </div>
    <div class="wrapper" style="position: relative; bottom: -50px">
      <h1>Videos</h1>
    </div>
    <div class="section">
      <div class="skill-card">
        <?php

            $servername = "localhost";
            $usename = "root";
            $password = "root";
            $dbname = "art";

            $conn = new MySqli($servername, $usename, $password, $dbname);

            $sql = "select * from video;";

            $query = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($query)) {
              ?>


            <div class="skill-card__header">
                <p style="font-size: 28px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 1.5em;
  padding-bottom: 15px;
  position: relative;
  color: white;" class="title"> <?php echo $row['title'];?></p>
            <video
                style="width: 100%; height: 100%; object-fit: cover"
                controls
            >
            <source src= "<?php echo 'upload/'.$row['name'];?>">
            </div>
        <?php } ?>
      </div>

      </div>
    </div>
  </body>
</html>