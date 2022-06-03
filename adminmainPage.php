<?php
session_start();
include('connection.php');
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Admin Main Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body style="background-image: linear-gradient(to right top, #0c0908, #f27525);">
    <div style="float: right; padding-left:5px;" class="justify-content-center">

    </div>
    <div class="container rounded bg-white pb-5" style="margin-top: 200px;">
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <img src="img/logo_PISAH-removebg-preview.png" alt="">
            </div>
        </div>


        <div class='row'>
            <div class='col d-flex justify-content-center'>
                <fieldset style='width: 100%'>

                    <table border='0' align='center' width='100%'>
                        <tr>
                            <td class="" style='padding:10px; width:33%;' align='center'><a href='locationEmp.php'><img
                                        src='img/address.png'></a></td>
                            <td class="" style='padding:10px; width:33%;' align='center'><a href='createEmp.php'><img
                                        src='img/add-friend.png'></a></td>
                            <td class="" style='padding:10px; width:33%;' align='center'><a href='monitorEmp.php'><img
                                        src='img/monitor.png'></a></td>

                        </tr>

                        <tr>
                            <td align='center' style='padding-bottom:5px;'> View Employee Location </td>
                            <td align='center' style='padding-bottom:5px;'> Create Employee Profile </td>
                            <td align='center' style='padding-bottom:5px;'> Monitor Employee's Health Daily Check In
                            </td>

                        </tr>

                        <table class="table table-bordered table-light table-striped adminTab" style='margin-top:50px'>
                            <tr>
                                <td class="justify-content-center" style='padding:10px; width:33%;' align='center'>
                                    <h4><b>Admin</b></h4>
                                </td>
                            </tr>
                            <tr>
                                <td class="justify-content-center" style='padding:10px; width:33%;' align='center'>
                                    <h6><?php echo $username ?></h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="justify-content-center" style='padding:10px; width:33%;' align='center'><button class="btn btn-warning"><a class="btn"
                                            href="logout.php">Log Out</a></button></td>
                            </tr>
                        </table>
                    </table>
                </fieldset>
            </div>

        </div>

        <!-- <button><a href="logout.php">logout</a></button> -->


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>