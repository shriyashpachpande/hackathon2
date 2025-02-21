<center class="centerr " style="height: 400px; margin-top: 150px;">
    <?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "", "studentVote") or die(mysqli_error($conn));
    $vid = $_SESSION['vid'];
    echo '<br><h1><center>Student Election System</center></h1>';
    echo "<div class='c1'>";
    echo "Your vote was successfully recorded.<br>";
    $cand_id = $_POST['chosen_candidate'];
    echo "voted to candidate with id= " . $cand_id;

    echo "</div>";
    $sql1 = "update users set voted='1' where id='$vid'";
    $query1_result = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    //echo "Done.<br>";

    $sql2 = "update candidate set voteCount = voteCount+1 where id='$cand_id' ";
    $query2_result = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
    //echo "<br>All Set.<br>";
    ?><br>
    <br><br><br>
    <button class="btn" style="height: 30px; "><a href="dashboard.php">Goto Dashboard</a></button>&emsp;
    <button class="btn" style="height: 30px; "><a href="logout.php">LOGOUT</a></button>
</center>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="master.css">
<style type="text/css">
    * {
        text-align: center;
    }

    .c1 {
        border: 2px solid yellow;
        display: inline-block;
        padding: 10px 20px;
    }

    h1 ,div,center,a{
  
        background-color: white;
    }
</style>