<!DOCTYPE html>
<?php
	include '../connect.php';
	$id = $_COOKIE["user2"];
	
	$result = mysql_query("SELECT * FROM tblpreorder WHERE id='$id'");
	while($row = mysql_fetch_array($result)){
		$paperType = $row['papertype'];
		$plyFront = $row['plyfront'];
		
		if(($paperType == "duplex-stock") || ($plyFront == "2")){
			echo "
				<script src='../js/jquery-1.7.2.min.js'></script>
				<script>
				$(document).ready(function(){
						$( '#edging-hidden' ).addClass( 'activated', -1000);
						$( '#edging-hidden' ).removeClass( 'deactivated')
						
						$( '#image' ).addClass( 'deactivated', -1000);
						$( '#image' ).removeClass( 'activated');
				});
				</script>
			";
		}
		else{
			echo "
				<script src='../js/jquery-1.7.2.min.js'></script>
				<script>
				$(document).ready(function(){
						$( '#duplex-color-tab-hidden' ).addClass( 'deactivated', -1000);
						$( '#duplex-color-tab-hidden' ).removeClass( 'activated')
						
						$( '#image' ).addClass( 'activated', -1000);
						$( '#image' ).removeClass( 'deactivated');
				});
				</script>
			";
		}
	}
?>
<html>
	<head>
		<title>Pricing & Ordering | Letterpress Business Cards</title>
		<?php include 'library/imports1.php';?>
		<link type="text/css" rel="stylesheet" href="css/pricing.css"/>
		<link type="text/css" rel="stylesheet" href="css/pricing.css"/><link type="text/css" rel="stylesheet" href="css/2cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/3cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/6cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/7cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/8cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/9cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/10cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/11cols.css"/>
		<link type="text/css" rel="stylesheet" href="css/12cols.css"/>
	</head>
	<body>
		<div class="container">
			<?php include 'library/header.php';?>
			<?php include 'library/navigation.php';?>
			<?php include 'library/navi.php';?>
			<div class="content-grid">
				<div class="title">
					<p id="title">PRICING <span> & </span> ORDERING</p>
					<p id="sub-title">LET'S GET YOUR DESIGN ON</p>
				</div>
				<div id="tabs">
					<ul>
						<li><img src="images/pricing-1.png"></li>
						<li><img src="images/pricing-2.png"></li>
						<li><img src="images/pricing-3.png"></li>
						<li><img src="images/pricing-4.png"></li>
						<li><img src="images/pricing-5-active.png" style="height:65px;"></li>
						<li><img src="images/pricing-6.png"></li>
						<li id="total"></li>
					</ul>
				</div>
			</div>
			<br/><br/>
			<form action="extras-process.php" method="post">
				<div class="content-grid">
					<input type="radio" id="standard" name="size" value="all" checked>
					<label class="size" for="standard">
						<div>
							<h2 class="text-option">SHAPING</h2>
						</div>
					</label>
					<br/><br/>
					<div id="extras-box">
						<div class="section group">
							<div class="col span_1_of_2">
								<div  class="col span_1_of_12">
									<div id="shaping1" class="radioBtn">
										<div id="shape1" class="radioBtnInside" style="display:none">
											
										</div>
									</div>
								</div>
								<div class="col span_7_of_12">
									<h2 class="color-text3 left">ADD CORNER ROUNDING?</h2>
								</div>
								
								<div class="section group">
									<div class="col span_1_of_12">
									</div>
									
									<div class="col span_5_of_12">
										<div class="section group">
											<div class="col span_1_of_2">
												<div  class="col span_1_of_12">
													<div id="inch1" class="radioBtn2 rounding">
														<div id="in1" class="radioBtnInside2 deactivated">
															
														</div>
													</div>
												</div>
												<div class="col span_11_of_12">
													<h2 id="round1" class="color-text4 left" data-key8="1/4">1/4 in radius</h2>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col span_5_of_12">
										<div class="section group">
											<div class="col span_1_of_2">
												<div  class="col span_1_of_12">
													<div id="inch2" class="radioBtn2 rounding">
														<div id="in2" class="radioBtnInside2 deactivated">
															
														</div>
													</div>
												</div>
												<div class="col span_11_of_12">
													<h2 id="round2" class="color-text4 left" data-key9="1/8">1/8 in radius</h2>
												</div>
											</div>
										</div>
									</div>
									<input id="roundingValue" type="text" name="rounding" value="No" style="display:none;"/>
								</div>
							</div>
							
							
							<div  class="col span_1_of_2">
								<div  class="col span_1_of_12">
									<div id="shaping2" class="radioBtn">
										<div id="shape2" class="radioBtnInside" style="display:none">
											
										</div>
									</div>
								</div>
								<div class="col span_7_of_12">
									<h2 id="diecutting" class="color-text3 left" data-key10="Yes">ADD DIE CUTTING?</h2>
								</div>
								<div class="col span_12_of_12">
									<h2 style="margin-left:30px;" class="color-text4 left">PLEASE INCLUDE DESIRED CARD SHAPE IN PDF/AI ARTWORK UPLOAD ON NEXT PAGE</h2>
								</div>
								<input id="diecutValue" type="text" name="diecutting" value="No" style="display:none;"/>
							</div>
						</div>
						
						<div class="section group">
							<div  class="col span_1_of_2">
								<div  class="col span_1_of_12">
									<div id="shaping5" class="radioBtn">
										<div id="shape5" class="radioBtnInside" style="display:none">
											
										</div>
									</div>
								</div>
								<div class="col span_7_of_12">
									<h2 id="cutout" class="color-text3 left" data-key11="Yes">ADD CUT OUT?</h2>
								</div>
								<div class="col span_12_of_12">
									<h2 style="margin-left:30px;" class="color-text4 left">PLEASE INCLUDE DESIRED CARD SHAPE IN PDF/AI ARTWORK UPLOAD ON NEXT PAGE</h2>
								</div>
								<input id="cutoutValue" type="text" name="cutout" value="No" style="display:none;"/>
							</div>
						</div>
					</div>
				</div>
				<br/><br/>
				
				<div class="content-grid">
					<input type="radio" id="custom" name="size" value="all">
					<label class="size" for="custom">
						<div>
							<h2 class="text-option">EDGING</h2>
						</div>
					</label>
					<br/><br/>
					<div id="extras-box">
						<center><img style="margin-top:10px;" id="image" src="images/extra-text.png" /></center>
						<div id="edging-hidden" class="section group deactivated">
							<div class="col span_1_of_2">
								<div  class="col span_1_of_12">
									<div id="shaping3" class="radioBtn">
										<div id="shape3" class="radioBtnInside" style="display:none">
											
										</div>
									</div>
								</div>
								<div class="col span_7_of_12">
									<h2 class="color-text3 left">ADD EDGE PAINTING?</h2>
								</div>
								
								<div id="paint" class="section group">
									<div class="col span_2_of_2 activated">
										<h2 style="position:absolute;font-size:16pt;" class="color-text2 left">Pantone(PMS)Number:</h2>
										<input id="painting" class="letterpress2 deactivated" type="text" name="edgepainting"/>
										<h2 style="margin:40px 0 0 5px;" class="color-text4 left">PANTONE NUMBERS MUST BE FROM THE SOLID UNCOATED GUIDE AVAILABLE FOR WHITE/PEARL <br/>PAPERS ONLY</h2>
									</div>
								</div>
							</div>
							
							
							<div  class="col span_1_of_2">
								<div  class="col span_1_of_12">
									<div id="shaping4" class="radioBtn">
										<div id="shape4" class="radioBtnInside" style="display:none">
											
										</div>
									</div>
								</div>
								<div class="col span_7_of_12">
									<h2 class="color-text3 left">ADD EDGE GLIDING?</h2>
								</div>
								<div id="foil1" class="section group activated">
									<h2 style="margin:20px 0 0 0px;position:absolute;font-size:16pt;" class="color-text2 left">Foil Color:</h2>
									<select id="gliding" class="foil2 deactivated" name="edgegliding">
										<option value="No">SELECT ONE</option>
										<option value="gold">GOLD</option>
										<option value="silver">SILVER</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br/><br/>
				<div class="content-grid">
					<a style="display:absolute;margin-top:20px;" href="color.php"><img src="images/prev-btn.png"></a>
					<input id="size-submit" type="submit" value="" />
				</div>
			</form>
			<?php include 'library/footer.php';?>
		</div>
	</body>
</html>