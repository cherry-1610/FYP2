<?php
  session_start();
  include('connection.php');
  if(isset($_POST['save'])){
      if($_POST['E_password']==$_POST['E_Cpassword']){
          $empID = $_POST['E_ID'];
          $ePass = $_POST['E_password'];
          $eName = $_POST['E_name'];
          $eLoc = $_POST['E_location'];
          $ePhoneNum = $_POST['E_phoneNum'];
          $ID = $_SESSION['ID'];
          $sql = "INSERT INTO employee (E_ID,E_pass,E_name,E_location,E_phoneNum,dailyCheckIn,ID_admin) values ('$empID','$ePass','$eName','$eLoc','$ePhoneNum','0','$ID')";
          $result = mysqli_query($conn,$sql);
          if ($result){
            echo "<script>alert('Employee registered!'); window.location.href='adminmainPage.php';</script>";
          }
      } else {
          echo "<script>alert('Password not match!')</script>";
      }
      
  }
  
?>
<!DOCTYPE html>

<html>

<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="css/styles.css">

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
                        <h2>Create Employee Account</h2>
                        <p class="hint-text">Create your Employee account</p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col"><input type="text" class="form-control" name="E_ID" placeholder="Employee ID" required="required"></div>
                                <div class="col"><input type="password" class="form-control" name="E_password" placeholder="Employee Password" required="required"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col"><input type="password" class="form-control" name="E_Cpassword" placeholder="Confirm Employee Password" required="required"></div>
                                <div class="col"><input type="text" class="form-control" name="E_name" placeholder="Employee Name" required="required"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col"><input type="text" class="form-control" name="E_location" placeholder="Employee Location" required="required"></div>
                                <div class="col"><input type="text" class="form-control" name="E_phoneNum" placeholder="Employee Phone Number" required="required"></div>
                            </div>
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