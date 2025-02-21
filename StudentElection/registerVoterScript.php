
<style>
  h2,h3{
    color: white;
  }
  center{
    color: white;
    letter-spacing: 1px;
  }
</style>
<?php
    $con = mysqli_connect("localhost", "root", "", "StudentVote") or die (mysqli_error($con));
        
    echo '<br><h2><center>Student Election System</center></h2>';
   echo '<h3><center>Your details has successfully been recorded</center></h3>';
  ?><br><br><br>
    <div class="result">
    <?php
        echo "<span class='p'>Your details are:</span><br>";
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["sid"]);
        $pass = htmlspecialchars($_POST["pass"]);
        $phone = htmlspecialchars($_POST["contact"]);
        echo "Name : $name <br>";
        echo "Email : $email <br>";
        echo "Contact : $phone <br>";
        echo "Password : ****** <br>";
?>
</div><?php
        $insert_query = "insert into users( name, studentId, pass_word, mobileNumber) VALUES('$name','$email','$pass','$phone')";
        $insert_submit= mysqli_query($con, $insert_query) or die(mysqli_error($con));
   //} elseif (isset($_POST['submit'])) {
//}
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
  <div class="video-background">
        <video autoplay muted loop>
            <source src="bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="content">
  </body>
  </html>
<style>
    hr{
        align-items: center;
        width: 500px;
    }
    </style>
    <center>
    <a href="./index.php"> <button class="rb" >Home</button></a>
    </center>
<link rel="stylesheet" type="text/css" href="style.css">
