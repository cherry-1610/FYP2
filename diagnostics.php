<?php
session_start();
$username = $_SESSION['username'];

if (isset($_POST['feverYes'])){
    
}

if (isset($_POST['feverYes'])){
    
}

if (isset($_POST['feverYes'])){
    
}

if (isset($_POST['feverYes'])){
    
}

if (isset($_POST['feverYes'])){
    
}

if (isset($_POST['feverYes'])){
    
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Home Quarantine Diagnostics</title>
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
                <td class="justify-content-center" align='center'><button class="btn btn-warning"><a class="btn"
                            href="logout.php">Log Out</a></button></td>
            </tr>
        </table>
    </div>
    <div class="container rounded bg-white pb-5" style="margin-top: 200px;">
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <h1 style="color: orange; text-shadow: 2px 2px 5px black;">PISAH</h1>
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
                            <td>
                                <br>1. Fever or chills
                                <br>
                                <button class="button button1"
                                    style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='feverYes'>YES
                                </button>
                                <button class="button button2"
                                    style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='feverNo'>NO
                                </button>
                            </td>
                            <td>
                                <br>2. Cough
                                <br><button class="button button1"
                                    style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='coughYes'>YES
                                </button>
                                <button
                                    class="button button2"
                                    style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='coughNo'>NO
                                </button>
                            </td>
                            <td>
                                <br>3. Difficulty breathing or shortness of breath
                                <br><button class="button button1"
                                    style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='breathYes'>YES
                                </button>
                                <button
                                    class="button button2"
                                    style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='breathNo'>NO
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>4. Runny or stuffy nose
                                <br><button class="button button1"
                                    style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='noseYes'>YES
                                </button>
                                    <button
                                    class="button button2"
                                    style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='noseNo'>NO
                                </button>
                            </td>
                            <td>
                                <br>5. Sore throat or trouble swallowing
                                <br><button class="button button1"
                                    style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='throatYes'>YES
                                </button>
                                    <button
                                    class="button button2"
                                    style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='throatNo'>NO
                                    </button>
                            </td>
                            <td>
                                <br>6. Decrease or loss of taste or smell
                                <br><button class="button button1"
                                    style="width: 80px; height:40px; background-color:#0BDE35" type='submit' name='tasteYes'>YES
                                </button>
                                    <button
                                    class="button button2"
                                    style="width: 80px; height:40px; margin:10px; background-color:red" type='submit' name='tasteNo'>NO
                                </button>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                    <table class="d-flex justify-content-center">
                        <tr>
                            <td><a href="empmainPage.php"><button class="btn btn-secondary">BACK</button></a></td>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>