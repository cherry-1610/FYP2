<?php
session_start();
include('connection.php');
$username = $_SESSION['username'];
$ID = $_SESSION['ID'];

$date = date("Y-m-d");
// echo $date;

echo "&nbsp;";

$sql = "SELECT date from healthassmt where E_ID='$ID' and date='$date'";
$result = mysqli_query($conn,$sql);
if($result){
    if($result->num_rows>0){
        echo "<script>alert('You already answered health assessment for today!');window.location.href='empmainPage.php';</script>";
    }
}



// if($dateDB==$date){
//     echo "<script>alert('You already answered health assessment for today!');window.location.href='empmainPage.php';</script>";
// }
$dailyUpdate = "UPDATE employee SET dailyCheckIn='0' where E_ID='$ID'";
$resultUpdate = mysqli_query($conn,$dailyUpdate);
// if($resultUpdate){
   
// }



if (isset($_POST['feverYes'])) {
    $_SESSION['fever'] = "Yes";
}

if (isset($_POST['coughYes'])) {
    $_SESSION['cough'] = "Yes";
}

if (isset($_POST['breathYes'])) {
    $_SESSION['breath'] = "Yes";
}

if (isset($_POST['noseYes'])) {
    $_SESSION['nose'] = "Yes";
}

if (isset($_POST['throatYes'])) {
    $_SESSION['throat'] = "Yes";
}

if (isset($_POST['tasteYes'])) {
    $_SESSION['taste'] = "Yes";
}

//no
if (isset($_GET['feverNo'])) {
    $_SESSION['fever'] = "No";
}

if (isset($_POST['coughNo'])) {
    $_SESSION['cough'] = "No";
}

if (isset($_POST['breathNo'])) {
    $_SESSION['breath'] = "No";
}

if (isset($_POST['noseNo'])) {
    $_SESSION['nose'] = "No";
}

if (isset($_POST['throatNo'])) {
    $_SESSION['throat'] = "No";
}

if (isset($_POST['tasteNo'])) {
    $_SESSION['taste'] = "No";
}

//backbtn
if(isset($_POST['back'])){
    header('location:empmainPage.php');
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Home Quarantine Diagnostics</title>
    <link rel="stylesheet" href="css/styles.css">
    <?php
    if (isset($_SESSION['fever'])) {
        echo "<style>
                #fever>button:not(#backBtn>button){
                    pointer-events: none;
                    opacity: 0.3;
                }
            </style>";
    }

    if (isset($_SESSION['cough'])) {
        echo "<style>
                #cough>button:not(#backBtn>button){
                    pointer-events: none;
                    opacity:0.3;
                }
                
            </style>";
    }

    if (isset($_SESSION['breath'])) {
        echo "<style>
                #breath>button:not(#backBtn>button){
                    pointer-events: none;
                    opacity:0.3;
                }
                
            </style>";
    }

    if (isset($_SESSION['nose'])) {
        echo "<style>
                #nose>button:not(#backBtn>button){
                    pointer-events: none;
                    opacity:0.3;
                }
                
            </style>";
    }

    if (isset($_SESSION['throat'])) {
        echo "<style>
                #throat>button:not(#backBtn>button){
                    pointer-events: none;
                    opacity:0.3;
                }
                
            </style>";
    }

    if (isset($_SESSION['taste'])) {
        echo "<style>
                #taste>button:not(#backBtn>button){
                    pointer-events: none;
                    opacity:0.3;
                }
                
            </style>";
    }

    

    ?>
    

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

                <form action="" method="POST">
                    <table style="margin: 100px; width:100%">
                        <tr>
                            <td colspan="2" style="font-size: 30px;">
                                Do you have the following :
                            </td>
                        </tr>
                        <tr>
                            <td id="fever">
                                <br>1. Fever or chills
                                <br>
                                <button class="button button1" style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='feverYes'>YES
                                </button>
                                <button class="button button2" style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='feverNo'>NO
                                </button>
                            </td>
                            <td id="cough">
                                <br>2. Cough
                                <br><button class="button button1" style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='coughYes'>YES
                                </button>
                                <button class="button button2" style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='coughNo'>NO
                                </button>
                            </td>
                            <td id="breath">
                                <br>3. Difficulty breathing or shortness of breath
                                <br><button class="button button1" style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='breathYes'>YES
                                </button>
                                <button class="button button2" style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='breathNo'>NO
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td id="nose">
                                <br>4. Runny or stuffy nose
                                <br><button class="button button1" style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='noseYes'>YES
                                </button>
                                <button class="button button2" style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='noseNo'>NO
                                </button>
                            </td>
                            <td id="throat">
                                <br>5. Sore throat or trouble swallowing
                                <br><button class="button button1" style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='throatYes'>YES
                                </button>
                                <button class="button button2" style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='throatNo'>NO
                                </button>
                            </td>
                            <td id="taste">
                                <br>6. Decrease or loss of taste or smell
                                <br><button class="button button1" style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='tasteYes'>YES
                                </button>
                                <button class="button button2" style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='tasteNo'>NO
                                </button>
                            </td>
                        </tr>
                        <?php
                        if(isset($_SESSION['fever']) && isset($_SESSION['cough']) && isset($_SESSION['breath']) && isset($_SESSION['nose']) && isset($_SESSION['throat']) && isset($_SESSION['taste'])){
                            ?>
                        <tr id="submitDiag">
                            <td></td>
                            <td class=" border-0 d-flex justify-content-center pt-3"><button class="btn btn-warning"><a href="diagIns.php" class="btn ">SUBMIT</a></button></td>
                            <td></td>
                        </tr>
                            <?php
                        } else {
                            ?>
                        <tr id="submitDiag">
                            <td></td>
                            <td class=" border-0 d-flex justify-content-center pt-3"><button class="btn btn-warning" disabled><a href="diagIns.php" class="btn disabled">SUBMIT</a></button></td>
                            <td></td>
                        </tr>

                        <?php

                        }
                        ?>
                        
                    </table>
                    <table class="d-flex justify-content-center">
                        <tr id="backBtn">
                            <td><a href="locationEmp.php"><button class="btn btn-secondary" name="back">BACK</button></a></td>
                        </tr>
                    </table>
                </form>

            </div>

        </div>

        <style>
            .button1 {
                background-color: white;
                color: black;
                border: 2px solid #4CAF50;
            }

            .button1:hover {
                background-color: #4CAF50;
                color: white;
            }

            .button2 {
                background-color: white;
                color: black;
                border: 2px solid red;
            }

            .button2:hover {
                background-color: red;
                color: white;
            }
        </style>

        <!-- <button><a href="logout.php">logout</a></button> -->


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>