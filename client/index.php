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
			<div id="after-nav"></div>
			<?php include 'library/navigation.php';?>
			
			<div id="home" class="content-grid">
				<img id="home-layer-one" src="images/top-img.png" alt="Letterpress Business Card" />
				
				<div id="home-layer-two" class="section group">
					<div id="home-layer-two-one" class="col">
						<img src="images/quick-steps.png" alt="5 Quick Steps" />
					</div>
					<img src="images/shad.png" style="width:760px;height:12px;position:absolute;margin-left:260px;margin-top:10px;opacity:0.9;" />
					<div id="home-layer-two-two" class="col">
						<div id="first" class="img"></div>
						<div id="second" class="img"></div>
						<div id="third" class="img"></div>
						<div id="fourth" class="img"></div>
						<div id="fifth" class="img"></div>
					</div>
				</div>
				
				<div id="home-layer-three" class="section group">
					<div id="home-layer-three-one" class="col">
						<img src="images/steps.png" alt="5 Quick Steps" />
					</div>
					<div id="home-layer-three-two" class="col">
						<p>BE BOLD.</p>
					</div>
					<!--<img id="graphic" src="images/home-grp.png">-->
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