<?php
session_start();
?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentVote";

echo "<h1>Student Election System </h1>";
echo "<h2>Please vote your candidate.</h2>";
echo "<h2>Registed Candidates are:<br></h2>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email FROM candidate";
$result = $conn->query($sql);

?>
<form action='voteCaste.php' method='POST'>
    <table class="table table-striped table-bordered table-hover">
    <tr>
        <th></th>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
        <tr><label>
            <td><?php echo "<input type=\"radio\" name=\"chosen_candidate\" value=\"" . $row['id'] . "\">";?></td>
            <td><?php echo $row['id']; ?> </td>
            <td><?php echo $row['name']; ?> </td>
            <td><?php echo $row['email']; ?> </td>
            </label></tr>
    <?php 
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </table>
    <input type="submit" value="Vote Now" class="btn" style="background-color: white;  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px !important;">
</form>
<style>
    body {
        background-color: #e7f7f3;
        font-family: "Secular One", serif;
        text-align: center;
        max-width: 750px;
        margin-right: auto;
        margin-left: auto;
    }

    h1 {
        color: aqua;
    }

   
    table,tr,td,th,b{
        background-color: white;
        transition: 0.3s;
    }
    tr:hover{
        transform: scale(1.1);
    }
</style>