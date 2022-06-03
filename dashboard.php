<?php
session_start();
include('connection.php');
$username = $_SESSION['username'];
echo "&nbsp;";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body style="background-image: linear-gradient(to right top, #0c0908, #f27525);">
    <div style="float: right; padding-left:5px;" class="justify-content-center">
        <table class="table table-bordered table-light table-striped adminTab" style='margin-top:0;'>
            <tr>
                <td class="justify-content-center" align='center'>
                    <h4><b>Employee</b></h4>
                </td>
            </tr>
            <tr>
                <td class="justify-content-center" align='center'>
                    <h6><?php echo $username ?></h6>
                </td>
            </tr>
            <tr>
                <td class="justify-content-center" align='center'><button class="btn btn-warning"><a class="btn" href="logout.php">Log Out</a></button></td>
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
            <div class='col justify-content-center'>
                <table class="table table-bordered text-center table-dark table-striped">
                    <thead class="table-dark">
                        <tr class="">
                            <td class="">Fever or chills</td>
                            <td class="">Cough</td>
                            <td class="">Difficulty breathing or shortness of breath</td>
                            <td class="">Runny or stuffy nose</td>
                            <td class=""> Sore throat or trouble swallowing</td>
                            <td class="">Decrease or loss of taste or smell</td>
                            <td class="">Date</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ID = $_SESSION['ID'];
                        $sql = "SELECT * FROM healthassmt WHERE E_ID='$ID' order by date";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['fever'] ?></td>
                                    <td><?php echo $row['cough'] ?></td>
                                    <td><?php echo $row['breath'] ?></td>
                                    <td><?php echo $row['nose'] ?></td>
                                    <td><?php echo $row['throat'] ?></td>
                                    <td><?php echo $row['taste'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                </tr>

                        <?php
                            }
                        }
                        ?>
                        
                    </tbody>


                </table>
                <table class="table table-borderless">
                    <tr class=" d-flex justify-content-center">
                        <td><button class="btn btn-warning"><a href="empmainPage.php" class="btn">Back</a></button></td>
                    </tr>
                </table>


            </div>

        </div>
    </div>

    <!-- <button><a href="logout.php">logout</a></button> -->


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>