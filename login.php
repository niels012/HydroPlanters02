<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cheatsheet/">
    <link rel="icon" type="image/x-icon" href="./images/HPlogo2.png">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./styles/styles.css" rel="stylesheet">
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="cheatsheet.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        padding-top: 10px;
      }
    </style>
    <link href="cheatsheet.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <?php include('header.php'); ?> 
    <div class="row section1 -">
      <div class="col-md-1"></div>
      <div class="col-md-10 ">
        <img src="./images/HD/2a.jpg" alt="login bg" class="login-img">
        <div class="login-wrap">
          <div class="login-html">
            <div class="center">
              <a href="index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
              <img src="./images/HPlogobig.png" alt="logo" width="80%" height="90">
              </a>
            </div>
            <!------------------------- THIS AREA IS FOR SIGN IN --------------------------------->
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab signup-tab">Create Account</label>
            <div class="login-form">
              <div class="sign-in-htm">
                <div class="group">
                  <label for="user" class="label">Username</label>
                  <input id="user" type="text" class="input">
                </div>
                <div class="group">
                  <label for="pass" class="label">Password</label>
                  <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                  <input id="check" type="checkbox" class="check" checked>
                  <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                  <input type="submit" class="button" value="Sign In">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                  <a href="#forgot">Forgot Password?</a> <br>
                  <a class="login-back" href="index.php"> Go back to Homepage</a>
                </div>
              </div>
              <!------------------------- THIS AREA IS FOR SIGN UP --------------------------------->
              <div class="sign-up-htm">
                <div class="group">
                  <label for="user" class="label">Username</label>
                  <input id="user" type="text" class="input">
                </div>
                <div class="group">
                  <label for="pass" class="label">Password</label>
                  <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                  <label for="pass" class="label">Repeat Password</label>
                  <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                  <label for="pass" class="label">Email Address</label>
                  <input id="pass" type="text" class="input">
                </div>
                <div class="group">
                  <input type="submit" class="button" value="Sign Up">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                  <label for="tab-1">Already Member?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
		</div>
		<?php include('footer.php'); ?> 
  </body>
</html>
