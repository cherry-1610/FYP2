<?php
session_start();
$_SESSION['fever']=null;
$_SESSION['cough']=null;
$_SESSION['breath']=null;
$_SESSION['nose']=null;
$_SESSION['throat']=null;
$_SESSION['taste']=null;
echo $_SESSION['fever']."<br>";
echo $_SESSION['cough']."<br>";
echo $_SESSION['breath']."<br>";
echo $_SESSION['nose']."<br>";
echo $_SESSION['throat']."<br>";
echo $_SESSION['taste']."<br>";


if (!$_SESSION['fever']){
    echo "nope!";
}
?>