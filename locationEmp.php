<?php
session_start();
include('connection.php');
$username = $_SESSION['username'];
$ID = $_SESSION['ID'];
echo "&nbsp;";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Employee Location</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body style="background-image: linear-gradient(to right top, #0c0908, #f27525);">
    <div style="float: right; padding-left:5px;" class="justify-content-center">
        <table class="table table-bordered table-light table-striped adminTab">
            <tr>
                <td class="justify-content-center"><h4><b>Admin</b></h4></td>
            </tr>
            <tr>
                <td class="justify-content-center"><h6><?php echo $username ?></h6></td>
            </tr>
            <tr>
                <td class="justify-content-center"><button class="btn btn-warning"><a class="btn" href="logout.php">Log Out</a></button></td>
            </tr>
        </table>
    </div>
    <div class="container rounded bg-white pb-5" style="margin-top: 200px;">
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <img src="img/logo_PISAH-removebg-preview.png" alt="">
            </div>
        </div>


        <div class='row'>
            <div class='col d-flex justify-content-center'>
                <table class="table">
                    <tr>
                        <th class="thead">Employee Name</th>
                        <th class="thead">Emplyee ID</th>
                        <th class="thead">Employee Location</th>
                        <th class="thead">Employee Phone Number</th>
                        <th class="thead">Quarantine Start Date</th>
                    </tr>
                    
                    <?php
                    $sql = "SELECT * from employee where ID_admin='$ID'";
                    $result = mysqli_query($conn,$sql);
                    if($result->num_rows > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $row['E_name'] ?></td>
                                <td><?php echo $row['E_ID'] ?></td>
                                <td><?php echo $row['E_location'] ?></td>
                                <td><?php echo $row['E_phoneNum'] ?></td>
                                <td><?php echo $row['quarantineStartDate'] ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='4'>No Employee Record</td></tr>";
                    }
                    ?>
                </table>
            </div>

        </div>

        <!-- <button><a href="logout.php">logout</a></button> -->


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>