    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" type="text/css" href="master.css">

        <style>
            input[type=text],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            button {
                background-color: cyan;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
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

        .content{
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
b{
    color: white;
}

        h1,h2,h1,h3,h4{
            color: white;
            background-color: transparent;
        }
        </style>
        <?php
        if (!isset($_SESSION)) {
            session_start();
        }
        ?>
        <center style="background-color: transparent;color:white" >
            <h1 style=" background-color: transparent;" >Student Election System</h1>

            <h4>A Student Election Campaign Management Portal. Voting Made Easy.</h4>
        </center>
        <p>
            <center>
    </head>

    <body style="background-color:transparent;">
    <div class="video-background">
        <video autoplay muted loop>
            <source src="../img/sub-sub.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="content" >

        <h2 style="background-color: transparent;" >Voter Login Form</h2>

        <form action="loginSubmit.php" method="post" style="background-color: transparent;" >

            <div class="parent" style="background-color: transparent; " >
                <div class="container" style="height: 350px;width:40%; margin-left: 25%;background-color: transparent; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <br><label for="uname"><b style="text-align: left;">Username</b></label>
                    <input type="text" placeholder="Enter StudentID" name="uname" required>
                    <br><br>
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <p><mark><?php if (isset($_GET['error'])) {
                                    echo $_GET['error'];
                                } ?></mark> </p>
                    <button type="submit" style="font-size: 16px; font-weight: 700;" >Login</button>
                    <a href="index.php" style="color:white;" >New User? Register </a>
                </div>
            </div>
        </form>
        </div>
    </body>
    </html>