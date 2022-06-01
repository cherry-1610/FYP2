<?php
include('connection.php');
if (isset($_POST['save'])) {
    $name = $_POST['A_username'];
    $pass = $_POST['A_password'];
    $email = $_POST['A_email'];
    $comp = $_POST['A_companyName'];
    $sql = "INSERT INTO admin (A_username, A_password, A_email, A_companyName) values ('$name','$pass','$email','$comp')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Register successful!');window.location.href='adminlogin.php';</script>";
    } else {
        echo "<script>alert('Something went wrong!');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Sign Up</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .input_text {
            margin-top: 20px;
            width: 100%;
            position: relative
        }

        input[type="text"] {
            height: 45px;
            width: 100%;
            border: none;
            background-color: #E7DCE6;
            outline: 0;
            padding: 5px 10px;
            padding-left: 25px;
            border-radius: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        input[type="email"] {
            height: 45px;
            width: 100%;
            border: none;
            background-color: #E7DCE6;
            outline: 0;
            padding: 5px 10px;
            padding-left: 25px;
            border-radius: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        input[type="password"] {
            height: 45px;
            width: 100%;
            border: none;
            background-color: #E7DCE6;
            outline: 0;
            padding: 5px 10px;
            padding-left: 25px;
            padding-right: 28px;
            border-radius: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .fa-lock {
            position: absolute;
            top: 15px;
            left: 10px;
            cursor: pointer;
            color: #70747C
        }

        .fa-user {
            position: absolute;
            top: 14px;
            left: 9px;
            cursor: pointer;
            color: #70747C
        }

        .fa-envelope {
            position: absolute;
            top: 15px;
            left: 7px;
            cursor: pointer;
            color: #70747C;
            font-size: 14px
        }

        .fa-eye-slash {
            position: absolute;
            top: 15px;
            right: 9px;
            cursor: pointer;
            color: #70747C
        }

        .fa-eye {
            position: absolute;
            top: 15px;
            right: 9px;
            cursor: pointer;
            color: #70747C
        }


        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box
        }

        .containerN {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: linear-gradient(to right top, #0c0908, #f27525)
        }

        .containerN .card {
            height: 420px;
            width: 800px;
            background-color: #fff;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            font-family: 'Roboto Slab', serif
        }

        .containerN .card .form {
            width: 100%;
            height: 100%;
            display: flex
        }

        .N .card .left-side {
            width: 50%;
            background-color: #fff;
            height: 100%;
            position: relative;
            overflow: hidden
        }

        .left-side span:nth-child(1) {
            position: absolute;
            transform: rotate(45deg);
            top: 70px;
            left: -100px;
            display: flex;
            height: 180px;
            width: 400px;
            border-top-right-radius: 150px;
            border-bottom-right-radius: 150px;
            border: 15px solid #7FC1D2;
            background-image: linear-gradient(to right, #D43CC6, #682E36)
        }

        .left-side span:nth-child(2) {
            position: absolute;
            transform: rotate(45deg);
            top: -20px;
            left: 130px;
            display: flex;
            height: 100px;
            width: 200px;
            border-top-right-radius: 150px;
            border-bottom-right-radius: 150px;
            background-image: linear-gradient(to right, #D43CC6, #682E36)
        }

        .left-side span:nth-child(3) {
            position: absolute;
            transform: rotate(45deg);
            top: 280px;
            left: -70px;
            display: flex;
            height: 100px;
            width: 200px;
            border-top-right-radius: 150px;
            border-bottom-right-radius: 150px;
            background-image: linear-gradient(to right, #D43CC6, #682E36)
        }

        .left-side span:nth-child(4) {
            position: absolute;
            transform: rotate(-135deg);
            top: 370px;
            left: 170px;
            display: flex;
            height: 100px;
            width: 200px;
            border-top-right-radius: 150px;
            border-bottom-right-radius: 150px;
            background-image: linear-gradient(to right, #FD2A6F, #FD2A46)
        }

        .container .card .right-side {
            width: 50%;
            background-color: #fff;
            height: 100%;
            padding: 20px
        }

        .d-none {
            display: none !important
        }

        .centerPisah {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 150px;

        }

        .register-button {
            margin-top: 20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .register-button {
            height: 45px;
            outline: 0;
            border: none;
            width: 100%;
            color: #fff;
            border-radius: 30px;
            background-color: #f07426;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.5s
        }

        .register-button:hover {
            background-color: #fa9c53;
        }

        h2 {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="containerN">
        <div class="card">
            <div class="form">
                <div class="left-side">
                    <img src="img/logo PISAH.png" alt="logoPISAH" class="centerPisah">
                </div>
                <div class="signup-form">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h2>Admin Registration</h2>
                        <p class="hint-text">Create your account</p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col"><input type="text" class="form-control" name="A_username" placeholder="Username" required="required"></div>
                                <div class="col"><input type="password" class="form-control" name="A_password" placeholder="Password" required="required"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="A_email" placeholder="Email" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="A_companyName" placeholder="Company Name" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="save" class="register-button">Register Now</button>
                        </div>
                </div>


                </form>
            </div>

            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>