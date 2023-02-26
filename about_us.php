<!DOCTYPE html>
<html>
	<script>
		function includeHTML() {
		var z, i, elmnt, file, xhttp;
		/*loop through a collection of all HTML elements:*/
		z = document.getElementsByTagName("*");
		for (i = 0; i < z.length; i++) {
		elmnt = z[i];
		/*search for elements with a certain atrribute:*/
		file = elmnt.getAttribute("w3-include-html");
		if (file) {
		/*make an HTTP request using the attribute value as the file
		name:*/
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4) {
		if (this.status == 200) {elmnt.innerHTML = this.responseText;}
		if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
		/*remove the attribute, and call this function once more:*/
		elmnt.removeAttribute("w3-include-html");
		includeHTML();
		}
		}
		xhttp.open("GET", file, true);
		xhttp.send();
		/*exit the function:*/
		return;
		}
		}
		};
	</script>
<head>
    <title>About Us</title>
    <link rel="icon" type="image/x-icon" href="./images/HPlogo2.png">
</head>
<body>
    <header>
    <script>
			includeHTML();
		</script>
		<?php include('header.php'); ?> 
    <img src="./images/HD/LABH1.png" class="first" width="100%">
    <div>
			<div class="row section1">
				<div class="col-md-1"></div>
				<div class="col-md-10 content-box">
          <div class="row">
              <div class="col-md-6 about-item">
                  <h1 class="title">OUR STORY</h1>
                  <p>"Growing is at the heart of who we are and everything we do. We live it and breathe it.We’re not just helping along an entire movement of like-minded difference makers, rule breakers, and boundary pushers — we’re leading it."</p>
              </div>
              <div class="col-md-6 about-item"> One that wears its status as an altogether different breed like a badge of honor. A community built by those who wake up every day with the grit to create something extraordinary — and to do it on their terms. Who knows what it’s like to be told that their ideas are far-fetched. Who defy the voices that demand they be like everyone else. We take inspiration from those who refuse to follow the rules. We believe in the underdogs. The rebels. The nonconformists. Because that’s exactly how we got our start.As industry pioneers with more than 5 years in the game, you could say we’re one of the OGs of hydroponics. We’ve come a long way from our humble origins as a scrappy garage-based startup to becoming the leading name in high-impact growing solutions on a global scale. But the philosophy, development, and innovative spirit at the heart of our products is anything but old school. </div>
          </div>
          <hr>
          <!------------------------- THIS IS FOR FREQUENTLY ASK QUESTION --------------------------------->
					<div class="row">
            <article class="my-3" id="accordion">
              <div class="bd-heading align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                <h3>FAQ's</h3>
              </div>
              <div>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Is growing hydroponics expensive?
                      </button>
                    </h4>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Depending on the size and features, a hydroponic system costs as little as <strong>Php 2,000.00 or as much as several thousand pesos.</strong> Small, uncomplicated systems typically run between Php 2,000.00 and Php 200,000.00. Medium systems are at least several thousand pesos. A large system costs several hundred thousand pesos or more.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What are the plants that grow on hydroponics?
                      </button>
                    </h4>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Although almost any crop can be grown hydroponically, the most common are <strong>Leaf Lettuce, tomatoes, peppers, cucumbers, strawberries, watercress, celery and some herbs</strong>.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What are the benefits of lettuce?
                      </button>
                    </h4>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <ul>
                          <li><strong>Bone Strength.</strong> Lettuce is a source of vitamin K, which helps strengthen bones. Consuming adequate amounts of vitamin K can also reduce your risk of bone fracture.</li>
                          <li><strong>Hydration.</strong> Water makes up over 95% of raw lettuce. As a result, eating lettuce hydrates the body. Although drinking liquids is necessary, water in foods can also significantly contribute to hydration.</li>
                          <li><strong>Improved Vision.</strong> Lettuce is a source of vitamin A, which plays a role in eye health. Vitamin A can reduce a person's risk of cataracts. Vitamin A also helps prevent macular degeneration.</li>
                          <li><strong>Improved Sleep.</strong> Extracts of multiple lettuce types have also been shown to promote sleep. Until further research is conducted, it's unknown if lettuce in its natural form can produce a similar effect.</li>
                          <li><strong>Nutrition.</strong> The nutritional content of lettuce varies across varieties. Almost all lettuces contain a significant amount of vitamin A, along with small amounts of vitamin C and iron.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="CollapseFour">
                        What are some varieties of Lettuce
                      </button>
                    </h4>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        There are many varities of Lettuce, not to mention all, here are the varities we grow.
                        <ul>
                          <li>Grand Rapid</li>
                          <li>Red Rapid</li>
                          <li>Romaine</li>
                          <li>Lollo Bionda</li>
                          <li>Lollo Rosa</li>
                          <li>Butterhead</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Can we buy your products?
                      </button>
                    </h4>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      Yes you can, you may <a href="products.php">click here </a>to view our products
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
            </article>
          </div>
			</div>
      <div class="col-md-1"></div>
		</div>
		<?php include('footer.php'); ?> 
	</header>
   <main>
		<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
   </main>
</body>

</html>