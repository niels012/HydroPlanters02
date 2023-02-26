<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Gallery</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cheatsheet/">
    <link rel="icon" type="image/x-icon" href="./images/HPlogo2.png">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        includeHTML();
    </script>
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
    <div class="px-4 py-5 my-5 text-center gallery-small-img">
      <h1 class="display-5 fw-bold">Hydro <span class="green-text">Gallery</span></h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Come! See on how we grow plants hydrophonically</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"></div>
      </div>
    </div>
          <!------------------------- THIS IS AREA IS FOR PICTURES --------------------------------->
    </div>
        <div class="row section1 ">
            <div class="col-md-1"></div>
            <div class="col-md-10 ">
                <div class="images-container content-box">
                    <img src="./images/Gallery/image1.jpg" alt="">
                    <img src="./images/Gallery/image2.jpg" alt="">
                    <img src="./images/Gallery/image3.jpg" alt="">
                    <img src="./images/Gallery/image4.jpg" alt="">
                    <img src="./images/Gallery/image5.jpg" alt="">
                    <img src="./images/Gallery/image6.jpg" alt="">
                    <img src="./images/Gallery/image7.jpg" alt="">
                    <img src="./images/Gallery/image8.jpg" alt="">
                    <img src="./images/Gallery/image9.jpg" alt="">
                </div>
            </div>
            <div class="col-md-1"></div>
		</div>
              <!------------------------- THIS IS AREA IS FOR SIGN UP CALL TO ACTION --------------------------------->
    <div class="px-4 py-5 my-5 text-center gallery-big">
      <h1 class="display-5 fw-bold"><span class="green-text">Grow</span> with us</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">We also offer you training, guide, tips and tricks and also PDF's and Excels that can help you boost your garden efficiently like us. Sign up here now to access all of these.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="login.php"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Sign up</button></a>
      </div>
    </div>
		<?php include('footer.php'); ?> 
        <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="cheatsheet.js"></script>
  </body>
</html>
