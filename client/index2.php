<?php
include('../auth.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home | Letterpress Business Cards</title>
		<?php include 'library/imports2.php';?>
		<link type="text/css" rel="stylesheet" href="../css/home.css"/>
	</head>
	<body>
		<div class="container">
			<?php include 'library/header.php';?>
			<?php include 'library/navi.php';?>
			<?php include 'library/navigation.php';?>
			<div class="content-grid">
				<img id="home-layer-one" src="images/top-img.png" alt="Letterpress Business Card" />
				
				<div id="home-layer-two" class="section group">
					<div id="home-layer-two-one" class="col">
						<img src="images/quick-steps.png" alt="5 Quick Steps" />
					</div>
					<div id="home-layer-two-two" class="col">
						<img src="images/step1.png" alt="5 Quick Steps" />
						<img src="images/step2.png" alt="5 Quick Steps" />
						<img src="images/step3.png" alt="5 Quick Steps" />
						<img src="images/step4.png" alt="5 Quick Steps" />
						<img src="images/step5.png" alt="5 Quick Steps" />
					</div>
				</div>
				
				<div id="home-layer-three" class="section group">
					<div id="home-layer-three-one" class="col">
						<img src="images/dialog.png" alt="5 Quick Steps" />
					</div>
					<div id="home-layer-three-two" class="col">
						<p>BE BOLD.</p>
					</div>
				</div>
				
				<div id="home-layer-four" class="section group">
					<div id="home-layer-four-one" class="col">
						<img src="images/icon-1.png" alt="Social Media Icon" />
						<img src="images/icon-2.png" alt="Social Media Icon" />
						<img src="images/icon-3.png" alt="Social Media Icon" />
						<img src="images/icon-4.png" alt="Social Media Icon" />
					</div>
					<div id="home-layer-four-two" class="col">
						<img src="images/pic.png" alt="Testimonial" />
					</div>
					<div id="home-layer-four-three" class="col">
						<p>let your cards say something.</p>
					</div>
				</div>
			</div>
			<?php include 'library/footer.php';?>
		</div>
	</body>
</html>