<?php

include('connect.php');
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
if(isset($_POST['submit01'])){
    $value_submit = $_POST['value_submit'];
    $conn = new mysqli($host,$user,$pass,$dtbname);
    if($conn->connect_error){
        die("Connecton failed: ".$conn->connect_error);
    }
    $conn->query("UPDATE datatest_project_swich SET status_switch = '$value_submit' WHERE id = 1");
}
if(isset($_POST['submit02'])){
    $value_submit = $_POST['value_submit'];
    $conn = new mysqli($host,$user,$pass,$dtbname);
    if($conn->connect_error){
        die("Connecton failed: ".$conn->connect_error);
    }
    $conn->query("UPDATE datatest_project_swich SET status_switch = '$value_submit' WHERE id = 2");
}
if(isset($_POST['submit03'])){
    $value_submit = $_POST['value_submit'];
    $conn = new mysqli($host,$user,$pass,$dtbname);
    if($conn->connect_error){
        die("Connecton failed: ".$conn->connect_error);
    }
    $conn->query("UPDATE datatest_project_swich SET status_switch = '$value_submit' WHERE id = 3");
}
// ------------------------------------------------------------------------------------------------------------------------------
$con_nect = new mysqli($host,$user,$pass,$dtbname);
if ($con_nect->connect_error) {
        die("Something wrong.: " . $con_nect->connect_error);
}
$sql = "SELECT * FROM datatest_project_swich WHERE id = 1";
$result = $con_nect->query($sql);
$row_tset = $result->fetch_assoc();
$list1 = $row_tset['status_switch'];

$con_nect = new mysqli($host,$user,$pass,$dtbname);
if ($con_nect->connect_error) {
        die("Something wrong.: " . $con_nect->connect_error);
}
$sql = "SELECT * FROM datatest_project_swich WHERE id = 2";
$result = $con_nect->query($sql);
$row_tset = $result->fetch_assoc();
$list2 = $row_tset['status_switch'];

$con_nect = new mysqli($host,$user,$pass,$dtbname);
if ($con_nect->connect_error) {
        die("Something wrong.: " . $con_nect->connect_error);
}
$sql = "SELECT * FROM datatest_project_swich WHERE id = 3";
$result = $con_nect->query($sql);
$row_tset = $result->fetch_assoc();
$list3 = $row_tset['status_switch'];
// -----------------------------------------------------------------------------------------------------------------------------------------------
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="design.css">
</head>

<body>

    <header>
        <p>TESTWEB</p>
    </header>


    <section>
        <aside>
        <form action="" method="POST">
            <input class="setting_bn01" type="hidden" name="value_submit" value=OFF>
            <input class="setting_bn01" type="submit" name="submit01" value="ปิด">
        </form>
        </aside>
        <aside>
        <form action="" method="POST">
            <input class="setting_bn02" type="hidden" name="value_submit" value=ON>
            <input class="setting_bn02" type="submit" name="submit01" value="เปิด">
        </form>
        </aside>
        <aside>
        <form class="text_onoff">
            <span id="span01">สถานะคือ : </span>
            <span id="span02"><?php echo $list1; ?></span>
        </form>
        </aside>
    </section>

    <section>
        <aside>
        <form action="" method="POST">
            <input class="setting_bn01" type="hidden" name="value_submit" value=OFF>
            <input class="setting_bn01" type="submit" name="submit02" value="ปิด">
        </form>
        </aside>
        <aside>
        <form action="" method="POST">
            <input class="setting_bn02" type="hidden" name="value_submit" value=ON>
            <input class="setting_bn02" type="submit" name="submit02" value="เปิด">
        </form>
        </aside>
        <aside>
        <form class="text_onoff">
            <span id="span01">สถานะคือ : </span>
            <span id="span02"><?php echo $list2; ?></span>
        </form>
        </aside>
    </section>

    <section>
        <aside>
        <form action="" method="POST">
            <input class="setting_bn01" type="hidden" name="value_submit" value=OFF>
            <input class="setting_bn01" type="submit" name="submit03" value="ปิด">
        </form>
        </aside>
        <aside>
        <form action="" method="POST">
            <input class="setting_bn02" type="hidden" name="value_submit" value=ON>ต
            <input class="setting_bn02" type="submit" name="submit03" value="เปิด">
        </form>
        </aside>
        <aside>
        <form class="text_onoff">
            <span id="span01">สถานะคือ : </span>
            <span id="span02"><?php echo $list3; ?></span>
        </form>
        </aside>
    </section>


</body>

</html>