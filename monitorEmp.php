<?php
session_start();
include('connection.php');
echo "&nbsp;";
$ID = $_SESSION['ID'];
$username = $_SESSION['username'];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Monitor Employee</title>
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
                <?php
                
                $date = date("Y-m-d");

                

                $sql = "SELECT * from employee  WHERE ID_Admin='$ID'";
                $result = mysqli_query($conn,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <table class="table table-bordered table-striped m-3 justify-content-center">
                            <tr>
                                <td><b>Name:</b></td>
                                <td><?php echo $row['E_name'] ?></td>
                            </tr>
                            <tr>
                                <td><b>User ID:</b></td>
                                <td><?php echo $row['E_ID'] ?></td>
                            </tr>
                            <tr>
                                <td colspan="1"><b>Daily Check In:</b></td>
                                <td>
                                    <?php
                                    if($row['dailyCheckIn']==1){
                                        ?>
                                        <button class="btn btn-success justify-content-center">YES</button>
                                        <?php
                                    } else {
                                        ?>

                                        <button class="btn btn-danger">NO</button>
                                        <?php
                                    }
                                    ?>
          
                                </td>
                            </tr>
                        </table>
                    <?php
                    }
                }
?>
                        

            </div>

        </div>

        <!-- <button><a href="logout.php">logout</a></button> -->


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>