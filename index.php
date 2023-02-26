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
    <title>HydroPlanters</title>
	<link rel="icon" type="image/x-icon" href="./images/HPlogo2.png">
  </head>
</head>
<body>
    <header>
		<?php include('header.php'); ?> 
		<script>
			includeHTML();
		</script>
		<div>
			<div class="row section1">
				<div class="col-md-1"></div>
				<div class="col-md-10 content-box">
					<?php include('content.php'); ?> 
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<?php include('footer.php'); ?> 
	</header>
   <main>
		<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
   </main>
</body>
</html>