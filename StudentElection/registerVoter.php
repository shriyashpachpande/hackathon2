<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Home | Student Voting System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
    <style>
        input[type=text],input[type=password],input[type=submit],input {
            width: 250px;
            padding: 10px;
            margin: 5px;
            border-radius: 10px;
            background-color: white;
        }

    h1,h2,h3{
       color: white;
    }
    </style>
</head>

<body><br>
<div class="video-background">
        <video autoplay muted loop>
            <source src="../img/sub-sub.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="content">
    <center>
        <h1 style="background-color: transparent;" >Student Election System</h1>
        <h3 style="font-size: 25px;" >New User Registration </h3>
       
        <h3 style="font-size: 20px;" >New Record Insertion</h3>
        <div class="rform">

            <form action="registerVoterScript.php" method="post" class="form" >

                <div><input type="text"  class="formin" placeholder="Name" name="name"></div>
                <br>
                <div><input type="text"  class="formin" placeholder="StudentId" name="sid"></div>
                <br>
                <div><input type="password"  class="formin" placeholder="Password" name="pass"></div>
                <br>
                <div><input type="text" class="formin"  placeholder="Contact" name="contact"></div>
                <br>
                <div><input class="btn btn-primary" class="formin" type="submit" name="submit" value="Register" style="position: relative; right: 100px;" ></div>
            </form>
        </div>
        <div><a href="index.php"><button class="btn btn1" style="position: relative; top:-109px; border-radius: 10px; height: 40px;"> Goto HOME</button></a></div>

    </center>
    </div>
    
</body>

</html>