<?php
session_start();
include('connection.php');
$fever = $_SESSION['fever'];
$cough = $_SESSION['cough'];
$breath = $_SESSION['breath'];
$nose = $_SESSION['nose'];
$throat = $_SESSION['throat'];
$taste = $_SESSION['taste'];
$ID = $_SESSION['ID'];

$sql = "INSERT INTO healthassmt (E_ID, fever, cough, breath, nose, throat, taste) values ('$ID','$fever','$cough','$breath','$nose','$throat','$taste')";
$result = mysqli_query($conn,$sql);
if($result){
    $_SESSION['fever']=null;
    $_SESSION['cough']=null;
    $_SESSION['breath']=null;
    $_SESSION['nose']=null;
    $_SESSION['throat']=null;
    $_SESSION['taste']=null;
    
    $update = "UPDATE employee SET dailyCheckIn='1' where E_ID='$ID'";
    $resultUpdate = mysqli_query($conn,$update);
    if($resultUpdate){
        header("location:empmainPage.php");
    }
    
}
?>
<a href="diagTest.php">Test</a>