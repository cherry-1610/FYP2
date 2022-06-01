<!DOCTYPE html>

<html>
    <head>
        <body>
  <div class="container">
    <div class="card">
      <div class="form">
        <div class="left-side">
          <img src="img/logo PISAH.png" alt="logoPISAH" class="centerPisah">
        </div>
        <div class="right-side">
          <div class="signin_form s_form ">

              <h2 style="margin-bottom:20px;">Welcome to PISAH</h2>

              <div><h3>First time user? SIGN UP</h3></div>
              <div class="adminsup_btn"> <button class="adminsup_button" name="submit"><a href="adminsup.php">ADMIN SIGN UP</a></button> </div>

              <div><h3>Already had an account? LOG IN</h3></div>
              <div class="adminlogin_btn"> <button class="adminlogin_button" name="submit"><a href="adminlogin.php">ADMIN LOG IN</a></button> </div>
              <div class="emplogin_btn"> <button class="emplogin_button" name="submit"><a href="emplogin.php">EMPLOYEE LOG IN</a></button> </div>

            </div>
        </div>
      </div>
    </div>
  </div>
</body>
        <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200&display=swap');

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: linear-gradient(to right top, #0c0908, #f27525)
    }

    .container .card {
      height: 420px;
      width: 800px;
      background-color: #fff;
      position: relative;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      font-family: 'Roboto Slab', serif
    }

    .container .card .form {
      width: 100%;
      height: 100%;
      display: flex
    }

    .container .card .left-side {
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

    .login {
      display: flex;
      justify-content: center;
      text-align: center;
      width: 100%;
      margin-top: 20px
    }

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
      border-radius: 10px
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
      border-radius: 10px
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

    .adminsup_btn, .adminlogin_btn, .emplogin_btn {
      margin-top: 20px;
      margin-bottom: 20px;
      display: flex;
      justify-content: center;
      align-items: center
    }

    .adminsup_btn button, .adminlogin_btn button, .emplogin_btn button {
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

    .adminsup_btn button:hover, .adminlogin_btn button:hover, .emplogin_btn button:hover {
      background-color: #fa9c53;
    }


    .forgot p a {
      text-decoration: none
    }

    .create {
      margin-top: 40px;
      text-align: center;
      text-decoration: none;
      font-size: 13px;
      font-weight: 700
    }

    .margin {
      margin-top: 67px !important
    }

    .create a {
      text-decoration: none;
      color: blue
    }

    .signin_warn {
      border: 1px solid red !important
    }

    .signup_warn {
      border: 1px solid red !important
    }

    .signin_eye_wrn {
      border: 1px solid blue !important
    }

    .signup_eye_wrn {
      border: 1px solid blue !important
    }

    @media (max-width:750px) {
      .container .card {
        max-width: 350px
      }

      .container .card .right-side {
        width: 100%
      }

      .container .card .left-side {
        display: none
      }
    }

    .centerPisah {
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-top: 150px;

    }

    a {
      text-decoration: none;
      color: inherit;
    }
  </style>

    </head>
</html>


