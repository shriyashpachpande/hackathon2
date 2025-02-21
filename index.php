<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home Page</title>
    <link rel="stylesheet" href="contact_us.css">
    <style>
        .text-deocartion {
            text-transform: uppercase;
            text-align: center;
            overflow: hidden;
            background-color: transparent;
            backdrop-filter: blur(5px);
            color: white;
        }

        /* styles.css */

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;

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

        h1 {
            font-size: 3em;
            /* Large heading */
        }

        p {
            font-size: 1.5em;
            /* Medium paragraph */
        }

        .scrolling-text {
            white-space: nowrap;
            /* Prevent text from wrapping */
            font-size: calc(1.125rem + 2.1vw);
            font-weight: 700;
            color: rgb(14, 46, 80);

            line-height: 1.2;
            font-family: 'Times New Roman', Times, serif;
            position: absolute;
            /* Positioning for animation */
            animation: scroll 20s linear infinite;
            /* Animation properties */
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
                /* Start off-screen to the right */
            }

            100% {
                transform: translateX(-100%);
                /* End off-screen to the left */
            }
        }

        td,
        tr,
        .baherch-div-greeen-sheld,
        .white-div {
            background-color: transparent;
        }
    </style>
</head>

<body>
    <div class="video-background">
        <video autoplay muted loop>
            <source src="img/123.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="content">
        <br><br>
        <div class="scrolling-text" style="text-transform: uppercase;     font-size: calc(1.125rem + 2.1vw);
            font-weight: 700;
            color: rgb(14, 46, 80); 
            line-height: 1.2;backdrop-filter: blur(10px);
            color: white;
            font-family:'Times New Roman', Times, serif; margin-top:-30px; ">
            Automated Paperless Transparent College System
        </div>
        <br><br>
        <div class="tablebox" style="background-color: transparent;">
            <table style="width: 100%; margin-left: 5px; border-spacing: 30px; background-color: white; background-color: transparent;">
                <tr style="background-color: transparent;">
                    <th class="columns-box"></th>
                    <th class="columns-box"></th>
                    <th class="columns-box"></th>
                    <th class="columns-box"></th>
                </tr>
                <tr style="background-color: transparent;">
                    <td class="iamges-property" style="background-color: transparent;">
                        <a href="StudentElection/index.php">
                            <div class="baherch-div-greeen-sheld" style="background-color: transparent;">
                                <div class="white-div" style="background-color: transparent;">

                                    <div class="text-deocartion">
                                        Student Elections
                                    </div>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td class="iamges-property">
                        <a href="villa.html">
                            <div class="baherch-div-greeen-sheld">
                                <div class="white-div">

                                    <div class="text-deocartion">
                                        Health And Leave Notifications
                                    </div>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td class="iamges-property">
                        <a href="home.html">
                            <div class="baherch-div-greeen-sheld">
                                <div class="white-div">

                                    <div class="text-deocartion">
                                        Campus Facility Booking
                                    </div>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td class="iamges-property">
                        <a href="office.html">
                            <div class="baherch-div-greeen-sheld">
                                <div class="white-div">

                                    <div class="text-deocartion">
                                        Transparent Application & Approval System
                                    </div>
                                </div>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="iamges-property">
                        <div class="baherch-div-greeen-sheld">
                            <div class="white-div">

                                <div class="text-deocartion">
                                    Academic Integrity & cheating record
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="iamges-property">
                        <a href="complaint/index.php">
                            <div class="baherch-div-greeen-sheld">
                                <div class="white-div">

                                    <div class="text-deocartion">
                                        Anonymous complaint system
                                    </div>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td class="iamges-property">
                        <a href="Budget/budget.html">
                            <div class="baherch-div-greeen-sheld">
                                <div class="white-div">

                                    <div class="text-deocartion">
                                        College Budget & Sponsorship Tracking
                                    </div>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td class="iamges-property">
                        <a href="login.php">
                            <div class="baherch-div-greeen-sheld">
                                <div class="white-div">

                                    <div class="text-deocartion">
                                        Login
                                    </div>
                                </div>
                            </div>
                        </a>
                    </td>
                </tr>
            </table>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <!--------------------------------------------------------------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------------------------------->
  
  
        <div class="contact-us-outer">
            <h1 class="para1" style="text-align: center;     font-size: 42px;margin: 0 0 16px;color: #0E2E50;font-weight: 700;line-height: 1.2;padding-left: 20px;position: relative;top: 80px;">Contact Us</h1>

            <p class="info" style="position: relative; top: 80px; text-align: center; letter-spacing: 1px; font-size: 18px;"> Contact Us Today For Information & Can save Your Organiazation Time And Money</p>
            <br><br><br><br><br><br><br>

            <div class="contact-three-box-outer" style="    height: 130px;width: 96%; margin-left: 2%; background-color: rgb(255, 255, 255); display: flex; justify-content: space-around;">
                <div class="contact-three-box-inner" style="height: 100px; width: 30%; position: relative; top: 15px; background-color: #EFFDF5; border: 1px dashed rgb(0, 185, 142, 1);">
                    <div class="contactbox1" style="height: 70px; width: 90%; background-color: rgb(255, 255, 255); position: relative; top: 15px; margin-left: 5%;">
                        <p class="info" style="position: relative; top: 20px;     color: #666565;font-size: 16px;font-family: sans-serif; padding-left: 20px; font-weight: 400; line-height: 25px;"> <i class="fa-solid fa-location-dot"></i> &emsp; &emsp;Nanded , Maharashtra, India</p>
                    </div>
                </div>
                <div class="contact-three-box-inner" style="height: 100px; width: 30%; position: relative; top: 15px; background-color: #EFFDF5; border: 1px dashed rgb(0, 185, 142, 1);">
                    <div class="contactbox1" style="height: 70px; width: 90%; background-color: rgb(255, 255, 255); position: relative; top: 15px; margin-left: 5%;">
                        <p class="info" style="position: relative; top: 20px;     color: #666565;font-size: 16px;font-family: sans-serif; padding-left: 20px; font-weight: 400; line-height: 25px;"> <i class="fa-solid fa-envelope"></i> &emsp; &emsp;srpshriyash@email.com</p>
                    </div>
                </div>
                <div class="contact-three-box-inner" style="height: 100px; width: 30%; position: relative; top: 15px; background-color: #EFFDF5; border: 1px dashed rgb(0, 185, 142, 1);">
                    <div class="contactbox1" style="height: 70px; width: 90%; background-color: rgb(255, 255, 255); position: relative; top: 15px; margin-left: 5%;">
                        <p class="info" style="position: relative; top: 20px;     color: #666565;font-size: 16px;font-family: sans-serif; padding-left: 20px; font-weight: 400; line-height: 25px;"> <i class="fa-solid fa-envelope"></i> &emsp; &emsp;+91 883 006 6800</p>
                    </div>
                </div>
            </div>

            <div class="fontaweson">
                <i class="fa-solid fa-location-dot userlo" style="color: #00b98e;"></i>
            </div>
            <div class="fontaweson" style="position: relative; bottom: 133px; left: 410px;">
                <i class="fa-solid fa-envelope userlo"></i>
            </div>
            <div class="fontaweson" style="position: relative; bottom: 175px; left: 830px;">
                <i class="fa-solid fa-phone userlo"></i>
            </div>


            <div class="ajent-box-outer1" style="position: relative; bottom: 50px;height: 520px; width: 100%; background-color: rgb(255, 255, 255); margin-left: 0%;">




                <div class="ajent-box-inner" style="height: 480px;width: 96%;background-color: #EFFDF5;margin-left: 2%;position: relative;top: 20px;">



                    <div class="inner_with_main_content" style="height: 440px;background-color: rgb(255, 255, 255); width: 96%; position: relative; top: 20px; margin-left: 2%; border: 1px dashed rgb(0, 185, 142, 1); display: flex;    align-items: center;">


                        <div class="inner_box1">
                            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d735.2383784093411!2d77.3300495812755!3d19.179060866396036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd1d66bb9d31721%3A0x43892c180155daf1!2sNanded%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1716314783654!5m2!1sen!2sin" width="480" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                        </div>
                        <div class="inner_box2">
                            <h1 class="contact-para1" style="text-align: center;">
                                Contact Me
                            </h1>

                            <form action="index.php" method="post">
                                <input type="text" placeholder="Username" class="contact-form" id="contact-username" name="contact-username">

                                <input type="email" placeholder="Email" class="contact-form" id="contact-Email" name="contact-Email">
                                <br><br>
                                <input type="text" placeholder="Subject" class="contact-form-subject" id="contact-Subject" name="contact-Subject">
                                <br><br>
                                <textarea placeholder="Message" class="contact-message" id="contact-message" name="contact-message"></textarea>
                                <br><br>
                                <input type="submit" name="submit" value="Send Message" class="contact-submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>

</html>