<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
               background-color: transparent;
			
            }
            form,h3,h1,p,b,u,span,mark,a{
            background-color: white;
        }
            input {
            width: 250px; height: 25px; border-radius: 10px;
            padding: 5px;
            margin: 5px;
            border-radius: 10px;box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
            outline: none;transition: 0.3s;
            border: 2px solid white;
        }

        input:hover{
            border: 2px solid white; cursor: pointer    ;
            width: 300px;
        }
        center{
            background-color: transparent;
            color: white;
        }
         h1,h2,mark,center,h3,form{
            background-color: transparent;
            color: white;
         }
        </style>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="master.css">
    </head>
    <body>
    <div class="video-background">
        <video autoplay muted loop>
            <source src="../img/sub-sub.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="content">
    <center class="centerr" style="height:500px;" >
       <h1>Student Election System </h1>
		<h3> <mark> Candidate Registration Portal </mark></h3>
		
   
        <h3  >New Candidate's Details</h3>
        <form action="registerCandidateScript.php" method="post">
			
            <input type="text" placeholder="Name" name="name" >
            <br>
            <input type="email" placeholder="Email" name="email">
            <br>
            <input type="text" placeholder="Contact" name="contact">
            <br><br>
            <input  class="btn btn-primary" type="submit" name="submit" value="Register" style="height: 30px;" >
        </form><br><br>
        <button class="btn" style="height: 30px;"> <a href="index.php"  >Goto HOME</a></button>
        
    </center>
       
    </body>
</html>
