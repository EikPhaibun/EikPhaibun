<?php

include('connect.php');

header("Content-Type: application/json");
$numweb = $_GET["ID"];
$conn = new mysqli($host,$user,$pass,$dtbname);
if($conn->connect_error)
{
    die("connection failed: " . $conn->connect_error);
}
$come = $conn->query("SELECT * FROM datatest_project_swich WHERE id = '$numweb'");
$row = $come->fetch_assoc();
echo $row['status_switch'];

?>