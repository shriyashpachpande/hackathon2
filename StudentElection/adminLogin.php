<?php
if (!isset($_SESSION['adminLoggedin'])) {
    session_start();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <style type="text/css">
        body ,html{
            text-align: center;
            background-color: transparent; 
        }

        .container {
            margin-top: 10%;
            border: 2px solid white;
            padding-bottom: 5%;
            padding-right: 5%;
            padding-left: 5%;
            display: inline-block;
           
            border-radius: 10px;
        }

        input[type=text],input[type=password],input {
            width: 250px;
            height: 25px;
            border-radius: 10px;
            padding: 5px;
            margin: 5px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
            outline: none;
            transition: 0.3s;
            border: 2px solid white;background-color: #ffffff8c;
        }
        input::placeholder{
            color: black;
            font-size: 16px; padding-left: 30px;
        }
        input:hover {
            border: 2px solid white;
            cursor: pointer;
            width: 300px;
        }


        form {
          
            padding: 15px;
            display: inline-block;
            border-radius: 10px;

        }

       
    </style>

 
    <link rel="stylesheet" href="style.css">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            /* Prevent scrolling */
        }

        .video-background {
            position: fixed;
            /* Fixed position to cover the entire viewport */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            /* Hide overflow */
            z-index: -1;
            /* Place behind other content */
        }

        video {
            min-width: 100%;
            /* Ensure the video covers the width */
            min-height: 100%;
            /* Ensure the video covers the height */
            width: auto;
            /* Maintain aspect ratio */
            height: auto;
            /* Maintain aspect ratio */
            position: absolute;
            /* Positioning for centering */
            top: 50%;
            /* Center vertically */
            left: 50%;
            /* Center horizontally */
            transform: translate(-50%, -50%);
            /* Adjust for centering */
        }

        .content {
            position: relative;
            /* Position relative for z-index */
            z-index: 1;
            /* Place above the video */
            color: white;
            /* Text color */
            text-align: center;
            /* Center text */
            padding: 20px;
            /* Padding for content */
        }
    </style>
</head>

<body style="background-color: transparent;">
    <div class="video-background">
        <video autoplay muted loop>
            <source src="../img/sub-sub.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="content">
        <div class="container " style=" background-color: transparent ; display: block;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; margin-top: 100px; width: 40%; margin-left:25%; height:400px; border: 1px solid white;">
            <h1 style="background-color: transparent;color:white; " >Student Election System </h1>

            <h2 style="background-color: transparent; color: white;" >Login to Admin Panel</h2>
            <form target="" method="post" style="background-color: transparent;">
                <input type="text" name="username" placeholder="Username" value="">
                <br><br>
                <input type="password" name="pass" placeholder="Password" value="">
                <br><br>
                <input type="submit" name="loginbtn" value="Login" style="height: 30px;">
            </form><br><br>
            <a href="index.php"><button class="btn" style=" margin-top: -100px; border-radius: 10px;">Go to Home</button></a>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['loginbtn'])) {
    if ($_POST['username'] == "admin" & $_POST['pass'] == 'admin') {
        echo "login Successful";
        echo "<script>alert('login Successful')</script>";
        $_SESSION['adminLoggedin'] = "ok";
        header("location: result.php");
    } else {
        echo "<script>alert('Invalid Credentials.')</script>";
    }
}
?>