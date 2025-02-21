<!DOCTYPE html>
<html>

<head>
    <title>Student Voting Campaign Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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

<body>
    <div class="video-background">
        <video autoplay muted loop>
            <source src="bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="content">
        <br>
        <div class="center">
            <div class="esystem" style="background-color: transparent;color: white;">
                Student Election System
            </div>
            <div class="ehome">
                <a href="../index.php"><button>Home</button></a>
            </div>
        </div>
        <br><br>
        <div class="main" style="background-color: transparent;">
            <div class="container" style="background-color: transparent;">
                <div class="box1 div1"><a href="registerVoter.php" style="background-color: transparent; color: white;">Voter Registration</div></a>
                <div class="box1 div2"> <a href="voterLogin.php " style="background-color: transparent;color: white;">Voter Login</div></a>
                <div class="box1 div3"><a href="registerCandidate.php" style="background-color: transparent;color: white;">Candidate Registration</div></a>

            </div>
            <div class="container2" style="background-color: transparent;color: white;">
                <div class="box1 div4"><a href="adminLogin.php" style="background-color: transparent;color: white;">Admin Login</div>
                <div class="box1 div5"><a href="about.php" style="background-color: transparent;color: white;">About</div>
            </div>
        </div>

    </div>

</body>

</html>