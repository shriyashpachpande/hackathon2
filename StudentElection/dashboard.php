<?php
session_start();
if (!isset($_SESSION['vid'])) {
    header("location: voterLogin.php");
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="master.css">
<link rel="stylesheet" href="style.css">
<?php
//$id=$_GET['a'];
$id = $_SESSION['vid'];
$db = mysqli_connect("localhost", "root", "", "StudentVote");
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//$amt = $row['amt'];

?>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        form,h3,h1,p,b,u,span{
            background-color: white;
        }
        u{
            font-size: 16px;
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
        
    </style>
</head>

<body>
    <center class="centerr" style="background-color: white;" >
        <h1>Student Election System </h1>
        <h3> Voter's Dashboard </h3>

       
        <p><b> Hello, <span style="text-transform: uppercase;"><?php echo $row['name']; ?></span></b></p>


        <p>Student ID: <?php echo $row['studentId']; ?> </p>
       
        <?php
        $voted = $row['voted'];
        if ($voted == 1) {
            echo "<b><u>You have already voted.</u></b>";
        } else {
            echo "<b>You have not voted. Please Vote</b>";
            echo "<h2><a href='vote.php'>VOTE HERE</a></h2>";
        }
        ?>

        <div class="jumbotron">


            <p>


            </p>
        </div>
    
        <h3>Update Your Details</h3>
        <form action="update.php" method="post">
            <input type="text" placeholder="Enter your Registered Email:" name="email3" value="<?php echo $row['studentId']; ?>" readonly>
            <br>
            <input type="text" placeholder=" NEW Name" name="name2">

            <br>
            <input type="password" placeholder=" NEW Password" name="pass2" value="">
            <br><br>
            <input type="submit" name="submitUpd" value="Update" style="height: 30px; width:100px; ">
        </form>
      <br><br>
        <button class="btn"  style="height: 40px; ;"><a href="logout.php">LOGOUT</a></button>
        <button class="btn" style="height: 40px; ;"> <a href="index.php">Goto HOME</a></button>
    </center>
    
</body>

</html>