<?php
session_start();
include('connection.php');
$username = $_SESSION['username'];
$ID = $_SESSION['ID'];
if (isset($_POST['update'])) {
    $startDate = $_POST['startDate'];
    $sql = "UPDATE employee SET quarantineStartDate='$startDate' WHERE E_ID='$ID'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Succesfully updated!');window.location.href='empmainPage.php';</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Admin Main Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body style="background-image: linear-gradient(to right top, #0c0908, #f27525);">
    <div style="float: right; padding-left:5px;" class="justify-content-center">
        <table class="table table-bordered table-light table-striped adminTab">
            <tr>
                <td class="justify-content-center">
                    <h4><b>Employee</b></h4>
                </td>
            </tr>
            <tr>
                <td class="justify-content-center">
                    <h6><?php echo $username ?></h6>
                </td>
            </tr>
            <tr>
                <td class="justify-content-center"><button class="btn btn-warning"><a class="btn" href="logout.php">Log Out</a></button></td>
            </tr>
        </table>
    </div>
    <div class="container rounded bg-white pb-5" style="margin-top: 200px;">
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <h1 style="margin: 50px;color: orange; text-shadow: 2px 2px 5px black;">PISAH</h1>
            </div>
        </div>


        <div class='row'>
            <div class='col d-flex justify-content-center'>
                <form action="" method="post">
                    <table class="table table-borderless" style="margin:50px">
                        <tr>
                            <td style=>Qurantine Start Date: </td>
                            <td><input type="date" name="startDate" id="startDate"></td>
                        </tr>
                    </table>
                    <button type="submit" name="update" class="btn btn-primary profile-button m-2" 
                    style="background-color: orange; border-color: orange; width:150px; height:50px">UPDATE</button>
                </form>
            </div>

        </div>

        <!-- <button><a href="logout.php">logout</a></button> -->


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>