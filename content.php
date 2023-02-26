<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Content</title>
    <link href="./styles/styles.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link rel="icon" type="image/x-icon" href="./images/HPlogo2.png">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .caption1 {
        position: absolute !important;
        padding-top: .50rem !important;
        padding-bottom: .25rem !important;
        color: #fff !important;
        }
    </style>
    <link href="http://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">
    <link href="./styles/carousel.css" rel="stylesheet">
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>  
  </head>
<body id="content">
<main>
		<!------------------------- THIS IS AREA IS FOR CAROUSEL --------------------------------->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/HD/4.JPG" class="first" width="100%" height="130%">
        <div class="container1">
          <div class="carousel-caption text-start caption1">
            <h1>What is Hydroponics?</h1>
            <p class="details">Learn soilless farming and grow crops directly in nutrient-rich water.</p>
            <p><a class="btn btn-lg btn-primary" href="#section1">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/HD/3.JPG" class="second" width="100%" height="120%">
        <div class="container">
          <div class="carousel-caption">
            <h1>Grow with us.</h1>
            <p class="details">We offer you training, guide, tips and also PDF's and Excels that can help you boost your garden efficiently.</p>
            <p><a class="btn btn-lg btn-primary" href="login.php">Sign up Now</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       <img src="./images/HD/5.JPG" class="third" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Fewer Resources.</h1>
            <p class="details">Hydroponic systems actually use less water than traditional soil-based systems.</p>
            <p><a class="btn btn-lg btn-primary" href="gallery.php">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!------------------------- THIS IS AREA IS STORY SECTIONS --------------------------------->
  <section id="section1" class="row">
    <div class="col-md-6 item-info">
      <h2>What is hydroponics? How does it work? How does hydroponic farming compare to traditional farming?</h2>
      <p>When we tell people that we grow our produce using hydroponics, we usually get something close to this response: 

  “Sounds cool…sounds like it has something to do with health food maybe? What even is it?”

  For all the hydro-curious folks out there, we've put together a primer on the basics of hydroponic farming. 

  We suggest you start here to learn the essentials of hydroponics, and if you're inspired to try growing some hydroponic plants of your own,</p>
    </div>
    <div class="col-md-6 img-box">
      <img src="./images/HD/Hydrophonics.JPG" class="item-img-1">
    </div>
  </section>
  <section id="section2" class="row">
    <div class="col-md-6 img-box">
      <img src="./images/HD/lettuce1.JPG" class="item-img-1 my-5 img-2">
    </div>
    <div class="col-md-6 item-info ">
      <h2>What is Hydroponics?</h2>
      <p>Hydroponics is a way to skip the soil, sub in a different material to support the roots of the plant, and grow crops directly in nutrient-rich water. There are multiple approaches to designing hydroponic systems, but the core elements are essentially the same.</p>
      <h3>What you need:</h3> 
      <ul>
        <li>Fresh water. Were talking primo, filtered stuff with a balanced pH. Most plants like water with a pH level around 6-6.5. You can adjust the acidity of your water with over-the-counter solutions found at your local hardware, garden, or hydroponic store.</li>
        <li>Oxygen. Don't drown your plants! In traditional farming, roots can get the oxygen needed for respiration from pockets of air in the soil. Depending on your hydroponic setup, you will either need to leave space between the base of your plant and the water reservoir, or you'll need oxygenate your container (think of bubbles in a fish tank), which you can accomplish by buying an air stone or installing an air pump.</li>
        <li>Root Support. Even though you don't need soil, your plant's roots still need a little something to hold on to. Typical materials include vermiculite, perlite, peat moss, coconut fiber, and rockwool. Stay away from materials that might compact (like sand) or that don't retain any moisture (like gravel).</li>
        <li>Nutrients. Your plant is going to need plenty of magnesium, phosphorus, calcium, and other nutrients to stay healthy and productive -- just like plants growing in the ground need healthy soil and fertilizer. When you're growing plants without soil, this “plant food” must be included in the water that's feeding your plants. While you can technically make your own nutrient solution, it's easy to buy mixtures online and in stores.</li>
        <li>Light. If you're growing your plants indoors, you might have to invest in some special lighting. Each kind of plant will have a different requirement for the amount of light it needs and for the placement of lights (typically referred to as Daily Light Integral or DLI).</li>
      </ul>
    </div>
  </section>
  <section id="section3" class="row">
    <div class="col-md-6 item-info">
      <h2>Higher Yields</h2>
      <p>Plants grown in well-managed hydroponic systems are living the good life. Since roots are bathed in all the nutrients they need, plants spend more time growing upward and less time and energy growing extensive root systems to search for food. Growth rates vary based on the type of system and quality of care, but hydro plants can mature up to 25 percent more quickly than the same plants grown in soil, with increased crop yield, to boot.</p>
    </div>
    <div class="col-md-6 img-box">
      <img src="./images/HD/pechay.JPG" class="item-img-1">
    </div>
  </section>
</main>
</body>
</html>
