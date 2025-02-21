<?php
session_start();
?>
<center class="centerr" style="height: 400px;">
    <?php
    $con = mysqli_connect("localhost", "root", "", "StudentVote") or die(mysqli_error($con));

    echo '<br><h1><center>Student Election System</center></h1>';
    echo '<h3><center>Your details has successfully been recorded</center></h3><br><br>';
    // if(isset($_POST['submitIns'])){
    echo "" . "Your details are:<br><br> ";
    $name = $_POST["name"];
    $email = $_POST["email"];

    $phone = $_POST["contact"];
    echo "Name : $name <br><br>";
    echo "Email : $email <br><br>";
    echo "Contact : $phone <br><br>";


    $insert_query = "insert into candidate(name, email, contact) VALUES('$name','$email','$phone')";
    $insert_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    //} elseif (isset($_POST['submit'])) {
    //}
    ?>
</center>
<style>
    .centerr{
        text-align: left;
        padding-left: 30px;
        background-color: white;
       position: relative;
        top: 60px;
    }
    center{
        background-color: white;
    }
    h1{
        background-color: white;
    }
    button{
        position: relative; left: 700px; top: -10px; height: 30px;
    }
</style>
<a href="./index.php"><button class="btn" >Home</button></a>

<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="master.css">
<link rel="stylesheet" href="style.css">